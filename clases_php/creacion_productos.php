

<?php


// DEBO AGREGAR UNA CONFIRMACION DE CONTRASEÑA Y USUARIO
include("conexion.php");


session_start();



if(!isset($_SESSION["usuario"])){
  header("Location: error_session.php");

}



$consulta = "SELECT * from productos where id=(SELECT MAX(id) from productos)";

$id = $conexion->query($consulta)->fetch_assoc() ;
$id_2 = $id["id"] + 1;




$nombre_producto = $_REQUEST["nombre_producto"];
$precio = $_REQUEST["precio"];
$prefijo_producto = $_REQUEST["prefijo_producto"];

$image = $_FILES["imagen"]["name"];
$ruta = $_FILES["imagen"]["tmp_name"];
$destino="fotos/" . $id_2  . $image;

echo $precio;

$consulta = "INSERT INTO productos(nombre_producto , imagen_producto,prefijo_producto,precio_producto) values(?,?,?,?)";



$ejecucion = $conexion->prepare($consulta);
$ejecucion->bind_param("ssss",$nombre_producto,  $destino , $prefijo_producto , $precio  );
$ejecucion->execute();
$ejecucion->close();


echo "Registro exitoso";

copy($ruta, $destino  );

require_once("../pages/pagina_creacion.php");
$confirmacion ="Registro exitoso";






 ?>
