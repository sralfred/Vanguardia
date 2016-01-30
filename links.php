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
<td><b>Link</b></td>
</tr>

<tbody>
	<?php while($row=$resultado->fetch_assoc()){?>
	<tr>
		<td><?php echo $row['titulo_adentro'];?></td>
		<td> http://ec2-52-32-197-97.us-west-2.compute.amazonaws.com/share.php?titulo=<?php echo $row['id'];?></td>
	</tr>
</tbody>
	<?php } ?>

</table>

</body>
</html>