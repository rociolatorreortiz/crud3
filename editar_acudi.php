<?php
include 'clases/conexion.php';
include 'clases/acudiente.php';

$objConexion= new conexion();
$objAcudiente= new Acudiente();

$conexion=$objConexion->conectar();
$datos=$objAcudiente->consultaID($conexion, $_GET['id']);

$nombre;
$apellido;
$edad;
$telefono;
$direccion;

while($dato=mysqli_fetch_array($datos)){
    $id=$dato['id_acu'];
    $nombre=$dato['nombre'];
    $apellido=$dato['apellido'];
    $edad=$dato['edad'];
    $telefono=$dato['telefono'];
    $direccion=$dato['direccion'];
}

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
    <form action="controlador_acu/editar_acu.php" method="post">
        <input value="<?php echo $id; ?>" type="hidden" name="id_acu">
        <label for="">Nombre</label><input type="text" name="nombre" value="<?php echo $nombre; ?>"> <br> <br>
        <label for="">Apellido</label><input type="text"  name="apellido" value="<?php echo $apellido; ?>"><br> <br> 
        <label for="">Edad</label><input type="text" name="edad" value="<?php echo $edad; ?>"> <br> <br> 
        <label for="">Telefono</label><input type="text"name="telefono"  value="<?php echo $telefono; ?>"><br><br>
        <label for="">Direccion</label><input type="text"name="direccion"  value="<?php echo $direccion; ?>"><br><br>
        <input type="submit" value="Actualizar">
    </form>
    
    
</body>
</html>