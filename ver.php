<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="estilos.css" type="text/css"/> 
<link href='ic.ico' rel='shortcut icon' type='image/x-icon'/>	  
    </head>
	<body background="ap.jpg">
	<?php
	if(isset($_GET['id']) && $_GET['id'] != ''){
	
	$link = mysql_connect("127.0.0.1", "root",""); 
mysql_select_db("usuarios", $link)or die(mysql_error());
	
		$id = $_GET['id'];
		$q = "SELECT * FROM usuario WHERE id='".$id."'";
		$ej=mysql_query($q)or die(mysql_error());
		$re=mysql_fetch_object($ej);
		
	?>
	<center>
	  <fieldset style="width:450px;">
      <legend> <h2> Agregar Nuevo Usuario </h2> </legend> <br/>
	  
	  <DIV ALIGN=left>
	<a href="sesion.php"><h4>cerrar sesion</h4></a>
   <div>
   
   <?php echo "ID: ".$re->id; ?>
   <br/>
   <br/>
   <?php echo "Nombre: ".$re->nombre; ?>
   <br/>
   <br/>
   <?php echo"Telefono: ". $re->telefono; ?>
   <br/>
   <br/>
   <?php echo "Celular: ".$re->celular; ?>
   <br/>
   <br/>
   <?php echo "Colonia: ".$re->colonia; ?>
   <br/>
   <br/>
   <?php echo "Codigo P.: ".$re->cp; ?>
   <br/>
   <br/>
   <?php
   	//$Cel = $_POST['id'];
    //$Nom = $_POST['Nom'];
    //$Tel = $_POST['Tel'];
	//$Cel = $_POST['Cel'];
	//$Dom = $_POST['Dom'];
	//$Cel = $_POST['Col'];
	//$Dom = $_POST['Cp'];
    
	//echo "Nombre: ".$id."<br />";
	//echo "Nombre: ".$Nom."<br />";
	//echo "Telefono: ".$Tel."<br />";
	//echo "Celular: ".$Cel."<br />";
	//echo "Domicilio: ".$Dom."<br />";
	//echo "Nombre: ".$Col."<br />";
	//echo "Nombre: ".$Cp."<br />";
	?>
   <form method="post" action="conexion.php">
   </DIV>
	   <center>
   <input type="submit" value="Aceptar" />

</form>

</div> 
</center>
     </fieldset>
	 
	 </center>
	 <?php
	 echo"</center>";
	 }else{
	 echo "No tiene permiso para ingresar a esta pagina.";
	 }
    ?>
 </body>
</html>