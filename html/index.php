<?php

$dbName = array("Database" => "tubos_monterrey", "Encrypt" => false, "TrustServerCertificate" => true);
$serverName = "HONOR\HONOR";

// $conn = sqlsrv_connect($serverName, $dbName);



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Tubos Monterrey - </title>
  <!-- Font Icons -->
  <link media="all" rel="stylesheet" href="css/fonts//icomoon.css">
  <!--     <link media="all" rel="stylesheet" href="css/fonts/roxine-font-icon/roxine-font.css"> -->
  <link media="all" rel="stylesheet" href="vendors/font-awesome/css/font-awesome.css">
  <!-- Vendors -->
  <link media="all" rel="stylesheet" href="vendors/owl-carousel/dist/assets/owl.carousel.min.css">
  <link media="all" rel="stylesheet" href="vendors/owl-carousel/dist/assets/owl.theme.default.min.css">
  <link media="all" rel="stylesheet" href="vendors/animate/animate.css">
  <link media="all" rel="stylesheet" href="vendors/rateyo/jquery.rateyo.css">
  <link media="all" rel="stylesheet" href="vendors/bootstrap-datepicker/css/bootstrap-datepicker.css">
  <link media="all" rel="stylesheet" href="vendors/fancyBox/source/jquery.fancybox.css">
  <link media="all" rel="stylesheet" href="vendors/fancyBox/source/helpers/jquery.fancybox-thumbs.css">
  <!-- Bootstrap 4 -->
  <link media="all" rel="stylesheet" href="css/bootstrap.css">
  <!-- Rev Slider -->
  <link rel="stylesheet" type="text/css" href="vendors/rev-slider/revolution/css/settings.css">
  <link rel="stylesheet" type="text/css" href="vendors/rev-slider/revolution/css/layers.css">
  <link rel="stylesheet" type="text/css" href="vendors/rev-slider/revolution/css/navigation.css">
  <!-- Theme CSS -->
  <link media="all" rel="stylesheet" href="css/main.css">
  <!-- Custom CSS -->
  <link media="all" rel="stylesheet" href="css/custom.css">
</head>

