<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Hola mundo</p>

    <?php

    $usuario = "root";
    $contraseña = "root";
    $servidor = "db";
    $database = "mysql";

    $conexion = mysqli_connect($servidor, $usuario, $contraseña, $database);

    if(!$conexion){
        echo 'No se ha podido conectar';
    }else{
        echo 'Conectado correctamente';
    }
    ?>

</body>

</html>
