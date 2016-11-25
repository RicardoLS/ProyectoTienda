<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Datos Tarjeta</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
	<script type="text/javascript" src="entrada.js"></script>
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
	<b><h1 id = "t">Por favor registra tus datos de tu tarjeta:</h1></b>
	<form id="formulario" method="post" action = "admin.php">
		<label for="Nombre">Nombre de Usuario: </label><br>
		<input type="text" id="nombre" name="Nombre"><br>
		<label for="nombreU">Número de targeta</label><br>
		<input type="text" id="nombreU" name="num_tarjeta" maxlength = "32" minlengt = "32"><br>
		<label for="password">Número de seguridad</label><br>
		<input type="password" id="contracenia" name="num_seguridad" maxlength = "3" minlength = "3"><br>
        <p>Dirección:</p><br>
        <label for="Pais">Pais: </label><br>
		<input type="text" id="pais" name="pais"><br>
        <label for="Estado">Estado: </label><br>
		<input type="text" id="estado" name="estado"><br>
        <label for="muni">Municipio o distrito: </label><br>
		<input type="text" id="muni" name="muni"><br>
        <label for="colonia">Colonia: </label><br>
		<input type="text" id="colonia" name="colonia"><br>
        <label for="calle">Calle: </label><br>
		<input type="text" id="calle" name="calle"><br>
        <label for="numero">Numero: </label><br>
		<input type="text" id="numero" name="numero"><br>
		<input type="submit" name="aceptar" value="Aceptar" class="aceptar">
	</form>
	</section>
</body>
</html>