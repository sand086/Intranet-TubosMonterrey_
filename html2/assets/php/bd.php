<?php
class conBD
{
  private $host = "localhost";
  private $usuario = "root";
  private $clave = "";
  private $db = "tubos_monterrey";
  public $conexion;
  public function __construct()
  {
    $this->conexion = new mysqli($this->host, $this->usuario, $this->clave, $this->db) or die(mysql_error());
    $this->conexion->set_charset("utf8");
  }
  public function buscar($tabla, $condicion)
  {
    $resultado = $this->conexion->query("SELECT * FROM $tabla WHERE $condicion") or die($this->conexion->error);
    if ($resultado)
      return $resultado->fetch_all(MYSQLI_ASSOC);
    return false;
  }

  public function seleccionar($tabla, $condicion)
  {
    $resultado = $this->conexion->query("SELECT * FROM $tabla WHERE $condicion") or die($this->conexion->error);
    if ($resultado)
      return $resultado->fetch_all(MYSQLI_ASSOC);
    return false;
  }


}



?>