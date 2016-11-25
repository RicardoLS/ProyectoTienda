<html>
    <head><title>REGISTRO</title>
    
    </head>
    
    <body bgcolor="grey">
        <?php
		
		    $Nombre = $_POST['Nombre'];
		    $Correo= $_POST['Correo']; 
        $Usuario = $_POST['Usuario'];
        $Password=$_POST['Password'];
        $Confirmar=$_POST['Confirmar'];
    
        $dbc= mysqli_connect('localhost','root','','basededatos') or die('Error al realizar la conexion con el servidor MySQL');
        
        if($Password == $Confirmar)
        {
        $query="INSERT INTO usuario (Nombre,Correo,Usuario,Password) 
        VALUES ('$Nombre','$Correo','$Usuario','$Password')";
        
        $result=mysqli_query($dbc,$query) or die('Error al ejecutar la intruccion SQL');
        
        mysqli_close($dbc);
        header("Location: ./bienvenido.php");
        }
        else
        {
           header("Location: ./inRegistro.php?error=datos no validos");
           
        }
        
	?>
    
    
    </body>
</html>