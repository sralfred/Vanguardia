  <?php
  require('config.php');
  $query = "SELECT id, imagen, nombre, posicion FROM publicidad";
  $resultado = $sql->query($query);
  ?>

<html>
<body>

<table border=1 width="80%">
<thead>
<tr>
<td><b>Publicidad</b></td>
<td><b>Eliminar</b></td>
</tr>

<tbody>
	<?php while($row=$resultado->fetch_assoc()){?>
	<tr>
		<td><?php echo $row['imagen'];?></td>
		<td> <a href="publicidad_eliminar.php?id=<?php echo $row['id'];?>">Eliminar</a> </td>
	</tr>
</tbody>
	<?php } ?>

</table>

</body>
</html>