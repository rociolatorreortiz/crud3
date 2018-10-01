<?php

include '../clases/conexion.php';
include '../clases/usuario.php';

$objConexion=new conexion();
$objUsuario=new usuario();

$conexion=$objConexion->conectar();

echo $objUsuario->eliminar($conexion,$_GET['id']); 

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
<form action="../consultar.php">
    <input type="submit" value="Ir a consultar" />
</form>
<button onclick="location.href='../consultar.php'">Otra forma</button>
</body>
</html>



