<?php
session_start();
include 'conexion.php';
$re=mysqli_query($dbc,"select * from usuario where Usuario='".$_POST['Usuario']."' AND 
 					Password='".$_POST['Password']."'")	or die("No hay conexión con la base de datos");
	while ($f=mysqli_fetch_array($re)) {
		$arreglo[]=array('Nombre'=>$f['Nombre'],
			'Correo'=>$f['Correo']);
	}
	if(isset($arreglo)){
		$_SESSION['Usuario']=$arreglo;
		
		header("Location: ./stante.php");
	}else{
		header("Location: ./index.php?error=datos no validos");
	}
?>