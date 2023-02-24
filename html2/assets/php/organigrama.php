<?php

 include_once('prueba.php');


 if(isset($_POST)){


    $POST = array_keys($_POST);
    $POST = json_decode($POST[0]);

   // var_dump( $POST->area_id );

    $tabla = "empleados";
    $tabla2 = "puestos";
    $select = '';

    $select .=  $tabla.".id_empleado, ";
    $select .=  $tabla.".nombre, ";
    $select .=  $tabla.".apellido_pat, ";
    $select .=  $tabla.".apellido_mat, ";
    $select .=  $tabla.".puesto_id, ";
    $select .=  $tabla.".foto, ";
    $select .=  $tabla2.".nombre AS puesto, ";
    $select .=  $tabla2.".nivel";



  //  var_dump( $select );

    $condicion = " INNER JOIN ".$tabla2." ON ".$tabla2.".id_puestos = ".$tabla." .puesto_id
                   WHERE ".$tabla." .estatus = 1 AND ".$tabla.".area_id = ".$POST->area_id." order by ".$tabla.".puesto_id ASC ";
   
   //var_dump("SELECT $select FROM $tabla $condicion");
    $empleados_org = new conBD();
    $array_empleados_org = $empleados_org->seleccionarJoinOrg( $select, $tabla,  $condicion); 
    $html = '';
    $ArrayResponse =[];
    $img = "'img/people-03.jpg'";

    while($row = sqlsrv_fetch_array($array_empleados_org, SQLSRV_FETCH_ASSOC)) {

     //   var_dump( $row);

        $array = array(

            "nombreCompleto" => $row['nombre'].' '. $row['apellido_pat'].' '. $row['apellido_mat'],
            "puesto" => $row['puesto'],
            "puesto_id" => $row['puesto_id'],
            "nivel" =>  $row['nivel']
        );



       array_push($ArrayResponse, $array);

    }

    //var_dump( $array_empleados_org);
    $response = json_encode($ArrayResponse);
    echo $response;
} else{

    echo "no hay datos";
}





