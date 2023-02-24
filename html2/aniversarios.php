
<div class="main-wrapper container">

  <section class="mt-5">
    <h1 class="mb-1">ANIVERSARIO</h1>
    <h3 class="text-center"> <?php echo date('M Y') ?></h3>
    <br> <br>

    <div class="col-12">
      <div class="owl-carousel owl-theme" id="users-carousel">
        
      <?php

        $aniversarios = new conBD();
        $aniversarios_conn = $cobertura->seleccionar(
            "empleados",
            " estatus = 1 AND  MONTH(fecha_ingreso_empresa) = MONTH(GETDATE())   "
        );
        $html_aniversarios = "";


        $row["imagen"] = '"img/people-01.jpg"';

        while($row = sqlsrv_fetch_array($aniversarios_conn, SQLSRV_FETCH_ASSOC)) {

          $fecha_ingreso_empresa = (array) $row["fecha_ingreso_empresa"];
          $anio_ingreso =  date("Y", strtotime($fecha_ingreso_empresa['date']));
          $anio_actual =  date("Y");

          $diferencia_anios_aniversario = intval( $anio_actual) -  intval( $anio_ingreso) ;
       

        $html_aniversarios .=
            '
  


            <div>
            <div class="user-item">
              <img alt="image" src="assets/img/avatar/avatar-1.png" style="width: 145px;margin: auto;" class="img-fluid">
              <div class="user-details">
                <div class="user-name">'.$row["nombre"].'<br>'.$row["apellido_pat"].'</div>
                <div class="text-job text-muted" style="padding-top: 5px;">'.  $diferencia_anios_aniversario.' años</div>
              </div>  
            </div>
          </div>

          ';

    }

    echo  $html_aniversarios;

?>




      </div>
    </div>
  </section>
</div>





