<?php

$mysql_host = "localhost";
$mysql_user = "root";
$mysql_pass = "123";
$mysql_db = "noticias";

$sql = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db) or die("Couldn't Connect") ;

$imagen = $_POST['imagen'];
$afuera = $_POST['afuera'];
$adentro = $_POST['adentro'];
$nota= $_POST['nota'];
$categoria = $_POST['categoria'];

$insertar = "INSERT INTO noticias (imagen, titulo_adentro, titulo_afuera, texto, categoria) VALUES ('$imagen','$afuera',  '$adentro', '$nota', '$categoria')";

$resultado = mysqli_query($sql, $insertar) or die ("Error");

mysqli_close($sql);
echo "Correcto"

?>