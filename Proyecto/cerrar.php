<?php
session_start();
unset($_SESSION['carrito']);
include "./conexion.php";
$borrar =mysqli_query("DELETE FROM compras");
//session_destroy($_SESSION[all]);
header("Location: ./index.php");
?>