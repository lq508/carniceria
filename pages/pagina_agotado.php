<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">

    <link rel="stylesheet" href="../css/pagina_agotado.css">
    <title></title>
  </head>
  <body>

    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="../css/agotado.css">
      </head>
      <body>

        <?php

        session_start();
    // para redirigir si alguien se la quiere dar de listo y acceder sin permiso
        if(!isset($_SESSION["usuario"])){
          header("Location: error_session.php");

        }



         ?>

        <?php

        include("../clases_php/conexion.php");

        $consulta = "SELECT * FROM productos";

    $resultado = $conexion->query($consulta);
    $numero_de_productos=0;

          while($rows = mysqli_fetch_assoc($resultado)){
            $numero_de_productos++;

          }
          $resultado->close();







         ?>

        <div class="content">

          <header>

            <nav>



                <img class="nav__content__img" src="../images/logo_header_4.png" alt="logo_de_la_carniceria">



                <div class="nav__content  ">

                  <div class="nav__content_menú">
                  <p>Menú</p>
                  <img  src="../images/flecha.svg" alt="flecha de menu responsive">
                </div>
                <ul class="nav__ul">


                  <li class="nav__li nav_inicio"> <a href="admin.php"> Inicio </a> </li>
                  <li class="nav__li nav_eliminar"> <a href="pagina_eliminacion.php" > Eliminar producto </a> </li>
                  <li class="nav__li nav_actualizar"> <a href="pagina_actualizacion.php"> Actualizar producto </a></li>
                  <li class="nav__li nav_crear"> <a href="pagina_creacion.php"> Crear producto </a> </li>
                  <li class="nav__li nav_crear"> <a href="pagina_agotado.php"> Agotar Producto </a> </li>

                    <li class="nav__li nav_crear"> <a href="../clases_php/cerrar_session.php"> Cerrar sesion </a> </li>


                </ul>




              </div>

            </nav>

          </header>


          <section>



            <div class="seccion_1" >

          <?php
          // Pintando los productos
        $resultado_2   = $conexion->query($consulta);
        $conexion->close();
          while($informacion = mysqli_fetch_assoc($resultado_2) ){
            //proceso para definir el eliminado del producto
              $agotado="No agotado";
            if($informacion["agotado"]){

              $agotado="Agotado";

            } else{
              $agotado="Disponible";
            }
            $id_del_producto_a_eliminar =(string) $informacion["id"];
            $background_de_cada_cuadro = "style='background-image:url(http://localhost/carniceria/clases_php/" .  $informacion["imagen_producto"] . ")'";
          $cuadros_productos="
             <div class='div_producto'>
              <div class='imagen'" . $background_de_cada_cuadro . "></div>
               <div class='informacion'>

               <h3 class='primer_titulo'> Nombre producto  </h3>".
               $informacion["nombre_producto"]."
               <h3> Precio producto </h3> " .
               $informacion["precio_producto"]
                ."
                 <h3> Prefijo del  producto </h3> " .
                  $informacion["prefijo_producto"]
                 ."
                 <h3>".
                 $agotado
                  . " </h3>
                 <br>


                 <form action='../clases_php/agotado.php' method='POST'>

                  <input type='text' name='id_agotado' class='texto_de_variable_eliminacion' value=".$id_del_producto_a_eliminar.">
                <input type='submit' value='Agotado'>

                 </form>
                    <form action='../clases_php/agotado.php' method='POST'>
                    <input type='text' name='id_no_agotado' class='texto_de_variable_eliminacion' value=".$id_del_producto_a_eliminar.">
                  <input type='submit' value='No agotado '>
                     </form>



                   </div>
               </div>  ";
            echo $cuadros_productos;
            echo "<br>";
          }






               ?>




              </div>

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

        <script src="../javascript/menu_responsive_para_admin.js">

        </script>

        <script type="text/javascript">

        // calculando el tamaño del cuadrio

        let valor ="<?php echo  $numero_de_productos ?>";
        console.log(valor);
        let seccion_1 = document.querySelector(".seccion_1");


        if(screen.width < 900){
          let  tamaño = 750 * valor;
            seccion_1.style.height = tamaño + "px";


        } else{
        let  tamaño = 580 * valor;
          seccion_1.style.height = tamaño + "px";



        }

        </script>


      </body>
    </html>

  </body>
</html>
