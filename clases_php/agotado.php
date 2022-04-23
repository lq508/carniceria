<?php

include("conexion.php");


if(isset($_POST["id_agotado"])){
  $id = $_POST["id_agotado"];

}

if(isset($_POST["id_no_agotado"])){
  $id = $_POST["id_no_agotado"];

}

echo $id;

class Agotado{
private $conexion = null;
private $id = null ;


  function __construct($conexion , $id){
    $this->conexion = $conexion;
    $this->id = $id;
    $this->Insertando_datos();
  }


  function Insertando_datos(){
    if(isset($_POST["id_agotado"])){
      $agotado = 1;
      $consulta = "UPDATE productos SET agotado='" . $agotado . "' where id='" . $this->id . "'";
      $this->conexion->query($consulta);
      header("Location: ../pages/pagina_agotado.php");



    } else{
      $agotado = 0;
      $consulta = "UPDATE productos SET agotado='" . $agotado . "' where id='" . $this->id . "'";
      $this->conexion->query($consulta);
      echo $consulta;

    header("Location: ../pages/pagina_agotado.php");

    }


  }

}


$objeto = new Agotado($conexion , $id);







 ?>
