<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/productos.css">
    <meta name="viewport" content="width=device-width"/>
  </head>
  <body>


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


              <li class="nav__li"> <a href="http://localhost/carniceria/index.php"> Inicio </a> </li>
              <li class="nav__li"> <a href="http://localhost/carniceria/paginas/nosotros.php"> Nosotros </a> </li>
              <li class="nav__li"><a href="http://localhost/carniceria/paginas/contacto.php"> Contacto </a></li>
              <li class="nav__li"><a href="http://localhost/carniceria/paginas/productos.php"> Productos  </a></li>




            </ul>




          </div>

        </nav>
        <div class="head__image_breagroumb">


        </div>


      </header>



      <section class="seccion_titulo">
        <div class="titulo">

          <h1> Productos </h1>


        </div>


      </section>

      <section>

        <?php
        $consulta_2 = "SELECT * FROM precio_dolar where id=1";


        $resultado_3   = $conexion->query($consulta_2)->fetch_assoc();


         ?>

         <div class="content_precio_dolar">

           <div class="precio_dolar">
             <p> Precio del dolar</p>
             <p> <?php echo $resultado_3["valor"] . "bsD"; ?></p>

           </div>

         </div>

      </section>





      <section>



        <div class="seccion_1" >



      <?php
      // Pintando los productos
    $resultado_2   = $conexion->query($consulta);
    $conexion->close();
        while($informacion = mysqli_fetch_assoc($resultado_2) ){
        //proceso para definir el eliminado del producto
        $id_del_producto_a_eliminar =(string) $informacion["id"];
        $nombre_producto = $informacion["nombre_producto"];
        $valor_agotado = $informacion["agotado"];
        $boton_compra="";
        if($valor_agotado){
          $boton_compra="boton_agotado";
          $mensaje_boton= "Agotado";
        } else {
          $boton_compra="boton_compra";
          $mensaje_boton= "Compra";


        }

$precio_producto_bolivares = "";
        if( $informacion["prefijo_producto"] == "$"){
          $precio_producto_bolivares = $resultado_3["valor"] * $informacion["precio_producto"] . "bSD";
          echo $precio_producto_bolivares;
        } else {
          $precio_producto_bolivares = "";

        }


    //    $precio_producto_bolivares = $resultado_2["valor"] * $informacion["precio_producto"];
    //    echo $precio_producto_bolivares;
        $background_de_cada_cuadro = "style='background-image:url(http://192.168.1.109/carniceria/clases_php/" .  $informacion["imagen_producto"] . ")'";
      $cuadros_productos="
         <div class='div_producto'>

        <div class='content_imagen'>
        <div class='imagen'" . $background_de_cada_cuadro . "></div>

        
        </div>

           <div class='informacion'>

           <h3 class='primer_titulo'> Nombre del producto  </h3>".
           $informacion["nombre_producto"]."
           <h3> Precio del producto </h3> " .
           $informacion["precio_producto"] . $informacion["prefijo_producto"] . "
             <br>
            ". $precio_producto_bolivares . "



              <input type='text' name='texto_de_variable_eliminacion' class='texto_de_variable_eliminacion' value=".$id_del_producto_a_eliminar.">

              <div class=" . $boton_compra . ">
              <a href='https://api.whatsapp.com/send?phone=+584143847019&text=¡¡Hola!!, estoy interesado en $nombre_producto  '> ". $mensaje_boton . "  </a>
              <img class='svg_imagen' src='../images/car.svg'>

              </div>



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
            <li class="footer__opciones_li"> <a href="http://localhost/carniceria/index.php"> Inicio </a> </li>
          <li class="footer__opciones_li"> <a href="http://localhost/carniceria/paginas/nosotros.php"> Nosotros </a> </li>
          <li class="footer__opciones_li">  <a href="http://localhost/carniceria/paginas/contacto.php"> Contacto </a>  </li>
          <li class="footer__opciones_li">  <a href="http://localhost/carniceria/paginas/productos.php"> Productos  </a>  </li>



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
      console.log("me ejecuto?");
      let  tamaño = 750 * valor;
      console.log(tamaño + " este es el tamaño");
        seccion_1.style.height = tamaño + "px";


    } else{
    let  tamaño = 400 * valor;
      seccion_1.style.height = tamaño + "px";



    }

    </script>

    <script type="../javascript/boton_agotado.js">

    </script>




  </body>
</html>
