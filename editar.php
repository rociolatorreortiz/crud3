<?php
include 'clases/conexion.php';
include 'clases/usuario.php';

$objConexion= new conexion();
$objUsuario= new usuario();

$conexion=$objConexion->conectar();
$datos=$objUsuario->consultaID($conexion, $_GET['id']);

$nombre;
$apellido;
$edad;
$ciudadNacimiento;

while($dato=mysqli_fetch_array($datos)){
    $id=$dato['id_estu'];
    $nombre=$dato['nombre'];
    $apellido=$dato['apellido'];
    $edad=$dato['edad'];
    $ciudadNacimiento=$dato['ciudad_nacimiento'];
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
    <form action="controlador/editar.php" method="post">
        <input value="<?php echo $id; ?>" type="hidden" name="id_estu">
        <label for="">Nombre</label><input type="text" name="nombre" value="<?php echo $nombre; ?>"> <br> <br>
        <label for="">Apellido</label><input type="text"  name="apellido" value="<?php echo $apellido; ?>"><br> <br> 
        <label for="">Edad</label><input type="text" name="edad" value="<?php echo $edad; ?>"> <br> <br> 
        <label for="">Ciudad de nacimiento</label><input type="text"name="ciudadNacimiento"  value="<?php echo $ciudadNacimiento; ?>"><br><br>
        <input type="submit" value="Actualizar">
    </form>
    
    
</body>
</html>