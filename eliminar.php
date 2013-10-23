<!DOCTYPE html>
</html>
<head>
</head>
<body background="ap.jpg">
<?php
if(isset($_GET['id']) && $_GET['id']!=""){
$id = $_GET['id'];
echo "<center>";
echo "<fieldset style=width:550px;>";
   echo   "<legend> <h2> Informacion </h2> </legend> <br/>";
	  
	echo  "<DIV ALIGN=center>"; 

	//echo "<form method='post' action='conexion.php'>";
$link = mysql_connect("127.0.0.1", "root",""); 
mysql_select_db("usuarios", $link)or die(mysql_error());

   $sql = "DELETE FROM `usuarios`.`usuario` WHERE `usuario`.`id`='".$id."'";
   
   mysql_query($sql); 
   echo "Se ha eliminado con exito.";
  echo "<br/>";
   echo "<br/>";
  echo "<a href='conexion.php'><input type='button' value='Aceptar'></a>";

//echo "<script>alert(\"GUARDADO CON EXITO.\");</script>";
	//echo"</form>";
	echo "</div>"; 
echo "</center>";
 echo    "</fieldset>";
	 
	 echo"</center>";
	 }else{
	 echo "No tiene permiso para ingresar a esta pagina.";
	 }
    ?>
	</body>
	
	</html>