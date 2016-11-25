<?php
	$db='tienda';
	$dbc=mysqli_connect('localhost','root','','tienda')or die("no se ha podido establecer la conexion");
	$sdb=mysqli_select_db($dbc,$db)or die("la base de datos no existe");
?>