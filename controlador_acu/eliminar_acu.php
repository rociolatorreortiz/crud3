<?php

include '../clases/conexion.php';
include '../clases/acudiente.php';

$objConexion=new conexion();
$objAcudiente=new Acudiente();

$conexion=$objConexion->conectar();

echo $objAcudiente->eliminar($conexion,$_GET['id']); 

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
<form action="../consultar_acudi.php">
    <input type="submit" value="Ir a consultar" />
</form>
<button onclick="location.href='../consultar_acudi.php'">Otra forma</button>
</body>
</html>



