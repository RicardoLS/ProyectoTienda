<!DOCTYPE html>
<html lang="es">
<head>
	<title>Login</title>
	<meta charset="utf-8"/>
	<title>Panel de Administración</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
	<script type="text/javascript" src="entrada.js"></script>
	 <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body background="productos/fon.jpg">
    	<header>
		<img src="./imagenes/download.png" id="logo">
		<a href="./carritodecompras.php" title="Pedido">
            <img src="./imagenes/carrito.png"></a>
	</header>
	<header>
		
		<a href="./carritodecompras.php" title="ver carrito de compras">
			
		</a>

	</header>
	<section>
		<center><div><h1  id = "t">Inicie sesión para acceder a la página:</h1></div></center>
		<br><br><br><br>
	<form id="formulario" method="post" action = "./verificarAdmin.php">
		<?php 
		if(isset($_GET['error'])){
			echo '<center>No se encuentra registrado el usuario<br></center>';
		}
		?>
		<label for="usuario">Usuario</label><br>
		<input type="text" id="nombre" name="Usuario"><br>
		<label for="password">Password</label><br>
		<input type="password" id="contracenia" name="Password"><br>
		<input type="submit" name="aceptar" value="Aceptar" class="aceptar">
	</form>
	<div class="container">
        <div class = "row">
          	<div class = "col-md-12 text-right">
                	<br><br>
					<br>
				
			</div>
		</div>
	</div>
			
		<br>
	</section>
</body>
</html>