<!DOCTYPE html>
<html>
<title>Conexion a base de datos</title>
<link rel="stylesheet" href="estilos.css" type="text/css"/>
<link href='ic.ico' rel='shortcut icon' type='image/x-icon'/>
<head>

</head>
<body background="ap.jpg">
<?php

if(isset($_POST['id'])){
$id = $_POST['id'];

echo "<center>";
echo "<fieldset style=width:550px;>";
   echo   "<legend> <h2> Informacion </h2> </legend> <br/>";
	  
	echo  "<DIV ALIGN=center>";
    $id= $_POST['id'];
    $Nombre = $_POST['Nom'];
    $Telefono = $_POST['Tel'];
	$Celular = $_POST['Cel'];
    $Domicilio = $_POST['Dom'];
	$Colonia = $_POST['Col'];
    $Codigop = $_POST['Cp'];
	 
$link = mysql_connect("127.0.0.1", "root",""); 
mysql_select_db("usuarios", $link)or die(mysql_error());

$sql = "UPDATE  `usuarios`.`usuario` SET  `nombre` = '$Nombre',".
"`telefono` =  '$Telefono',".
"`celular` =  '$Celular',".
"`direccion` =  '$Domicilio',".
"`colonia` =  '$Colonia',".
"`cp` =  '$Codigop' WHERE  `usuario`.`id` ='".$id."'";
//$fecha=date("d/m/Y H:i:s",$timestamp);

  mysql_query($sql);
   
   echo "Se ha editado con exito";
  echo "<br/>";
   echo "<br/>";
  echo "<a href=conexion.php><input type='button' value='Aceptar'></a>";
  
//header ("Refresh: 2; href=conexion.php");
//echo "<script>alert(\"GUARDADO CON EXITO.\");</script>";
	
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