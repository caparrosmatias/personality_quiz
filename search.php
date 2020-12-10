<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "root", "quiz") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select name,result
                        from answers where id='$_REQUEST[id]'") or
    die("Problemas en el select:" . mysqli_error($conexion));

  if ($reg = mysqli_fetch_array($registros)) {
    echo "id:" . $_REQUEST['id'] . "<br>";
    echo "Name:" . $reg['name'] . "<br>";
    echo "Result:" . $reg['result'] . "<br>";
  } else {
    echo "User does not exist! :(";
  }
  mysqli_close($conexion);
  ?>
</body>

</html>