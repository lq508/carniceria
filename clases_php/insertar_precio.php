<?php
include("conexion.php");
$valor_dolar = $_POST["precio_dolar"];

class Precio_dolar{
  private $precio = null;
  private $conexion = null;
  function __construct($precio , $conexion){
    $this->precio = $precio;
    $this->conexion = $conexion;
    $this->Insertando();

  }


  function Insertando(){
      $consulta = "UPDATE precio_dolar SET valor='" . $this->precio . "' where id=1";
    $resultado =   $this->conexion->query($consulta);
  if($resultado){
      echo "Actualizacion exitosa <a href='../pages/precio_dolar.php'> panel para actualizar precio del dolar  </a> ";
  }


  }

}



$objeto = new Precio_dolar($valor_dolar , $conexion);





 ?>
