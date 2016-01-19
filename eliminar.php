  <?php
  require('config.php');
  $query = "SELECT id, imagen, titulo_adentro, titulo_afuera, texto, categoria FROM noticias";
  $resultado = $sql->query($query);
  ?>

<html>
<body>

<table border=1 width="80%">
<thead>
<tr>
<td><b>Noticia</b></td>
<td><b>Eliminar</b></td>
</tr>

<tbody>
	<?php while($row=$resultado->fetch_assoc()){?>
	<tr>
		<td><?php echo $row['titulo_afuera'];?></td>
		<td> <a href="eliminar2.php?id=<?php echo $row['id'];?>">Eliminar</a> </td>
	</tr>
</tbody>
	<?php } ?>

</table>

</body>
</html>