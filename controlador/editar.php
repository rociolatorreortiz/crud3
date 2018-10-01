<?php

include '../clases/conexion.php';
include '../clases/usuario.php';

$objConexion=new conexion();
$objUsuario=new usuario();

$conexion=$objConexion->conectar();

echo $objUsuario->editar($conexion,$_POST['nombre'],$_POST['apellido'],$_POST['edad'],$_POST['ciudadNacimiento'], $_POST['id_estu']); 