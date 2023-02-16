<?php

$contraseña = "6rpde456jq";
$usuario = "asicomdesarrollo_SQLLogin_2";
$nombreBaseDeDatos = "tubosmonterrey";
# Puede ser 127.0.0.1 o el nombre de tu equipo; o la IP de un servidor remoto
$rutaServidor = "tubosmonterrey.mssql.somee.com";

$mysqli = new mysqli($rutaServidor, $usuario, $contraseña, $nombreBaseDeDatos);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

?>