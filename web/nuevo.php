<html>
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<body>
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/costum.js"></script>


<script>

function previa()
{
  var imagen = document.getElementById("imagen");
  var afuera = document.getElementById("afuera");
  var adentro = document.getElementById("adentro");
  var nota = document.getElementById("nota");


}


</script>


<h1>Nueva noticia</h1>
<br/>


  <div class="row" style="width:40%; float: left" >
      <form class="col s12" method = "POST" action="guardar.php">

    <div class="input-field col s6">
      <label for="last_name">Link de la Imagen</label>
      <input id="last_name" type="text" class="validate" name = "imagen" id = "imagen">
    </div>

<br/>

    <div class="input-field col s6">
      <label for="last_name">Titulo de Afuera</label>
      <input id="last_name" type="text" class="validate" name = "afuera" id = "afuera">
    </div>

<br/>

    <div class="input-field col s6">
      <label for="last_name">Titulo de Adentro</label>
      <input id="last_name" type="text" class="validate" name = "adentro" id = "adentro">
    </div>


<br/>

    <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <label for="textarea1">Textarea</label>
            <textarea id="textarea1" class="materialize-textarea" name = "nota" id = "nota"></textarea>
          </div>
        </div>



<br/>

        Categoria
        <select name = "categoria" id = "categoria">
          <option value = "deportes">Deportes</option>
          <option value = "social">Cultura</option>
          <option value = "gobierno">Vanguardia Hoy</option>
          <option value = "eventos">Columna</option>
          <option value = "varios">Varios</option>
        </select>

      </div>

<br/>
<br/>


<h1>VIDEO</h1><br/>
    <div class="input-field col s6">
      <label for="last_name">Link del video</label>
      <input id="last_name" type="text" class="validate" name = "video" id = "video">
    </div>




        <button class="btn waves-effect waves-light" type="submit" name="action">Publicar
          <i class="material-icons right">send</i>
        </button>
      </form>



    </div>



  </body>
  </html>