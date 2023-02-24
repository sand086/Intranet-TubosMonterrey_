<?php

 include_once('prueba.php');


 if(isset($_POST)){


   // var_dump( $POST->area_id );



  // var_dump("SELECT $select FROM $tabla $condicion");
    $empleados_org = new conBD();
    $array_empleados_org = $empleados_org->seleccionarCalendarHBD(); 
    $html = '';
    $ArrayResponse =[];
    $fecha_nacimiento = "";

    while($row = sqlsrv_fetch_array($array_empleados_org, SQLSRV_FETCH_ASSOC)) {

     //   var_dump( $row);

    

        $array = array(

            "nombreCompleto" => $row['nombre'].' '. $row['apellido_pat'].' '. $row['apellido_mat'],
            "fecha_nacimiento" => $row['fecha_nacimiento']
        );



       array_push($ArrayResponse, $array);

    }

    //var_dump( $array_empleados_org);
    $response = json_encode($ArrayResponse);
    echo $response;
} else{

    echo "no hay datos";
}





