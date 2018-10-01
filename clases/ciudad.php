<?php

class ciudad{
    public function consultar_ciudad($conexion){
        /*  $query="SELECT * FROM ciudad";  */
         $query="call consulta_ciudad()";
        //  PROCEDIMIENTO ALMACENADO 
          /* $query="call consulta_acudiente()"; */
         $consulta=mysqli_query($conexion, $query);
         return $consulta;
     }
}