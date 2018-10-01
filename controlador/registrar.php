<?php

include '../clases/conexion.php';
include '../clases/usuario.php';


$objConexion=new conexion();
$conexion=$objConexion->conectar();

$objUsuario=new Usuario();
echo $objUsuario->registrar($conexion,$_POST['nombre'],$_POST['apellido'],$_POST['edad'],$_POST['nombre_acudiente'],$_POST['ciudad_nacimiento']);

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
    <a href=""></a>
</body>
</html>