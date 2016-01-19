<?php

$mysql_host = "localhost";
$mysql_user = "root";
$mysql_pass = "123";
$mysql_db = "noticias";

$sql = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db) or die("Couldn't Connect") ;

$imagen = $_POST['imagen'];
$nombre = $_POST['nombre'];
$posicion = $_POST['posicion'];

$insertar = "INSERT INTO publicidad (imagen, nombre, posicion) VALUES ('$imagen','$nombre', '$posicion')";

$resultado = mysqli_query($sql, $insertar) or die ("Error");

mysqli_close($sql);
echo "Correcto"

?>