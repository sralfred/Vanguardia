<?php

require("config.php");
$id = $_GET['id'];

$query="DELETE FROM noticias WHERE id='$id'";

 $resultado = $sql->query($query);
 ?>


 <html>
 <h3>Noticia eliminada con exito!</h3>
 <a href="index.php?set=deportes&pag=1">Regresar a pagina principal</a><br/>
 <a href="eliminar.php">Eliminar otra noticia</a>
 </html>

