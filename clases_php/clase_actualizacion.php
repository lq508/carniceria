<?php

include("conexion.php");

$nombre_producto = $_POST["producto"];
$precio_producto = $_POST["precio"];
$prefijo_producto = $_POST["prefijo_producto"];
$id_producto = $_POST["texto_de_variable_actualizacion"];


echo $nombre_producto . $precio_producto . $prefijo_producto . $id_producto;


class Actualizando_productos{
  private $nombre_producto="";
  private $precio_producto=0;
  private $prefijo_producto="";
  private $conexion=null;
  private $id_producto=0;

  function __construct($nombre_producto , $precio_producto , $prefijo_producto , $conexion, $id_producto){

    $this->nombre_producto = $nombre_producto;
    $this->precio_producto = $precio_producto;
    $this->prefijo_producto = $prefijo_producto;
    $this->conexion=$conexion;
    $this->id_producto = $id_producto;


  }


  function Actualizando(){
    echo     $consulta="Update productos Set nombre_producto='" . $this->nombre_producto . "', precio_producto='" . $this->precio_producto . "',prefijo_producto='" . $this->prefijo_producto . "' where id='" .$this->id_producto . "'";

    $consulta="Update productos Set nombre_producto='" . $this->nombre_producto . "', precio_producto='" . $this->precio_producto . "',prefijo_producto='" . $this->prefijo_producto . "' where id='" .$this->id_producto . "'";
    $this->conexion->query($consulta);
  }


}

$objeto = new Actualizando_productos($nombre_producto , $precio_producto , $prefijo_producto , $conexion, $id_producto);
$objeto->Actualizando();

 ?>
