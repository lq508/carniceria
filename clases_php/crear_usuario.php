<?php
include("conexion.php");
include("contraseña_unica.php");

$usuario = $_POST["usuario"];
$contraseña_1 = $_POST["contraseña"];
$contraseña_confirmacion = $_POST["contraseña_confirmacion"];
$contrasña_unica_1 = $_POST["contraseña_unica"];



class Proceso{
  private  $SALT = 'EstoEsUnSalt';
  private $usuario=null;
  private $contraseña=null;
  private $contraseña_confirmacion=null;
  private $contraseña_unica_1 = null;
  private $varificacion =null;
  private $conexion=null;
  function __construct($usuario , $contraseña , $contraseña_verificacion, $contraseña_unica_1 , $conexion){
      $this->usuario = $usuario;
      $this->contraseña = $contraseña;
      $this->contraseña_confirmacion = $contraseña_verificacion;
      $this->contraseña_unica_1 = $contraseña_unica_1;
      $this->conexion = $conexion;


  }

  function creacion_usuario(){

    $verificacion = new Contraseña_unica($this->conexion);

    $consulta = "SELECT contrasena from contrasena_unica where id=2";
    $resultado = $this->conexion->query($consulta)->fetch_assoc();

     hash('sha512', $this->SALT . $this->contraseña_unica_1);
     if($resultado["contrasena"] ==  hash('sha512', $this->SALT . $this->contraseña_unica_1)){


         if($this->verificacion_contraseña()){

           $encriptado_contraseña = hash('sha512', $this->SALT . $this->contraseña);
           $consulta_creacion = "INSERT INTO usuarios(usuario, contraseña_encriptada) values(?,?)";


           $ejecucion = $this->conexion->prepare($consulta_creacion);
           $ejecucion->bind_param("ss" , $this->usuario,  $encriptado_contraseña);
           $ejecucion->execute();
           $ejecucion->close();


            echo "<script> alert('usuario creado'); </script>";
           echo " <script>window.location.replace('http://localhost/carniceria/crear_cuenta.php'); </script>');";



         } else {

         }

     }else {
       echo "las contraseañas son diferentes";
     }



  }

  function verificacion_contraseña(){

    if($this->contraseña == $this->contraseña_confirmacion){
      return true;
    } else {
      return false;
    }



  }

}


$objeto = new Proceso($usuario , $contraseña_1 , $contraseña_confirmacion , $contrasña_unica_1 , $conexion );
$objeto->creacion_usuario();


 ?>
