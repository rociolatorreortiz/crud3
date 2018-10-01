<?php

include '../clases/conexion.php';
include '../clases/acudiente.php';

$objConexion=new conexion();
$objAcudiente=new Acudiente();

$conexion=$objConexion->conectar();

echo $objAcudiente->editar($conexion,$_POST['nombre'],$_POST['apellido'],$_POST['edad'],$_POST['telefono'],$_POST['direccion'], $_POST['id_acu']); 