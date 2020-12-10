<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Save</title>
</head>
<body>
<?php

    include '/grade.php';
    echo $result;

    $conexion = mysqli_connect("localhost", "root", "root", "quiz") or
    die("Problemas con la conexión");

    mysqli_query($conexion, "insert into answers(id,name,result) values 
                    ('$_REQUEST[id]','$_REQUEST[name]',$_REQUEST[result])")
    or die("Problemas en el select" . mysqli_error($conexion));

    mysqli_close($conexion);

    echo "Datos cargados.";
?>

<a href="index.php">Volver a la home.</a>
</body>
</html>
