
<?php
include("controlador.php");
include("conexion.php");


$usuario = $_POST["usuario"];
$password = $_POST["password"];

$controlador_verificacion = new Controlador($conexion , $usuario , $password);









 ?>
