<?php

class conexion {
        public function getConexion(){
           
           
            if($conn){
                echo "Conexión exitosa.";
            }else {
                echo "Error con la conexión.";
            }
        }
    }
    
?>