<body class="white-overlay">
  <div class="preloader" id="pageLoad">
    <div class="holder">
      <div class="coffee_cup"></div>
    </div>
  </div>
  <!--Side panel-->
  <nav class="nav-wrap bg-white">
    <!-- opener inside of collapsible menu -->
    <div class="nav-trigger nav-trigger-close">
      <a href="#">Cerrar Panel <i class="icon-long-arrow-right"></i> </a>

    </div>
    <ul class="side-nav">
      <li><a href="#rev_slider_279_1_wrapper">Inicio</a></li>
      <li><a href="#about">Acerca de</a></li>
      <li><a href="#container">Políticas y Reglamentos</a></li>
      <li><a href="#">Contacto</a></li>
    </ul>

    <div class="divider-border"><span class="sr-only"></span></div>
    <div class="p-3">
      <ul class="social-network square-icon shadowed-icon">
        <li><a href="#"><span class="icon-facebook"></span></a></li>
        <li><a href="#"><span class="icon-twitter"></span></a></li>
        <li><a href="#"><span class="icon-google-plus"></span></a></li>
        <li><a href="#"><span class="icon-pinterest"></span></a></li>
        <li><a href="#"><span class="icon-dribbble"></span></a></li>
      </ul>
    </div>
  </nav>
  <!-- main wrapper -->
  <div id="wrapper" class="no-overflow-x">
    <div class="page-wrapper">
      <header class="fixed-top main-header header-white transparent with-side-panel-ico" id="waituk-main-header">
        <div id="nav-section">
          <div class="bottom-header container-fluid mega-menus" id="mega-menus">
            <nav class="navbar navbar-toggleable-md no-border-radius no-margin mega-menu-multiple" id="navbar-inner-container">
              <!-- <form action="mega-menu-5.html" id="top-search" class="no-margin top-search">
                                <div class="form-group no-margin">
                                    <input class="form-control no-border" id="search_term" name="search_term" placeholder="Type & Press Enter" type="text">
                                </div>
                            </form>
                            <button type="button" class="navbar-toggler navbar-toggler-left" data-toggle="collapse" data-target="#mega-menu">
                                <span class="navbar-toggler-icon"></span>
                            </button>-->
              <a class="navbar-brand mr-auto m-sm-auto" style="width: 10%;" href="#"> <img src="img/Copia de TubosMonterrey-Logo Blanco.svg"> <img src="img/TubosMonterreyLogo.svg" alt="Tubos Monterrey"> </a>
              <div class="collapse navbar-collapse flex-row-reverse" id="mega-menu">
                <ul class="nav navbar-nav margin-0-sm">
                  <li>
                    <a href="#rev_slider_279_1_wrapper">Inicio</a>
                  </li>
                  <li>
                    <a href="#celebrate"> Celebraciones </a>
                  </li>
                  <li class="dropdown right-dropdown" data-animation="fadeIn">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#about" data-title="Nosotros"> Nosotros </a>
                    <ul class="dropdown-menu no-border-radius">
                      <li><a href="#about"> Cobertura </a></li>
                      <li><a href="#history">Nuestra Historia </a></li>
                      <li class="dropdown dropdown-right dropdown-parent">
                        <a class="sub-marker" href="#">Organigrama<i class="icon-ios-more icn-right"></i></a>
                        <ul class="dropdown-menu dropdown-menu-indent-sm no-border-radius">
                          <?php

                          $query = "SELECT * FROM area WHERE estatus = 1";
                          /*   $stmt = sqlsrv_query($conn, $query);

                                                if ($stmt === false) {
                                                    die(print_r(sqlsrv_errors(), true));
                                                }

                                                while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                                                    echo  "<li><a href=#".str_replace(' ', '', $row["nombre"]).">".$row["nombre"]."</a></li>";
                                                }
*/
                          ?>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#container"> Políticas y Reglamentos </a>
                  </li>
                  <li>
                    <a href="#"> Noticias </a>
                  </li>
                  <li>
                    <a href="#">Directorio</a>
                  </li>
                  <li>
                    <a href="#">Interacción</a>
                  </li>
                  <li>
                    <a href="#"> Comunicación Interna </a>
                  </li>
                  <li class="cart-list margin-0-sm">

                  </li>
                </ul>
              </div>

              <div class="nav-trigger navbar-pos-search overlay-trigger">
                <a href="#" class="navbar-link"><i class="icon-sort-1"></i></a>
              </div>
            </nav>
          </div>
        </div>
      </header>
      <!--/header of the page -->
      <main>
        <!-- visual/banner of the page -->
        <div class="banner banner-home">
          <!-- revolution slider starts -->
          <div id="rev_slider_279_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="restaurant-header" style="margin:0px auto;background-color:#fff;padding:0px;margin-top:0px;margin-bottom:0px;">
            <div id="rev_slider_70_1" class="rev_slider fullscreenabanner" style="display:none;" data-version="5.1.4">
              <ul>
                <li class="slider-color-schema-dark" data-index="rs-2" data-transition="fade" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="1000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
                  <!-- main image for revolution slider -->
                  <img src="img/tubos.jpg" alt="image description" data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-bgfit="cover" data-no-retina>

                  <div class="tp-caption tp-shape tp-shapewrapper" id="slide-1699-layer-10" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="on" data-responsive="off" data-frames='[{"from":"y:0;sX:1;sY:1;opacity:0;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="background-color:rgba(0, 0, 0, 0.57);"> </div>
                  <div class="slider-sub-title text-white tp-caption tp-resizeme rs-parallaxlevel-0" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['top','top','middle','middle']" data-voffset="['145','100','10','20']" data-width="['1200','960','720','540']" data-textalign="left" data-fontsize="['30','28','24','20']" data-lineheight="['31','62','50','50']" data-letterspacing="5" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-paddingright="[25,25,25,25]" data-paddingleft="[25,25,25,25]">
                    Tubería, Válvulas, Conexiones <br> y Articulos de Plomería.
                  </div>
                  <div class="slider-main-title text-white tp-caption tp-resizeme rs-parallaxlevel-1" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['top','top','middle','middle']" data-voffset="['250','150','50','50']" data-width="['1000','760','420','240']" data-textalign="left" data-fontsize="['60','18','14','0']" data-fontweight="600" data-letterspacing="['5','10','0','0']" data-lineheight="['80','25','25','25']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[80%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-paddingright="[25,25,25,25]" data-paddingleft="[15,15,15,15]">
                    Tubos Monterrey <br>
                    <a class="btn btn-primary has-radius-small text-center" href="#celebrate">Explorar</a>
                  </div>
                  <div class="tp-caption rev-btn  rs-parallaxlevel-10" id="slide-163-layer-1" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['320','60','240','220']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeOut;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;" data-start="1250" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]' data-responsive_offset="on" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[90,90,90,90]" data-paddingleft="[25,25,25,25]">

                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!--/visual/banner of the page -->
        <!-- Sección del apartado de celebraciones  -->
        <div class="content-wrapper">
          <section class="content-block" id="celebrate">
            <div class="container">
              <div class="row multiple-row v-align-row">
                <div class="col-lg-8 col-md-12">
                  <div class="col-wrap">
                    <div class="block-heading">
                      <h3 class="block-top-heading">Celebraciones</h3>
                      <h2 class="block-main-heading">-----------------</h2>
                      <span class="block-sub-heading">TU SOLUCIÓN. NUESTRA COMPROMISO.</span>
                      <div class="divider"><img src="img/divider.png" alt="images description"></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="col-wrap">
                    <div class="ico-box bg-gray-light has-radius-medium">
                      <div class="icon">
                        <span><img src="./img/logo_tubos.png" alt=""></span>
                      </div>
                      <h4 class="content-title"><a href="">Tubos Monterrey</a></h4>
                      <div class="des">
                        <p>Celebra contigo su 60 Aniversario</p>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-9">
                  <div class="col-wrap">
                    <div class="ico-box bg-gray-light has-radius-medium">
                      <div class="icon">
                        <img src="./img/cumpleanos_nuevo.jpg" alt="">
                      </div>
                      <h4 class="content-title"><a href="#">CUMPLEAÑEROS</a></h4>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6 col-md-9">
                  <div class="col-wrap">
                    <div class="ico-box bg-gray-light has-radius-medium">
                      <div class="icon">
                        <img src="./img/aniversarios.png" alt="">
                      </div>
                      <h4 class="content-title"><a href="#">ANIVERSARIOS</a></h4>
                    </div>
                  </div>
                </div>
          </section>
          <!--Sección para las politicas y reglas-->
          <section class="content-block portfolio-block" id="container">
            <div class="bottom-space text-center text-uppercase">
              <h2>Políticas y Reglamentos</h2>
            </div>
            <ul class="filter-nav text-center button-group filter-button-group">
              <li>
                <button data-filter="*">TODAS</button>
              </li>
              <li>
                <button data-filter=".cr">COMEDOR</button>
              </li>
              <li>
                <button data-filter=".hr">HORARIO</button>
              </li>
              <li>
                <button data-filter=".ps">PRESTACIONES</button>
              </li>
              <li>
                <button data-filter=".df">DÍAS FERIADOS</button>
              </li>
              <li>
                <button data-filter=".va">VESTIMENTA</button>
              </li>
            </ul>

            <!--Galeria de Politicas y Reglamentos-->
            <div class="row grid">
              <div class="gallery-item col-lg-4 col-md-6 cr">
                <figure class="picture-item img-block shine-effect image-zoom port-v2">
                  <img src="img/POLITICAS COMEDOR.jpg" alt="images description">
                </figure>
              </div>
              <div class="gallery-item col-lg-4 col-md-6 hr">
                <figure class="picture-item img-block shine-effect image-zoom port-v2">
                  <img src="img/Imagen horario.jpg" alt="images description">
                </figure>
              </div>
              <div class="gallery-item col-lg-4 col-md-6 ps">
                <figure class="picture-item img-block shine-effect image-zoom port-v2">
                  <img src="img/prestaciones.jpg" alt="images description">
                </figure>
              </div>
              <div class="gallery-item col-lg-4 col-md-6 df">
                <figure class="picture-item img-block shine-effect image-zoom port-v2">
                  <img src="img/dias feriados.jpg" alt="images description">
                </figure>
              </div>
              <div class="gallery-item col-lg-4 col-md-6 va">
                <figure class="picture-item img-block shine-effect image-zoom port-v2">
                  <img src="img/Imagenvestimenta.jpg" alt="images description">
                </figure>
              </div>
            </div>
          </section>


          <!--Sección para el apartado de Nosotros-->
          <section class="content-block pt-0" id="about">
            <div class="container">
              <div class="block-heading bottom-space">
                <h3 class="block-top-heading">TUBOS MONTERREY</h3>
                <h2 class="block-main-heading">NOSOTROS</h2>
                <span class="block-sub-heading">¿Quíenes Somos?</span>
                <div class="divider"><img src="img/divider.png" alt="images description"></div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="bottom-space-small-only">
                    <h3>COBERTURA</h3>

                    <h5>CIUDAD DE MÉXICO</h5>
                    <p>Poniente 122 No. 603, Col. Industrial Vallejo, Alcaldía Azcapotzalco, México, CDMX C.P. 02300
                      <br> Tel: (55) 5078-7700
                      <br> Email: <a href="mailto:luisemorales@tubosmonterrey.com.mx">luisemorales@tubosmonterrey.com.mx</a>
                    </p>

                    <h5>BODEGA NORTE 35 CDMX</h5>
                    <p>Norte 35, No. 839, Colonia Industrial Vallejo, C.P. 02300, CDMX.
                      <br> Tel: (55) 5078-7700 <br>
                      Email: <a href="mailto:lmendez@tubosmonterrey.com.mx">lmendez@tubosmonterrey.com.mx</a>
                    </p>

                    <h5>ROMA YUCATÁN</h5>
                    <p>
                      Av. Miguel Hidalgo, 226-A por la 40, Colonia Roma, Mérida, Yucatán. C.P.97218
                      <br> Tel: (999) 920 6565 <br>
                      Email: <a href="mailto:gaarcila@acerosyuc.com.mx">gaarcila@acerosyuc.com.mx</a>
                    </p>

                    <h5>CIRCUITO COLONIAS YUCATÁN</h5>
                    <p> Colonias No.345 x 43-A y 47 Col. Pedregales de Tanlum Mérida, Yucatán. CP.97210
                      Tel: (999) 925 5018 <br>
                      Email: <a href="mailto:earcila@acerosyuc.com.mx">earcila@acerosyuc.com.mx</a></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="bottom-s-space">
                    <h5>PLAYA DEL CARMEN QUINTANA ROO</h5>
                    <p> Av. 115 Mz.9 Lt.12 No. 123 Entre Av. Juarez y 2 Norte Colonia Ejidos Sur, C.P. 77712 Municipio de Solidaridad, Playa del Carmen, Quintana Roo.
                      Tel: (984) 803 8807 <br>
                      Email: <a href="mailto:mlujan@acerosyuc.com.mx">mlujan@acerosyuc.com.mx</a></p>
                    <h5>CANCÚN QUINTANA ROO</h5>
                    <p>Av. López Portillo MZA 93 LTE 1-2, Región 97, Benito Juárez, 77536 Cancún, Q.R., México
                      <br> Tel: (998) 132 1000 <br>
                      Email: <a href="mailto:jmsima@acerosyuc.com.mx">jmsima@acerosyuc.com.mx</a>
                    </p>
                    <h5>VERACRUZ</h5>
                    <p> Carretera Federal San Julián-Paso del Toro No. 401, Col. Doctor Delfino A. Victoria, C.P. 91690, Veracruz, Veracruz <br>
                      Tel: (229) 200 46 42 <br>
                      Tel: (229) 200 46 43 <br>
                      Tel: (229) 972 93 96 <br>
                      Email: <a href="mailto:jalonso@villatubos.com.mx">jalonso@villatubos.com.mx</a></p>
                  </div>

                </div>
              </div>
            </div>
            <div class="container" id="history">
              <div class="row multiple-row v-align-row">
                <div class="col-lg-12 col-md-12">
                  <div class="col-wrap">
                    <div class="ico-box bg-gray-light has-radius-medium">
                      <div class="icon">
                        <span><img src="./img/Linea del tiempo.png" alt=""></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section id="work-section" class="content-block work-block">
            <div class="bg-stretch">
              <img src="img/tubos.png" alt="">
            </div>
            <div class="container">
              <div class="block-heading bottom-space text-center">
                <h3 class="block-top-heading">DESEMPEÑO LABORAL</h3>
                <h2 class="block-main-heading">MES / AÑO</h2>
                <span class="block-sub-heading">Lovely people with nack for design creativity flourish here.</span>
                <div class="divider"><img src="img/divider.png" alt="images description"></div>
              </div>
              <div class="description text-center container-md">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
                </p>
              </div>
            </div>
          </section>
          <section class="content-block">
            <div class="container">
              <div class="block-heading bottom-space">
                <h2 class="block-main-heading">NUESTRO EQUIPO</h2>
                <span class="block-sub-heading">TEXTO</span>
                <div class="divider"><img src="img/divider.png" alt="images description"></div>
              </div>
              <div class="team-container">
                <div class="owl-carousel group-slide bottom-m-space">

                  <?php
                  $query = "SELECT area.nombre AS NombreArea, empleados.estatus, puestos.nombre AS NombrePuesto, empleados.foto, CONCAT(empleados.nombre, ' ', empleados.apellido_mat, ' ', empleados.apellido_pat) AS NombreCompleto FROM empleados 
                                     INNER JOIN puestos ON empleados.puesto_id = puestos.id_puestos 
                                     INNER JOIN area ON empleados.area_id = area.id_areas
                                     WHERE empleados.estatus = 1";
                  /*   $stmt = sqlsrv_query($conn, $query);

                                     if ($stmt === false) {
                                         die(print_r(sqlsrv_errors(), true));
                                     }

                                     while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                                        echo "<div class='slide-item'>
                                        <figure class='team-box caption-fade-up'>
                                            <div class='img-block rev-gray-scale'>
                                                <img src=".$row['foto']." alt=".$row['NombreCompleto'].">
                                            </div>
                                            <figcaption class='text-right'>
                                                <strong class='content-title mb-0'>".$row['NombreCompleto']."</strong>
                                                <span class='sub'>".$row['NombrePuesto']." en ".$row['NombreArea']."</span>
                                            </figcaption>
                                        </figure>
                                    </div>";
                                     }

                                     */

                  ?>

                </div>
                <p>

                  <!--Cualquier Texto....-->

                </p>
              </div>
            </div>
          </section>
          <section class="content-block count-block text-center p-0 parallax" data-stellar-background-ratio="0.55">
            <div class="container-fluid">
              <div class="row no-gutters">
                <div class="col-sm-6 col-lg-3">
                  <?php
                  /*    $numAreas = "select COUNT(id_areas) as registrosAreas from area where estatus = 1";
                                     $stmt = sqlsrv_query($conn, $numAreas);
                                     $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

                                     $numPuestos = "select COUNT(id_puestos) as registrosPuestos from puestos where estatus = 1";
                                     $stmt2 = sqlsrv_query($conn, $numPuestos);
                                     $row2 = sqlsrv_fetch_array($stmt2, SQLSRV_FETCH_ASSOC);

                                     $numEmpleados = "select COUNT(id_empleado) as registrosEmpl from empleados where estatus = 1";
                                     $stmt3 = sqlsrv_query($conn, $numEmpleados);
                                     $row3 = sqlsrv_fetch_array($stmt3, SQLSRV_FETCH_ASSOC);

                                     $numPub = "select COUNT(id_publicaciones) as registrosPub from publicaciones where estatus = 1";
                                     $stmt4 = sqlsrv_query($conn, $numPub);
                                     $row4 = sqlsrv_fetch_array($stmt4, SQLSRV_FETCH_ASSOC); */
                  echo "<div class='col-wrap'>
                                    <div class='icon'>
                                        <span class='custom-icon-projects'></span>
                                    </div>
                                    <h3 class='number'>" . $row['registrosAreas'] . "</h3>
                                    <div class='text text-uppercase'>TOTAL DE ÁREAS</div>
                                </div>
                            </div>
                            <div class='col-sm-6 col-lg-3'>
                                <div class='col-wrap'>
                                    <div class='icon'>
                                        <span class='custom-icon-smile'></span>
                                    </div>
                                    <h3 class='number'>" . $row2['registrosPuestos'] . "</h3>
                                    <div class='text text-uppercase'>TOTAL DE PUESTOS</div>
                                </div>
                            </div>
                            <div class='col-sm-6 col-lg-3'>
                                <div class='col-wrap'>
                                    <div class='icon'>
                                        <span class='custom-icon-award'></span>
                                    </div>
                                    <h3 class='number'>" . $row3['registrosEmpl'] . "</h3>
                                    <div class='text text-uppercase'>PERSONAL</div>
                                </div>
                            </div>
                            <div class='col-sm-6 col-lg-3'>
                                <div class='col-wrap'>
                                    <div class='icon'>
                                        <span class='custom-icon-celebrate'></span>
                                    </div>
                                    <h3 class='number'>" . $row4['registrosPub'] . "</h3>
                                    <div class='text text-uppercase'>PUBLICACIONES</div>
                                </div>
                            </div>";
                  ?>
                </div>
              </div>
          </section>
          <section class="content-block bg-gray-light" style="padding-bottom: 0px;padding-top: 45px;">
            <div class="container">
              <div class="block-heading bottom-space text-center">
                <h3 class="block-top-heading">TUBOS MONTERREY</h3>
                <h2 class="block-main-heading">DIRECTORIO</h2>
                <span class="block-sub-heading"></span>
                <div class="divider"><img src="img/divider.png" alt="images description"></div>
              </div>

            </div>
          </section>


          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous" />
          <style>
            body {
              background: #f5f5f5;
              margin-top: 20px;
            }

            /* ===== Career ===== */
            .career-form {
              background-color: #4e63d7;
              border-radius: 5px;
              padding: 0 16px;
            }

            .career-form .form-control {
              background-color: rgba(255, 255, 255, 0.2);
              border: 0;
              padding: 12px 15px;
              color: #fff;
            }

            .career-form .form-control::-webkit-input-placeholder {
              /* Chrome/Opera/Safari */
              color: #fff;
            }

            .career-form .form-control::-moz-placeholder {
              /* Firefox 19+ */
              color: #fff;
            }

            .career-form .form-control:-ms-input-placeholder {
              /* IE 10+ */
              color: #fff;
            }

            .career-form .form-control:-moz-placeholder {
              /* Firefox 18- */
              color: #fff;
            }

            .career-form .custom-select {
              background-color: rgba(255, 255, 255, 0.2);
              border: 0;
              padding: 12px 15px;
              color: #fff;
              width: 100%;
              border-radius: 5px;
              text-align: left;
              height: auto;
              background-image: none;
            }

            .career-form .custom-select:focus {
              -webkit-box-shadow: none;
              box-shadow: none;
            }

            .career-form .select-container {
              position: relative;
            }

            .career-form .select-container:before {
              position: absolute;
              right: 15px;
              top: calc(50% - 14px);
              font-size: 18px;
              color: #ffffff;
              content: '\F2F9';
              font-family: "Material-Design-Iconic-Font";
            }

            .filter-result .job-box {
              -webkit-box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
              box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
              border-radius: 10px;
              padding: 10px 35px;
            }

            ul {
              list-style: none;
            }

            .list-disk li {
              list-style: none;
              margin-bottom: 12px;
            }

            .list-disk li:last-child {
              margin-bottom: 0;
            }

            .job-box .img-holder {
              height: 65px;
              width: 65px;

              background-image: -webkit-gradient(linear, left top, right top, from(rgba(78, 99, 215, 0.9)), to(#5a85dd));
              background-image: linear-gradient(to right, rgba(78, 99, 215, 0.9) 0%, #5a85dd 100%);
              font-family: "Open Sans", sans-serif;
              color: #fff;
              font-size: 22px;
              font-weight: 700;
              display: -webkit-box;
              display: -ms-flexbox;
              display: flex;
              -webkit-box-pack: center;
              -ms-flex-pack: center;
              justify-content: center;
              -webkit-box-align: center;
              -ms-flex-align: center;
              align-items: center;
              border-radius: 65px;
            }

            .career-title {
              background-color: #4e63d7;
              color: #fff;
              padding: 15px;
              text-align: center;
              border-radius: 10px 10px 0 0;
              background-image: -webkit-gradient(linear, left top, right top, from(rgba(78, 99, 215, 0.9)), to(#5a85dd));
              background-image: linear-gradient(to right, rgba(78, 99, 215, 0.9) 0%, #5a85dd 100%);
            }

            .job-overview {
              -webkit-box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
              box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
              border-radius: 10px;
            }

            @media (min-width: 992px) {
              .job-overview {
                position: -webkit-sticky;
                position: sticky;
                top: 70px;
              }
            }

            .job-overview .job-detail ul {
              margin-bottom: 28px;
            }

            .job-overview .job-detail ul li {
              opacity: 0.75;
              font-weight: 600;
              margin-bottom: 15px;
            }

            .job-overview .job-detail ul li i {
              font-size: 20px;
              position: relative;
              top: 1px;
            }

            .job-overview .overview-bottom,
            .job-overview .overview-top {
              padding: 35px;
            }

            .job-content ul li {
              font-weight: 600;
              opacity: 0.75;
              border-bottom: 1px solid #ccc;
              padding: 10px 5px;
            }

            @media (min-width: 768px) {
              .job-content ul li {
                border-bottom: 0;
                padding: 0;
              }
            }

            .job-content ul li i {
              font-size: 20px;
              position: relative;
              top: 1px;
            }

            .mb-30 {
              margin-bottom: 30px;
            }
          </style>
          <div class="container">

            <div class="row">
              <div class="col-lg-10 mx-auto">
                <div class="career-search mb-60">

                  <form action="#" class="career-form mb-60">
                    <div class="row">
                      <div class="col-md-6 col-lg-8 my-3">
                        <div class="input-group position-relative">
                          <input type="text" name="txtbusca" id="txtbusca" placeholder="Busca un empleado" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 my-3">
                        <div class="select-container">
                          <select class="custom-select">
                            <option selected="">Select Job Type</option>
                            <option value="1">Ui designer</option>
                            <option value="2">JS developer</option>
                            <option value="3">Web developer</option>
                          </select>
                        </div>
                      </div>

                    </div>
                  </form>

                  <div class="filter-result">
                    <p class="mb-30 ff-montserrat">Total empleados : 89</p>

                    <div class="salida"></div>


                    <?php
                    require 'php/bd.php';

                    $user = new conBD();
                    $u = $user->seleccionar("empleados", " status = 1 order by nombre ASC ");

                    //   print_r($u ); 
                    $html = '';
                    $img = "'img/people-03.jpg'";



                    if (count($u) == 0) {
                      echo "No se han encontrado resultados.";
                    } else {


                      $row['imagen'] = '"img/people-01.jpg"';

                      foreach ($u as $row) {

                        $html .= '
                                               
                                               <div class="job-box d-md-flex align-items-center justify-content-between mb-30 item">
                                                    <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                                        <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex"  style=" background-image: url(' . $img . ');">
                                                        </div>
                                                        <div class="job-content">
                                                            <h5 class="text-center text-md-left">' . $row['nombre'] . " " . $row['apellido_pat'] . " " . $row['apellido_mat'] . '</h5>
                                                            <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                                                                <li class="mr-md-4">
                                                                    <i class="zmdi zmdi-pin mr-2"></i> ' . $row['correo'] . '
                                                                </li>
                                                                <li class="mr-md-4">
                                                                    <i class="zmdi zmdi-money mr-2"></i> Departamento de marketing
                                                                </li>
                                                                <li class="mr-md-4">
                                                                    <i class="zmdi zmdi-time mr-2"></i> Secretaria
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                               ';
                      }

                      echo  $html;
                    }

                    ?>



                  </div>
                </div>

                


                    <!-- START Pagination -->
                    <nav aria-label="Page navigation">
                      <ul class="pagination pagination-reset justify-content-center">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                            <i class="zmdi zmdi-long-arrow-left"></i>
                          </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item d-none d-md-inline-block"><a class="page-link" href="#">2</a></li>
                        <li class="page-item d-none d-md-inline-block"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">8</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">
                            <i class="zmdi zmdi-long-arrow-right"></i>
                          </a>
                        </li>
                      </ul>
                    </nav>
                    <!-- END Pagination -->
                  </div>
                </div>

              </div>


              <aside class="content-block">
                <div class="container">
                  <div class="logo-container">
                    <div class="owl-carousel logo-slide" id="waituk-owl-slide-4">
                      <div class="slide-item">
                        <img src="img/logo-01.png" alt="images description">
                      </div>
                      <div class="slide-item">
                        <img src="img/logo-02.png" alt="images description">
                      </div>
                      <div class="slide-item">
                        <img src="img/logo-03.png" alt="images description">
                      </div>
                      <div class="slide-item">
                        <img src="img/logo-04.png" alt="images description">
                      </div>
                      <div class="slide-item">
                        <img src="img/logo-03.png" alt="images description">
                      </div>
                    </div>
                  </div>
                </div>
              </aside>
            </div> -->
            <!--/main content wrapper -->
      </main>
    </div>
    <!-- footer of the pagse -->
    <footer class="footer footer-v1">
      <div class="content-block footer-main">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="footer-logo">
                <img src="img/logo_tubos.png" alt="image-description">
              </div>
            </div>

            <div class="col-md-8">
              <div class="footer-nav inline-nav text-center">
                <br>
                <ul>
                  <li><a href="#">Inicio</a></li>
                  <li><a href="#">Acerca de</a></li>
                  <li><a href="#">Políticas y Reglamentos</a></li>
                  <li><a href="#">Contacto</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom text-center">
        <div class="container">
          <p>Copyright 2023 - Tubos Monterrey - Todos los derechos reservados. Diseñado por <a href="https://www.asicomgraphics.mx" target="_blank">Asicom Graphics</a> </p>
        </div>
      </div>
    </footer>
    <!--/footer of the page -->
  </div>
  <!-- open/close -->
  <div class="search-form-wrapper overlay overlay-hugeinc">
    <button type="button" class="overlay-close"><span class="custom-icon-plus"></span></button>
    <div class="search-form">
      <form action="#" method="post">
        <div class="form-group">
          <input type="search" class="form-control" placeholder="Enter Your Search">
          <button type="submit"><span class="icon-search"></span></button>
        </div>
      </form>
    </div>
  </div>
  <a href="#" class="section-scroll" id="scroll-to-top"><i class="fa fa-angle-up"></i></a>
  <!-- jQuery Library -->
  <script src="vendors/jquery/jquery-2.1.4.min.js"></script>
  <!-- Vendor Scripts -->
  <script src="vendors/tether/dist/js/tether.min.js"></script>
  <script src="vendors/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendors/stellar/jquery.stellar.min.js"></script>
  <script src="vendors/isotope/javascripts/isotope.pkgd.min.js"></script>
  <script src="vendors/isotope/javascripts/packery-mode.pkgd.js"></script>
  <script src="vendors/owl-carousel/dist/owl.carousel.min.js"></script>
  <script src="vendors/waypoint/waypoints.min.js"></script>
  <script src="vendors/counter-up/jquery.counterup.min.js"></script>
  <script src="vendors/fancyBox/source/jquery.fancybox.pack.js"></script>
  <script src="vendors/fancyBox/source/helpers/jquery.fancybox-thumbs.js"></script>
  <script src="vendors/image-stretcher-master/image-stretcher.js"></script>
  <script src="vendors/wow/wow.min.js"></script>
  <script src="vendors/rateyo/jquery.rateyo.min.js"></script>
  <script src="vendors/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  <script src="vendors/bootstrap-slider-master/src/js/bootstrap-slider.js"></script>
  <script src="vendors/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
  <script src="js/mega-menu.js"></script>
  <script src="vendors/retina/retina.min.js"></script>
  <!-- Custom Script -->
  <script src="js/jquery.main.js"></script>
  <!-- REVOLUTION JS FILES -->
  <script type="text/javascript" src="vendors/rev-slider/revolution/js/jquery.themepunch.tools.min.js"></script>
  <script type="text/javascript" src="vendors/rev-slider/revolution/js/jquery.themepunch.revolution.min.js"></script>
  <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
  <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.actions.min.js"></script>
  <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
  <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.migration.min.js"></script>
  <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
  <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
  <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.video.min.js"></script>
  <!-- SNOW ADD ON -->
  <script type="text/javascript" src="vendors/rev-slider/revolution-addons/snow/revolution.addon.snow.min.js"></script>
  <!-- Revolution Slider Script -->
  <script src="js/revolution.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  <script>
    $(document).ready(function() {
      $('#txtbusca').keyup(function() {
        let value = $(this).val();
        if (value.length == 0) { //si el campo no esta vacio
          console.log('Hola mundo ');
          $.ajax({
            data: parametros,
            url: 'php/busqueda.php',
            type: 'get',
            beforeSend: function() {},
            success: function(response) {
              $(".salida").empty();
              $(".salida").append(response);

              console.log(response);
            },
            error: function() {
              console.log('error');
            }
          });
        } else {

          $(".item").remove();
          var parametros = 'txtbusca=' + value;
          $.ajax({
            data: parametros,
            url: 'php/busqueda.php',
            type: 'post',
            beforeSend: function() {},
            success: function(response) {
              $(".salida").empty();
              $(".salida").append(response);

              // console.log(response);
            },
            error: function() {
              console.log('error');
            }
          });
        }
      })
    });
  </script>
</body>

</html>