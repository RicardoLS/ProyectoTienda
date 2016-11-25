<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
	<script type="text/javascript" src="entrada.js"></script>
</head>
<body background="productos/fon.jpg">
	<header>
		
		
		<img src="./imagenes/download.png" id="logo">
			
	
	</header>
	<section>
	<b><h1 id = "t">REGISTRO</h1></b>
	<form id="formulario" method="post" action = "registro.php">
		<?php 
		if(isset($_GET['error'])){
			echo '<center><b>DATOS INVALIDOS<br>Intentelo de nuevo<br><br></b></center>';
		}
		?>
		<label for="nombre">Nombre</label><br>
		<input type="text" id="nombre" name="Nombre"><br>

		<label for="nombreU">Nombre de Usuario</label><br>
		<input type="text" id="nombreU" name="Usuario"><br>
		
		<label for="correo">Correo</label><br>
		<input type="text" id="nombre" name="Correo"><br>
		
		<label for="password">Password</label><br>
		<input type="password" id="contracenia" name="Password" maxlength = "10" minlength = "4"><br>

		<label for="password">Confirmar Password</label><br>
		<input type="password" id="contracenia" name="Confirmar" maxlength = "10" minlength = "4"><br>
		
		<input type="submit" name="aceptar" value="Aceptar" class="aceptar">
	</form>
	</section>
</body>
</html>