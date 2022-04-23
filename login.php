<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/login.css">
    <meta name="robots" content="noindex">


  </head>
  <body>

    <div class="content">

      <?php



       ?>

      <form class="formulario_login" action="./clases_php/confirmacion.php" method="POST">

        <h2> Nombre de usuario </h2>
        <input type="text" class="campos" name="usuario" value="">
        <h3> Contraseña </h3>
        <input type="password" name="password" class="campos" value="">

        <input class="boton_submit" type="submit" name="" value="Ingresar">

      </form>


      <a class="boton_crear" href="crear_cuenta.php"> Crear cuenta</a>



    </div>








  </body>
</html>
