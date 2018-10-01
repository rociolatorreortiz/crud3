<?php
    include 'clases/conexion.php';
    include 'clases/acudiente.php';
    $objConexion=new conexion();
    $objAcudiente=new Acudiente();
    
    $conexion=$objConexion->conectar();
    $datos=$objAcudiente->consultar($conexion);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="">
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>EDAD</th>
            <th>TELEFONO </th>
            <th>DIRECCION </th>
        </tr>
        <?php
            while($dato= mysqli_fetch_array($datos)){
        ?>
        <tr>
            <td><?php echo $dato['id_acu']; ?></td>
            <td><?php echo $dato['nombre']; ?></td>
            <td><?php echo $dato['apellido']; ?></td>
            <td><?php echo $dato['edad']; ?></td>
            <td><?php echo $dato['telefono']; ?></td>
            <td><?php echo $dato['direccion']; ?></td>
            <td><a href="editar_acudi.php?id=<?php echo $dato['id_acu'];?>" >Editar</a></td>
            <td><a href="controlador_acu/eliminar_acu.php?id=<?php echo $dato['id_acu'];?>">Eliminar</a></td>
            
        </tr>
        <?php
            }
        

        ?>
    </table>
</body>
</html>