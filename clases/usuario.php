<?php

class Usuario{
    public function registrar($conexion,$nombre,$apellido,$edad,$nombre_acudiente,$ciudad_nacimiento){
       /*  $query="INSERT INTO estudiante (nombre,apellido,edad,id_acu,id_ciu)Values ('$nombre','$apellido',$edad,$nombre_acudiente,$ciudad_nacimiento)";  */  
        $query="call registrar_estudiante('$nombre','$apellido','$edad','$nombre_acudiente','$ciudad_nacimiento')"; 
        $consulta=mysqli_query($conexion,$query);
        if ($consulta){
            $respuesta="Estudiante  registrado";
        }else{
            $respuesta="Problema al registrar ".mysqli_error($conexion);
        }
        return $respuesta;
    }
    public function consultar ($conexion){
        
         $query="call consulta_estudiante()";
        $consulta=mysqli_query($conexion, $query);
        return $consulta;
    }
    public function consultaId($conexion, $id){
        /* $query="SELECT * FROM estudiante WHERE id_estu=$id";    query */
        $query=" call consulta_id ('$id')";
        $consulta= mysqli_query($conexion, $query);
        return $consulta;
    }
  public function editar($conexion, $nombre,$apellido,$edad,$ciudadNacimiento,$id){
      /* $query="UPDATE estudiante set nombre='$nombre', apellido='$apellido', edad=$edad, ciudad_nacimiento='$ciudadNacimiento' WHERE id_estu=$id"; */
    // PROCEDIMIENTO ALMACENADO
     $query= "call editar('$nombre','$apellido','$edad','$ciudadNacimiento','$id')";       
      $consulta=mysqli_query($conexion,$query);
      if($consulta){
          $respuesta="Actualizado con exito";
          
      }else{
          $respuesta="problemas al actualizar";
      }
      return $respuesta;
  }
  public function eliminar($conexion,$id){
      /* $query="DELETE from estudiante where id_estu=$id"; */
      // PROCEDIMIENTO ALMACENADO
      $query="call eliminar_estudiante('$id')";  
      $consulta=mysqli_query($conexion,$query);
      if($consulta){
        $respuesta="Eliminado con exito";
        
    }else{
        $respuesta="problemas al Eliminar";
    }
    return $respuesta;
  }
}
