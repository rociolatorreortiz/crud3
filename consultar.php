<?php
    include 'clases/conexion.php';
    include 'clases/usuario.php';
    $objConexion=new conexion();
    $objUsuario=new usuario();
    
    $conexion=$objConexion->conectar();
    $datos=$objUsuario->consultar($conexion);
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
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Nombre Acudiente</th>
            <th>Ciudad de  Nacimiento </th>
        </tr>
        <?php
            while($dato= mysqli_fetch_array($datos)){
        ?>
        <tr>
            <!-- <td><?php echo $dato['id_estu']; ?></td> -->
            <td><?php echo $dato['nombre']; ?></td>
            <td><?php echo $dato['apellido']; ?></td>
            <td><?php echo $dato['edad']; ?></td>
             <td><?php echo $dato['nombre_acudiente']; ?></td>
             <td><?php echo $dato['ciudad_de_nacimiento']; ?></td>
            <!-- <td><a href="editar.php?id=<?php echo $dato['id_estu'];?>" >Editar</a></td>
            <td><a href="controlador/eliminar.php?id=<?php echo $dato['id_estu'];?>">Eliminar</a></td> -->
            
        </tr>
        <?php
            }
        

        ?>
    </table>
</body>
</html>