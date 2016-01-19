
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
        <li><a href="https://www.facebook.com/Vanguardia-Magazine-449343441935653/?ref=hl" target="_blank">Facebook</a></li>
        <li><a href="https://twitter.com/magazineLV" target="_blank">Twitter</a></li>
        <li><a href="https://www.youtube.com/channel/UCP-VkyFmuhLWmY3f3qRc3fA" target="_blank">YouTube</a></li>
      </ul>
    </div>
  </nav>

  <!--Publicidad-->
  <div style="width: 100%; height:20%">    
    <!--Imagen-->
    <div style="float: left; width:15%; heigth:90%; margin-top: 2%; margin-left: 1%">
      <img src="lgo.png" WIDTH=260 HEIGHT=200>
    </div>
    <!--publicidad-->
      <div style="float: right; width: 60%; height: 90%;  margin-top: 2%; margin-right:15%">
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

    </div>


  <!--TABS!!!!!!!!!!!!!!!!!!-->
  <br /><br /><br /><br />
  
    <div class="row" style="width: 100%; height: 5%">
      <center>
      <ul class=" pagination" style = "margin-left:5%">
        <li><a href="index.php?set=deportes&pag=1"><i class="material-icons">schedule</i> Deportes</li>
        <li><a href="index.php?set=social&pag=1"><i class="material-icons">contacts</i>Cultura</a></li>
        <li><a href="index.php?set=gobierno&pag=1"><i class="material-icons">work</i>Vanguardia Hoy</a></li>
        <li><a href="index.php?set=eventos&pag=1"><i class="material-icons">supervisor_account</i>Columna</a></li>
        <li><a href="index.php?set=varios&pag=1"><i class="material-icons">assessment</i> Varios</a></li>
      </ul>
    </center>
    </div>

  <br /><br />

  <!--Div principal-->

  <!--slider-->

  <?php
  require('config.php');
  $query = "SELECT id, imagen, titulo_adentro, titulo_afuera, texto, categoria FROM noticias ORDER BY id DESC LIMIT 4";
  $resultado = $sql->query($query);
  ?>

  <div style="width: 100%; height: 80%">

    <div class="slider" style="float: left; width: 18%; height: 20%;  margin-left: 1%; margin-right: 2%">
      <br><br />
      <ul class="slides">
       <?php while($text = $resultado->fetch_assoc()){?>
       <li>
        <img src="<?php echo $text['imagen']; ?>">
        <div class="caption center-align">
          <h3><a href="index.php?set=<?php echo $text['categoria']; ?>&pag=1"><?php echo $text['titulo_afuera']; ?></a></h3>
          <h5 class="light grey-text text-lighten-3"><?php echo $text['titulo_adentro']; ?></h5>
        </div>
      </li>
      <?php } ?>
    </ul>
  </div>



  <!--primera tarjeta-->
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


  <div id="Deportes" class="col s12" style="width: 58%; height: 70%; float:left; margin-right: 2%">
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

            <?php echo $text['texto']; ?>

          </p>
        </div>
      </div>

    </div>


    <!--publicidad de la dereca-->
    <div class="slider" style="float:right; width: 18%; height: 60%">
     <table height="100%">
      <td bgcolor="gray">
              <?php
              require('config.php');
              $query = "SELECT id, imagen, nombre, posicion from publicidad where posicion = 'derecha' ORDER BY rand() limit 1";
              $resultado = $sql->query($query);
              $text = $resultado->fetch_assoc()
              ?>
         
          <img src=" <?php echo $text['nombre']; ?>" width=100% height=100%>

      </td>
    </table>
  </div>

</div>



<!--segunda tarjeta-->
<?php $text = $resultado->fetch_assoc();?>
<div id="Deportes" class="col s12" style="width: 58%; height: 60%; float:left; margin-left: 21%; margin-bottom:12%">
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

            <?php echo $text['texto']; ?>

          </p>
        </div>
      </div>
    </div>

    <!--tercer tarjeta-->

    <?php $text = $resultado->fetch_assoc();?>


    <div id="3" class="col s12" style="width: 58%; height: 60%; float:left; margin-left: 21%">
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

                <?php echo $text['texto']; ?>

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