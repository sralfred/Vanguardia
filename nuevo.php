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


  <div class="row" style="width:40%; float: left" >
      <form class="col s12" method = "POST" action="guardar.php">

    <div class="input-field col s6">
      <input id="last_name" type="text" class="validate" name = "imagen" id = "imagen">
      <label for="last_name">Link de la Imagen</label>
    </div>



    <div class="input-field col s6">
      <input id="last_name" type="text" class="validate" name = "afuera" id = "afuera">
      <label for="last_name">Titulo de Afuera</label>
    </div>



    <div class="input-field col s6">
      <input id="last_name" type="text" class="validate" name = "adentro" id = "adentro">
      <label for="last_name">Titulo de Adentro</label>
    </div>



    <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <textarea id="textarea1" class="materialize-textarea" name = "nota" id = "nota"></textarea>
            <label for="textarea1">Textarea</label>
          </div>
        </div>




        Categoria
        <select name = "categoria" id = "categoria">
          <option value = "deportes">Deportes</option>
          <option value = "social">Cultura</option>
          <option value = "gobierno">Vanguardia Hoy</option>
          <option value = "eventos">Columna</option>
          <option value = "varios">Varios</option>
        </select>

      </div>


        <button class="btn waves-effect waves-light" type="submit" name="action">Publicar
          <i class="material-icons right">send</i>
        </button>
      </form>



    </div>



    <div class="row" style="width:40%; height: 60&; float: left" >

      <div id="Deportes" class="col s12" style="width: 100%; height: 60%; float:left; margin-left: 21%; margin-bottom:12%">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="" width=70% height=100%>
          </div>

          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Titulo Por Fuera<i class="material-icons right">more_vert</i></span>
            <p><a href="#">This is a link</a></p><!--Link de la tarjeta, puede quitarse-->
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Titulo por dentro<i class="material-icons right">close</i></span>
            <p>
              texto!
            </p>
          </div>
        </div>
      </div>

    </div>





  </body>
  </html>