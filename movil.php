<html>
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/movil.css"  media="screen,projection"/>
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
      </ul>
    </div>
  </nav>

  <!--Publicidad-->
  

    <!--publicidad-->
     <div class="publicidadsize publicidadsize2 publicidadsize3 publicidadsize4 publicidadsize5">
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
      <center>
      <ul class=" pagination" style = "margin-top: 18%">
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
    <div id="Deportes" class="col s12 tamano1 tamano2 tamano3 tamano4 tamano5 tamano6 tamano7"  style = "margin-top: 1%">
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

     <div class="psize5 psize4 psize3 psize2 psize1" style="margin-top: 25%">
        <table style="height: 100%">
          <td bgcolor="gray">
            
              <?php
              require('config.php');
              $query2 = "SELECT id, imagen, nombre, posicion from publicidad where posicion = 'arriba' ORDER BY rand() limit 1";
              $resultado2 = $sql->query($query2);
              $text2 = $resultado2->fetch_assoc()
              ?>
         
          <img src=" <?php echo $text2['nombre']; ?>" width=100% height=25%>

          </td>
        </table>
      </div>



<!--Segunda tarjeta-->
    <div id="Deportes" class="col s12 tamano1 tamano2 tamano3 tamano4 tamano5 tamano6 tamano7"  style = "margin-top: 10%" >
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

<!--Tercera tarjeta-->
    <div id="Deportes" class="col s12 tamano1 tamano2 tamano3 tamano4 tamano5 tamano6 tamano7"  style = "margin-top: 25%">
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