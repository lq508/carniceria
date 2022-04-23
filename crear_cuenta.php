
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/crear_cuenta.css">
    <title></title>
  </head>
  <body>


    <div class="content">

      <form class="formulario_login" action="./clases_php/crear_usuario.php" method="POST">

        <h2> Nombre de usuario </h2>
        <input type="text" class="usuario" name="usuario" value="" required >
        <h3> Contraseña </h3>
        <input type="password" name="contraseña" class="campos" value=""  required >
        <h3> Confirmacion contraseña </h3>
        <input type="password" name="contraseña_confirmacion" class="campos" value="" required>

        <h3> Contraseña  unica </h3>
        <input type="password" name="contraseña_unica" class="campos" value="" required >



        <input class="boton_submit" type="submit" name="" value="Ingresar">

      </form>


      <a href="login.php"> Acceder </a>


    </div>



  </body>
</html>
