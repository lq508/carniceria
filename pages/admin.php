<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">

    <title></title>
    <link rel="stylesheet" href="../css/admin.css">

  </head>
  <body>

    <?php

    session_start();

    if(!isset($_SESSION["usuario"])){
      header("Location: error_session.php");

    }



     ?>
    <div class="content">

      <header>

        <nav>



          <div class="nav__content">
            <img class="nav__content__img" src="../images/logo_header_4.png" alt="logo_de_la_carniceria">



            <div class="nav__content_menú">

              <p>Menú</p>
              <img  src="./images/flecha.svg" alt="flecha de menu responsive">
            </div>
            <ul class="nav__ul">


              <li class="nav__li nav_inicio"> <a href="admin.php"> Inicio </a> </li>
              <li class="nav__li nav_eliminar"> <a href="pagina_eliminacion.php" > Eliminar producto </a> </li>
              <li class="nav__li nav_actualizar"> <a href="pagina_actualizacion.php"> Actualizar producto </a></li>
              <li class="nav__li nav_crear"> <a href="pagina_creacion.php"> Crear producto </a> </li>
              <li class="nav__li nav_crear"> <a href="pagina_agotado.php"> Agotar Producto </a> </li>
              <li class="nav__li nav_crear"> <a href="precio_dolar.php"> Precio_dolar</a> </li>

                <li class="nav__li nav_crear"> <a href="../clases_php/cerrar_session.php"> Cerrar sesion </a> </li>

            </ul>




          </div>

        </nav>

      </header>


      <section class="seccion_1">

        <div class="inicio_admin">
          <h1> Precio del dolar </h1>


        </div>




      </section>




      <footer>
        <div class="image__footer">
          <img src="../images/logo_footer.png" alt="logo_de_la_carniceria">


        </div>

        <div class="footer__opciones">



          <ul class="footer__opciones_ul">
            <li> Menú</li>
            <li class="footer__opciones_li"> Inicio </li>
            <li class="footer__opciones_li">  Eliminar producto  </li>
            <li class="footer__opciones_li">  Actualizar producto  </li>
            <li class="footer__opciones_li">  Crear producto </li>



          </ul>

        </div>



      </footer>

    </div>

    </div>


    <script src="../javascript/menu_responsive_para_admin.js">

    </script>

  </body>
</html>
