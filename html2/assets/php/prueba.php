<?php

/* $contraseña = "6rpde456jq";
$usuario = "asicomdesarrollo_SQLLogin_2";
$nombreBaseDeDatos = "tubosmonterrey";
# Puede ser 127.0.0.1 o el nombre de tu equipo; o la IP de un servidor remoto
$rutaServidor = "tubosmonterrey.mssql.somee.com";

$mysqli = new mysqli($rutaServidor, $usuario, $contraseña, $nombreBaseDeDatos);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n"; */

$dbName = array( "Database"=>"tubosmonterrey", "UID"=>"asicomdesarrollo_SQLLogin_2", "PWD"=>"6rpde456jq"  ,"Encrypt"=>false, "TrustServerCertificate"=>true, "CharacterSet" => "UTF-8");
$serverName = "tubosmonterrey.mssql.somee.com";

$conn = sqlsrv_connect($serverName, $dbName);



if($conn === false) {
    echo "Connection could not be established.<br/>";
    die(print_r(sqlsrv_errors(), true));
} else {
   // echo "Connection established successfuly.<br/>";
}

sqlsrv_close($conn);    // Close connection resources.



class conBD
{

private $dbName = array( 
    "Database"=>"tubosmonterrey", 
    "UID"=>"asicomdesarrollo_SQLLogin_2", 
    "PWD"=>"6rpde456jq"  ,
    "Encrypt"=>false, 
    "TrustServerCertificate"=>true, 
    "CharacterSet" => "UTF-8"
);
private $serverName = "tubosmonterrey.mssql.somee.com";

public $conexion;

  public function __construct()
  {

    $this->conexion =  sqlsrv_connect($this->serverName, $this->dbName);
    if(  $this->conexion === false) {
        die( print_r( sqlsrv_errors(), true));
    }
  }
  public function buscar($busqueda)
  {
    $limit = 1;
    $select = '';
    $tabla = "empleados";
    $tabla2 = "puestos";
    $tabla3 = "area";


    $select .=  $tabla.".id_empleado, ";
    $select .=  $tabla.".nombre, ";
    $select .=  $tabla.".apellido_pat, ";
    $select .=  $tabla.".apellido_mat, ";
    $select .=  $tabla.".correo, ";
    $select .=  $tabla.".puesto_id, ";
    $select .=  $tabla.".foto, ";
    $select .=  $tabla2.".nombre AS puesto, ";
    $select .=  $tabla3.".nombre AS area";


    $condicion = " INNER JOIN ".$tabla2." 
                   ON ".$tabla2.".id_puestos = ".$tabla." .puesto_id
                   INNER JOIN ".$tabla3." 
                   ON ".$tabla3.".id_areas = ".$tabla." .area_id
                   WHERE ".$tabla." .estatus = 1 AND ".$tabla.".nombre like '%" . $busqueda . "%'
                  order by ".$tabla.".nombre ASC ";
   

    $resultado = sqlsrv_query($this->conexion,"SELECT TOP(". $limit.") $select FROM $tabla $condicion");



    if($resultado === false) {
        return false;
        die(var_dump(sqlsrv_errors(), true));
    }else{

        return sqlsrv_fetch_array($resultado, SQLSRV_FETCH_ASSOC);
    }
    return false;
  }

  public function seleccionar($tabla, $condicion)
  {
    $resultado = sqlsrv_query($this->conexion,"SELECT * FROM $tabla WHERE $condicion");


  

    if($resultado === false) {
       // return false;
        die(var_dump(sqlsrv_errors(), true));
    }else{
        
        return $resultado;
    }
    return false;
  }


  public function seleccionarLimit()
  {

    $limit = 5;
    $select = '';
    $tabla = "empleados";
    $tabla2 = "puestos";
    $tabla3 = "area";


    $select .=  $tabla.".id_empleado, ";
    $select .=  $tabla.".nombre, ";
    $select .=  $tabla.".apellido_pat, ";
    $select .=  $tabla.".apellido_mat, ";
    $select .=  $tabla.".correo, ";
    $select .=  $tabla.".puesto_id, ";
    $select .=  $tabla.".foto, ";
    $select .=  $tabla2.".nombre AS puesto, ";
    $select .=  $tabla3.".nombre AS area";


    $condicion = " INNER JOIN ".$tabla2." 
                   ON ".$tabla2.".id_puestos = ".$tabla." .puesto_id
                   INNER JOIN ".$tabla3." 
                   ON ".$tabla3.".id_areas = ".$tabla." .area_id
                   WHERE ".$tabla." .estatus = 1 
                  order by ".$tabla.".nombre ASC ";
   

    $resultado = sqlsrv_query($this->conexion,"SELECT TOP(". $limit.") $select FROM $tabla $condicion");


  

    if($resultado === false) {
       // return false;
        die(var_dump(sqlsrv_errors(), true));
    }else{
        
        return $resultado;
    }
    return false;
  }

  public function seleccionarJoinOrg($select, $tabla, $condicion)
  {
    $resultado = sqlsrv_query($this->conexion,"SELECT $select FROM $tabla $condicion");


  

    if($resultado === false) {
       // return false;
        die(var_dump(sqlsrv_errors(), true));
    }else{
        
        return $resultado;
    }
    return false;
  }





  public function seleccionarcount()
  {


    $select = "nombre";
    $tabla = "empleados";
    $condicion = " WHERE estatus = 1 ";
    $params = array();
    $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $resultado = sqlsrv_query($this->conexion,"SELECT $select FROM $tabla $condicion" ,  $params ,$options );

  

    if($resultado === false) {
       // return false;
        die(var_dump(sqlsrv_errors(), true));
    }else{
        
        return $resultado;
    }
    return false;
  }
  

  public function seleccionarCalendarHBD()
  {


    $tabla = "empleados";
    $select = '';

    $select .=  $tabla.".id_empleado, ";
    $select .=  $tabla.".nombre, ";
    $select .=  $tabla.".apellido_pat, ";
    $select .=  $tabla.".apellido_mat, ";
    $select .=  $tabla.".fecha_nacimiento ";





  //  var_dump( $select );

    $condicion = " 
                  WHERE ".$tabla.".estatus = 1 order by MONTH(".$tabla.".fecha_nacimiento) ASC ";

                  
    $params = array();
    $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $resultado = sqlsrv_query($this->conexion,"SELECT $select FROM $tabla $condicion" ,  $params ,$options );

    $arrayAbreviaturas = array(
      "Fco.", "Mª", "Fdez.", "Lpez.", "G.ª" , "Hdz.", "Glz." ,"Lor.", "Mtz.", "Rdgz." ,"Gmez." , "Vqz." , "Aglr.", "Bdo.", "Stgo.", "Vte.", "Edo.", "Rgo.", "Fdo.", "Escud." , "Dmgz.", "Fernz.", "Jimenz.", "Gut.", "Mtin", 
    );
    $arraySinAbreviar = array(
      "Francisco.", "Maria", "Fernandez", "Lopez", "Garcia" , "Hernandez", "Gonzalez" ,"Lorenzo", "Martinez", "Rodiguez" ,"Gomez" , "Vazquez" , "Aguilar", "Bernardo", "Santiago", "Vicenten", "Eduardo", "Rodigo", "Fernando", "Escudero" , "Dominguez", "Fernandez", "Jimenez", "Gut.", "Mtin", 
    );

  

    if($resultado === false) {
       // return false;
        die(var_dump(sqlsrv_errors(), true));
    }else{
        
        return $resultado;
    }
    return false;
  }
  

}



?>


