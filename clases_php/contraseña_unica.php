<?php
class Contraseña_unica{
  private $conexion=null;
function  __construct($conexion){
    $this->conexion = $conexion;

  }

  function valor_contraseña_unica(){
    $consulta = "SELECT contraseña from contraseña_unica WHERE id=1";
   $contraseña = $this->conexion->query($consulta)->fetch_assoc();
   $this->conexion->close();
   return  $contraseña["contraseña"];
  }


}




 ?>
