<!DOCTYPE html>		
<html>
<head>
<title>Conexion a base de datos</title>
<link rel="stylesheet" href="estilos.css" type="text/css"/>
<link href='ic.ico' rel='shortcut icon' type='image/x-icon'/>
</head>
<body background="ap.jpg">

<center>
<fieldset style=width:600px>
   <legend> <h2> BASE DE DATOS </h2> </legend> <br/>
	  
	<DIV ALIGN=left>

	<script> 

var mydate=new Date(); 
var year=mydate.getYear(); 
if (year < 1000) 
year+=1900; 
var day=mydate.getDay(); 
var month=mydate.getMonth()+1; 
if (month<10) 
month="0"+month; 
var daym=mydate.getDate(); 
if (daym<10) 
daym="0"+daym; 
document.write("<small><font color='000000' face='Arial'><b>"+daym+"/"+month+"/"+year+"</b></font></small>") 

</script> 

	<?php
	
	echo "<center><a href='sesion.php'><h4>cerrar sesion</h4></a></center>";
	echo "<center><a href=agregar.php><input type='button' value='Agregar'></a></center>";
	echo "<br/>";
	
	function conecta(){
$link = mysql_connect("127.0.0.1", "root",""); 
mysql_select_db("usuarios", $link)or die(mysql_error());
}

$con=conecta();
$qu="select * from usuario";
$ej=mysql_query($qu)or die(mysql_error());
$count=mysql_num_rows($ej);

$re=mysql_fetch_object($ej);
$contador=0;

echo "<center>";
echo "<table border=7 bordercolor=#005C73>";// bgcolor=00CED1>";
echo"<center><p>TABLA DE USUARIOS</h1></p>";

echo "<th>ID</th><th>NOMBRE</th><th>TELEFONO</th><th>CELULAR</th>
<th>DIRECCION</th><th>OPCIONES</th>";
while($contador<$count){
echo '<tr><td>'.$re->id.'</td><td>'.$re->nombre.'</td><td>'.$re->telefono.'</td>
<td>'.$re->celular.'</td><td>'.$re->direccion.'</td>
<td><a href="editar.php?id='.$re->id.'">Editar</a>
<a href="eliminar.php?id='.$re->id.'">Eliminar</a>
<a href="ver.php?id='.$re->id.'">Ver</a></td></tr>';
	 
$re=mysql_fetch_object($ej);
$contador++;
}
echo "</table>";
echo "</center>";
echo "</div>"; 
echo "</center>";
 echo    "</fieldset>";
	 
	 
?>
</center>
</body>
</html>