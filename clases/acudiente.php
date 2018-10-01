<?php


class Acudiente{
    public function registrar($conexion,$nombre,$apellido,$edad,$telefono,$direccion){
        /* $query="INSERT INTO acudiente (nombre,apellido,edad,telefono,direccion)Values ('$nombre','$apellido',$edad,'$telefono','$direccion')";   */   
       //PROCEDIMIENTO ALMACENADO
       $query="call registrar_acudiente('$nombre','$apellido',$edad,'$telefono','$direccion')";  
        $consulta=mysqli_query($conexion,$query);
        if ($consulta){
            $respuesta="Acudiente   Registrado";
        }else{
            $respuesta="Problema al registrar ".mysqli_error($conexion);
        }
        return $respuesta;
    }
    public function consultar ($conexion){
         /* $query="SELECT * FROM acudiente";  */
       //  PROCEDIMIENTO ALMACENADO 
         $query="call consulta_acudiente()";
        $consulta=mysqli_query($conexion, $query);
        return $consulta;
    }
    public function consultaId($conexion, $id){
        $query="SELECT * FROM acudiente WHERE id_acu=$id";  // query 
        // PROCEDIMIENTO ALMACENADO 
         $query="call consulta_id_acu('$id')";
        $consulta= mysqli_query($conexion, $query);
        return $consulta;
    }
  public function editar($conexion,$nombre,$apellido,$edad,$telefono,$direccion,$id){
      /* $query="UPDATE acudiente set nombre='$nombre', apellido='$apellido', edad='$edad', telefono='$telefono', direccion='$direccion' WHERE id_acu=$id"; */
    // PROCEDIMIENTO ALMACENADO
      $query= "call editar_acu('$nombre','$apellido','$edad',',$telefono','$direccion',$id)";       
      $consulta=mysqli_query($conexion,$query);
      if($consulta){
          $respuesta="Actualizado con exito";
          
      }else{
          $respuesta="problemas al actualizar";
      }
      return $respuesta;
  }
  public function eliminar($conexion,$id){
      /* $query="DELETE from acudiente where id_acu=$id";   */
      // PROCEDIMIENTO ALMACENADO
     $query="call eliminar_acudiente('$id')";
      $consulta=mysqli_query($conexion,$query);
      if($consulta){
        $respuesta="Eliminado con exito";
        
    }else{
        $respuesta="problemas al Eliminar";
    }
    return $respuesta;
  }
}