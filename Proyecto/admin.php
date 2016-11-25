<?php
	include "conexion.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Factura</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body background="productos/fon.jpg">
	<header>
		
		<a href="./carritodecompras.php" title="ver carrito de compras">
			
		</a>
	</header>
	
	<section>

	<center><h1>FACTURA</h1></center>

	<table border="0px" width="100%">	
		<tr>
			<td><b>Imagen</b></td>
			<td><b>Nombre</b></td>
			<td><b>Precio</b></td>
			<td><b>Cantidad</b></td>
			<td><b>Subtotal</b></td>
		</tr>	

		<?php
		$total = 0;
			$re=mysqli_query($dbc,"select * from compras");
			$numeroventa=0;
			while ($f=mysqli_fetch_array($re)) {
					
					echo '<tr>
						<td><img src="./productos/'.$f['imagen'].'" width="100px" heigth="100px" /></td>
						<td>'.$f['nombre'].'</td>
						<td>'.$f['precio'].'</td>
						<td>'.$f['cantidad'].'</td>
						<td>'.$f['subtotal'].'</td>

					</tr>';
					$total = $f['subtotal'] + $total;
			}

			
		?>
		
	</table>
	<?php
			echo "Datos de compra";
			$pais = $_POST['pais'];
        $estado = $_POST['estado'];
        $muni = $_POST['muni'];
        $colonia = $_POST['colonia'];
        $calle = $_POST['calle'];
        $numero = $_POST['numero'];
   $Usuario = $_POST['Nombre'];
    //$numt=$_POST['num_tarjeta'];
    //$nums=$_POST['num_seguridad'];
       // $query="INSERT INTO tarjeta (id_tarjeta,num_tarjeta,num_seguridad) VALUES ('',$numt','$nums')";
        //$query="INSERT INTO direccion (id_direccion,Pais,Estado,Municipio,Colonia,Calle,Numero) VALUES ('',$pais','$estado','$muni','$colonia','$calle','$numero')";
       // $result=mysqli_query($dbc,$query) or die('Error al ejecutar la intruccion SQL');
			echo "<br>Las computadoras se enviaran al usuario <b>".$Usuario."</b> con direccion  a <b>".$pais." en el estado de ".$estado." municipio o distrito ".$muni." colonia ".$calle." numero: ".$numero."</b>";
			echo "<br>El momto de la compra es <b>$".$total."</b>";
			echo "<br><br>¡Gracias por tu compra! ".$Usuario." vuelve pronto";
?>
		<br><a href = "./cerrar.php" alight = "rigth">Cerrar sesión</a>
        <br><a href = "./stante.php" alight = "left">Seguir comprando</a>
	</section>
</body>
</html>