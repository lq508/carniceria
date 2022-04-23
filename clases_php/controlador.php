<?php

class Controlador{
private   $conexion_controlador =null;
private $usuario = null;
private $contraseña = null;
private  $SALT = 'EstoEsUnSalt';


function __construct($conexion , $usuario , $contraseña){

   $this->conexion_controlador= $conexion;
   $this->usuario = $usuario;
   $this->contraseña=$contraseña;
   $this->Verificacion_seccion();



}


function  Verificacion_seccion(){
    $consulta = "SELECT * FROM usuarios";


    $resultado= $this->conexion_controlador->query($consulta);
    $confirmacion = 0 ;
    $usuario_confirmado = null;
    while($informacion = mysqli_fetch_assoc($resultado)){


       if($informacion["usuario"] == $this->usuario){

         $confirmacion++;

         if($confirmacion > 0){

           $usuario_confirmado = $informacion;
           $confirmacion = 0;


         }
       }



    }

    if($usuario_confirmado !=null ){
      if($usuario_confirmado["contraseña_encriptada"] == hash('sha512', $this->SALT . $this->contraseña)){
        session_start();
        $_SESSION["usuario"] = $usuario_confirmado["usuario"];
        header("Location: ../pages/admin.php");

      } else{
        echo " Usuario o contraseña incorrectos !! <a href='../login.php'> Ir al login </a>";

      }


    } else {
      echo " Usuario o contraseña incorrectos !! <a href='../login.php'> Ir al login </a>";

    }









}







}





 ?>
