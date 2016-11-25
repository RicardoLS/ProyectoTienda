<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Carrito de Compras</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body background="productos/fon.jpg">
	<header>
	<img src="./imagenes/download.png" id="logo">
		<a href="./carritodecompras.php" title="Pedido">
			<img src="./imagenes/carrito.png">
		</a>
	</header>
	<section>
		<nav class="menu2">
	  <menu>
	    <li><a href="./stante.php">Productos</a></li>
        <li><a href="#" class="selected">Pedido</a></li>
	    <li><a href="./cerrar.php">Salir</a></li>
	  </menu>
	</nav>
	<?php
		include 'conexion.php';
		$re=mysqli_query($dbc,"select * from productos where id=".$_GET['id'])or die("No hubo conexión");
		while ($f=mysqli_fetch_array($re)) {
		?>
			
			<center>
				<img src="./productos/<?php echo $f['imagen'];?>"><br>
				<span><?php echo $f['nombre'];?></span><br>
				<span>Precio: <?php echo $f['precio'];?></span><br>
				<a href="./carritodecompras.php?id=<?php  echo $f['id'];?>">Añadir al carrito de compras</a>
			</center>
		
	<?php
		}
	?>
		
	</section>
</body>
</html>