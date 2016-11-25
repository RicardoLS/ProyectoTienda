<?php
session_start();
include "../conexion.php";
		$arreglo=$_SESSION['carrito'];
		$numeroventa=0;
		$re=mysqli_query($dbc,"select * from compras order by numeroventa DESC limit 1") or die(mysql_error());	
		while (	$f=mysql_fetch_array($re)) {
					$numeroventa=$f['numeroventa'];	
		}
		if($numeroventa==0){
			$numeroventa=1;
		}else{
			$numeroventa=$numeroventa+1;
		}
		for($i=0; $i<count($arreglo);$i++){
			mysqli_query($dbc,"insert into compras (numeroventa, imagen,nombre,precio,cantidad,subtotal) values(
				".$numeroventa.",
				'".$arreglo[$i]['Imagen']."',
				'".$arreglo[$i]['Nombre']."',	
				'".$arreglo[$i]['Precio']."',
				'".$arreglo[$i]['Cantidad']."',
				'".($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad'])."'
				)")or die("No hubo conexión");
		}
		
		unset($_SESSION['carrito']);
		header("Location: ../Tarjeta.php");

?>