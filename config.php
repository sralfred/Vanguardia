<?php


$mysql_host = "localhost";
$mysql_user = "root";
$mysql_pass = "123";
$mysql_db = "noticias";

$sql = mysqli_connect($mysql_host, $mysql_user, $mysql_pass) or die("Couldn't Connect") ;
mysqli_select_db($sql,'noticias');

?>