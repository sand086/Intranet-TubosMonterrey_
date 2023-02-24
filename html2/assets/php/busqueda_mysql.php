<?php

/* include_once('bd.php');

$empleados = new conBD();


if (isset($_POST['txtbusca'])) {


  function buscar($b)
  {


    $empleados = new conBD();
    $u = $empleados->buscar("empleados", " nombre like '%" . $b . "%'  LIMIT 1 ");

    $html = '';
    $img = "'img/people-03.jpg'";


    if (count($u) == 0) {
      echo "No se han encontrado resultados para '<b>" . $b . "</b>'.";
    } else {
      $row['imagen'] = '"img/people-01.jpg"';
      foreach ($u as $row) {
        $html .=


          '
          <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
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

        echo $html;
      }
    }
  }
  $buscar = addslashes($_POST['txtbusca']);

  if (!empty($buscar)) {
    buscar($buscar);
  }
} else {

  $u = $empleados->seleccionar("empleados", " status = 1 order by nombre ASC "); 
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
} */
