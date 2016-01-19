 <html>

 <form class="col s12" method = "POST" action="guardar_publicidad.php">

  <h3>Link de la imagen<h3>      
    <input type="text" class="validate" name = "nombre" id = "nombre">
    <br/>
    <h3>Nombre de la publicidadh3>
      <input type="text" class="validate" name = "imagen" id = "imagen">
      <br/>
    <h3>Posicion<h3>
        <select name = "posicion" id = "posicion">
          <option value = "arriba">Arriba</option>
          <option value = "derecha">Derecha</option>
        </select>
<br/><br/>


      <button class="btn waves-effect waves-light" type="submit" name="action">Publicar
      </button>

    </form>


    </html>