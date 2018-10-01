<?php
    include 'clases/conexion.php';
    include 'clases/ciudad.php';
    $objConexion=new conexion();
    $objCiudad=new ciudad();
    
    $conexion=$objConexion->conectar();
    $ciudades=$objCiudad->consultar_ciudad($conexion);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ciudad</title>
</head>
<h1>Ciudad</h1>

<body>
    <div>
        <img src="colombia.jpg" alt="">
    </div>
    <div>
    <table border="">
        <tr>
            <th>ID</th>
            <th>CIUDAD</th>
            
        </tr>
        <?php
            while($ciudad= mysqli_fetch_array($ciudades)){
        ?>
        <tr>
            <td><?php echo $ciudad['id_ciu']; ?></td>
            <td><?php echo $ciudad['nombre']; ?></td>
        
        
            
        </tr>
        <?php
            }
        

        ?>
    </table>
    </div>
    <footer>Footer</footer>
</body>

</html>