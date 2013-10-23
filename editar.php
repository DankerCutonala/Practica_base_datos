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
<form method="post" action="codigo_editar.php">

	<input type="hidden" name="id" value="<?php echo $re->id; ?>"/>
   <label for="txtNombre">ID</label><br/>
   <input type="text" size="40" maxlength="255"  name="id" style="width: 320px; height: 15px" value="<?php echo $re->id; ?>"readonly>
   <br/>
   <br/>
   <label for="txtNombre">Nombre</label><br/>
   <input type="text" size="40" maxlength="255"  name="Nom" style="width: 320px; height: 15px" value="<?php echo $re->nombre; ?>"/>
   <br/>
   <br/>
   <label for="txtCorreo">Telefono</label><br/>
   <input type="text" size="40" maxlength="255"  name="Tel" style="width: 150px; height: 15px" value="<?php echo $re->telefono; ?>"/>
   <br/>
   <br/>
  <label for="txtAsunto">Celular</label><br/>
   <input type="text" size="40" maxlength="255"  name="Cel" style="width: 150px; height: 15px" value="<?php echo $re->celular; ?>"/>
   <br/>
   <br/>
  <label for="txtAsunto">Direccion</label><br/>
   <input type="text" size="40" maxlength="255" name="Dom" style="width: 320px; height: 15px" value="<?php echo $re->direccion; ?>"/>
   <br/>
   <br/>
  <label for="txtAsunto">Colonia</label><br/>
   <input type="text" size="40" maxlength="255"  name="Col" style="width: 320px; height: 15px" value="<?php echo $re->colonia; ?>"/>
   <br/>
   <br/>
  <label for="txtAsunto">Codigo Postal</label><br/>
   <input type="text" size="40" maxlength="255"  name="Cp" style="width: 100px; height: 15px" value="<?php echo $re->cp; ?>"/>
   <br/>
   <br/>
   <form method="post" action="conexion.php">
   </DIV>
	   <center>
   <input type="submit" value="Guardar" />

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