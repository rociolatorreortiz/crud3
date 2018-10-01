<?php
include 'clases/conexion.php';
include 'clases/ciudad.php';
include 'clases/acudiente.php';

$objConexion=new conexion();
$objCiudad= new ciudad();
$objAcudiente=new acudiente();


$conexion=$objConexion->conectar();
$ciudades=$objCiudad->consultar_ciudad($conexion);
$acudientes=$objAcudiente->consultar($conexion);
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
    <form action="controlador/registrar.php" method="post">
        <h1> Registrar Estudiante</h1>
        <label for="">Nombre</label> <input type="text" name="nombre" id=""><br><br>
        <label for="">Apellido</label><input type="area" name="apellido" id=""><br><br>
        <!-- <textarea name="descripcion" rows="10" cols="30"></textarea><br><br>  //Text-area  -->
        <label for="">Edad</label><input type="text" name="edad" id=""><br><br>
        <label for="nom">Nombre De Acudiente </label>
        <select name="nombre_acudiente" id="">
            <?php
            while($acudiente=mysqli_fetch_array($acudientes)){
                ?>
                <option value="<?php echo $acudiente['id_acu']; ?>">
                <?php echo$acudiente['nombre'] ?>
            </option>
            <?php
            }
            ?>
        </select><br><br>
        <label for="Ciudad">Ciudad de nacimiento </label>
        <select name="ciudad_nacimiento" id="">
            <?php
            while($ciudad=mysqli_fetch_array($ciudades)){
                ?>
                <option value="<?php echo $ciudad['id_ciu']; ?>">
                <?php echo$ciudad['nombre'] ?>
            </option>
            <?php
            }
            ?>
        </select><br><br>
        <input type="submit" value="registrar">
    </form>
</body>

</html>
