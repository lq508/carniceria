

<?php

include("conexion.php");


session_start();



if(!isset($_SESSION["usuario"])){
  header("Location: error_session.php");

}





$id = $_GET["texto_de_variable_eliminacion"];
$consulta="DELETE FROM productos WHERE id=" . $id . "";
$conexion->query($consulta);

$conexion->close();

require_once("eliminacion_productos_auxiliar.php");


 ?>
