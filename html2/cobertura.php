<div class="main-wrapper container">
  <section>
    <h1>COBERTURA</h1>
    <div class="table-responsive">
      <table class="table table-striped" id="table-cobertura">
        <thead>
          <tr>
            <th width="30%">Ciudad</th>
            <th width="55%">Direccion</th>


            <th width="15%">Ver</th>
          </tr>
        </thead>
        <tbody>


        <?php
                 //   require "assets/php/bd.php";
                   


                    $cobertura = new conBD();
                    $cobertura_conn = $cobertura->seleccionar(
                        "cobertura",
                        " estatus = 1 order by sucursal ASC "
                    );

                 //    var_dump( count(sqlsrv_fetch_array($u, SQLSRV_FETCH_ASSOC)) );

                    $html_cobertura = "";
           
            
                        $row["imagen"] = '"img/people-01.jpg"';

                        while($row = sqlsrv_fetch_array($cobertura_conn, SQLSRV_FETCH_ASSOC)) {


   
                            $html_cobertura .=
                                '
                                        

                                <tr>
                                  <td>'.$row["sucursal"].'</td>
                                  <td class="align-middle">
                                    <p>
                                    '.$row["calle"].' N°'.$row["num_ext"].' '.$row["num_int"].' Alc.'.$row["colonia"].' c.p '.$row["codigo_postal"].', '.$row["estado"].'
                                    </p>
                                  </td>
                        
                                  <td>
                                    <a href="'.$row["url_mapa"].'" target="_blank" class="btn btn-primary">Ver mapa</a>
                                  </td>
                                </tr>
                              ';

                        }

                        echo  $html_cobertura;
                    
                    ?>










        
         
        </tbody>
      </table>
    </div>
  </section>
</div>
