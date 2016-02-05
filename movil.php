<html>
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1.0"/>


<body>
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/costum.js"></script>



  <!--header-->
  <nav>
    <div class="nav-wrapper indigo darken-4">
      <a href="#" class="brand-logo right">VANGUARDIA </a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="https://www.facebook.com/Vanguardia-Magazine-449343441935653/?ref=hl" target="_blank">F</a></li>
        <li><a href="https://twitter.com/magazineLV" target="_blank">Tw</a></li>
        <li><a href="https://www.youtube.com/channel/UCP-VkyFmuhLWmY3f3qRc3fA" target="_blank">YT</a></li>
      </ul>
    </div>
  </nav>

  <!--Publicidad-->
  

    <!--publicidad-->
     <div style="width: 80%; height: 20%; float:left; margin-right: 10%;  margin-left: 10%; margin-down: 25%; margin-top: 5%">
        <table style="height: 100%">
          <td bgcolor="gray">
            
              <?php
              require('config.php');
              $query = "SELECT id, imagen, nombre, posicion from publicidad where posicion = 'arriba' ORDER BY rand() limit 1";
              $resultado = $sql->query($query);
              $text = $resultado->fetch_assoc()
              ?>
         
          <img src=" <?php echo $text['nombre']; ?>" width=100% height=25%>

          </td>
        </table>
      </div>


  <!--TABS!!!!!!!!!!!!!!!!!!-->
  <br /><br /><br /><br />
    <br /><br /><br /><br />

      <center>
      <ul class=" pagination" style = "margin-top: 7%">
        <li><a href="movil.php?set=deportes&pag=1"><i class="material-icons">schedule</i> Deportes</li>
        <li><a href="movil.php?set=social&pag=1"><i class="material-icons">contacts</i>Cultura</a></li>
        <li><a href="movil.php?set=gobierno&pag=1"><i class="material-icons">work</i>Vanguardia Hoy</a></li>
        <li><a href="movil.php?set=eventos&pag=1"><i class="material-icons">supervisor_account</i>Columna</a></li>
        <li><a href="movil.php?set=varios&pag=1"><i class="material-icons">assessment</i> Varios</a></li>
      </ul>
    </center>


  <br /><br />

<!--select de las noticias -->
    <?php
     require('config.php');
     $categoria = $_GET['set'];
     $paginacion = $_GET['pag'];

     if($paginacion == 1)
     {
        $inicio = 0;
     }

     else 
     {
        $inicio = ($paginacion - 1) * 3;
     }

     $final = $paginacion * 3;
     $query = "SELECT id, imagen, titulo_adentro, titulo_afuera, texto FROM noticias WHERE categoria = '$categoria' ORDER BY id DESC LIMIT $inicio,$final";
     $resultado = $sql->query($query);
  ?>

<!--Tarjetas-->

<!--Primera tarjeta-->
    <div id="Deportes" class="col s12" style="width: 85%; height: 65%; float:left; margin-right: 7.5%;  margin-left: 7.5%; margin-down: 50%">
     <?php $text = $resultado->fetch_assoc();?>
    
       <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src=" <?php echo $text['imagen']; ?>" width=70% height=100%>
        </div>

      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">
          <?php echo $text['titulo_adentro'];?>
          <i class="material-icons right">more_vert</i></span>
      </div>
      
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">
          <?php echo $text['titulo_afuera']; ?>                
          <i class="material-icons right">close</i></span>
          <p>
              <iframe class="scribd_iframe_embed" src="<?php echo $text['texto'];?>content?start_page=1&view_mode=scroll&show_recommendations=true" 
              data-auto-height="false" data-aspect-ratio="undefined" scrolling="no" id="doc_91412" width="100%" height="5000" frameborder="0"></iframe>
          </p>
      </div>
    </div>
    </div>

<!--Publicidad-->

     <div style="width: 70%; height: 25%; float:left; margin-right: 15%;  margin-left: 15%; margin-down: 25%; margin-top: 25%">
        <table style="height: 100%">
          <td bgcolor="gray">
            
              <?php
              require('config.php');
              $query = "SELECT id, imagen, nombre, posicion from publicidad where posicion = 'arriba' ORDER BY rand() limit 1";
              $resultado = $sql->query($query);
              $text = $resultado->fetch_assoc()
              ?>
         
          <img src=" <?php echo $text['nombre']; ?>" width=100% height=25%>

          </td>
        </table>
      </div>



<!--Segunda tarjeta-->
    <div id="Deportes" class="col s12" style="width: 70%; height: 70%; float:left; margin-right: 15%;  margin-left: 15%; margin-top:12%">
     <?php $text = $resultado->fetch_assoc();?>
    
       <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src=" <?php echo $text['imagen']; ?>" width=70% height=100%>
        </div>

      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">
          <?php echo $text['titulo_adentro'];?>
          <i class="material-icons right">more_vert</i></span>
      </div>
      
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">
          <?php echo $text['titulo_afuera']; ?>                
          <i class="material-icons right">close</i></span>
          <p>
              <iframe class="scribd_iframe_embed" src="<?php echo $text['texto'];?>content?start_page=1&view_mode=scroll&show_recommendations=true" 
              data-auto-height="false" data-aspect-ratio="undefined" scrolling="no" id="doc_91412" width="100%" height="5000" frameborder="0"></iframe>
          </p>
      </div>
    </div>
    </div>

<!--Segunda tarjeta-->
    <div id="Deportes" class="col s12" style="width: 70%; height: 70%; float:left; margin-right: 15%;  margin-left: 15%; margin-top:20%">
     <?php $text = $resultado->fetch_assoc();?>
    
       <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src=" <?php echo $text['imagen']; ?>" width=70% height=100%>
        </div>

      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">
          <?php echo $text['titulo_adentro'];?>
          <i class="material-icons right">more_vert</i></span>
      </div>
      
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">
          <?php echo $text['titulo_afuera']; ?>                
          <i class="material-icons right">close</i></span>
          <p>
              <iframe class="scribd_iframe_embed" src="<?php echo $text['texto'];?>content?start_page=1&view_mode=scroll&show_recommendations=true" 
              data-auto-height="false" data-aspect-ratio="undefined" scrolling="no" id="doc_91412" width="100%" height="5000" frameborder="0"></iframe>
          </p>
      </div>
    </div>
    </div>

<div style="width: 58%; height: 20%; float:left; margin-left: 40%; margin-top:12%">
          <ul class=" pagination">

            <?php 
                  require('config.php');
                  $categoria = $_GET['set'];
                  $query = "SELECT categoria FROM noticias where categoria = '$categoria'";
                  $resultado = $sql->query($query);
                  $text = $resultado->fetch_assoc();
                 
            ?>

            <li class="waves-effect"><a href="?set=<?php echo $text['categoria']; ?>&pag=1">1</a></li>
            <li class="waves-effect"><a href="?set=<?php echo $text['categoria']; ?>&pag=2">2</a></li>
            <li class="waves-effect"><a href="?set=<?php echo $text['categoria']; ?>&pag=3">3</a></li>
            <li class="waves-effect"><a href="?set=<?php echo $text['categoria']; ?>&pag=4">4</a></li>
            <li class="waves-effect"><a href="?set=<?php echo $text['categoria']; ?>&pag=5">5</a></li>

          </ul>

        </div>

      </body>
      </html>