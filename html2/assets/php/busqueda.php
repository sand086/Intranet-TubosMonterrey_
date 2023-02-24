<?php

include_once('prueba.php');




if (isset($_POST['txtbusca'])) {


  function buscar($busqueda)
  {

    $html = '';
    $img = "'img/people-03.jpg'";

    $empleadosBusqueda = new conBD();
    $resultadoBusqueda = $empleadosBusqueda->buscar($busqueda);
    $row = $resultadoBusqueda;

    // var_dump($resultadoBusqueda['nombre']); die();

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

  $busqueda = addslashes($_POST['txtbusca']);
  if (!empty( $busqueda)) {
    buscar($busqueda);
  }
} else {

 
  $empleadosBusqueda = new conBD();
  $resultadoBusqueda = $empleadosBusqueda->seleccionarLimit();
  

  $html2 = '';
  $img = "'img/people-03.jpg'";

  while($row = sqlsrv_fetch_array($resultadoBusqueda, SQLSRV_FETCH_ASSOC)) {

   // var_dump($row);
   // echo '<br>';
 
    $html2 .=


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

 
  
  }


  echo $html2;  


}


