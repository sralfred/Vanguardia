<!DOCTYPE html>
<html>
<head>
<title>Vanguardia Magazine</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Express News Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,2); } </script>
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			pager: true,
		  });
		});
	</script>
	<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
</head>
<body>


<!--  logo y  publicidad   -->

	<div class="header">

		<div class="header-bottom">
			<div class="logo" style="margin-left:5px">
				<a href="index.html"><img src="lgo.png"/></a>

              <?php
              require('config.php');
              $query = "SELECT id, imagen, nombre, posicion from publicidad where posicion = 'arriba' ORDER BY rand() limit 1";
              $resultado = $sql->query($query);
              $text = $resultado->fetch_assoc()
              ?>

			    <img style = "margin-left:7%; width: 60%; heigth: 20%" src=" <?php echo $text['nombre']; ?> "/>
			</div>



<!-- categorias  -->
<div class="text-center">
			<div class="navigation">
				<nav class="navbar navbar-default" role="navigation">
		   <div class="wrap">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
			</div>
			<!--/.navbar-header-->
		<div class="text-center">
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					 <li><a href="categorias.php?set=deportes">Deportes </a></li>
					 <li><a href="categorias.php?set=social">Cultura      </a></li>
					 <li><a href="categorias.php?set=gobierno">Vanguardia Hoy  </a></li>
					 <li><a href="categorias.php?set=eventos">Columna      </a></li>
					 <li><a href="categorias.php?set=varios">Varios       </a></li>
			<div class="clearfix"></div>
				</ul>
				<div class="search">
					<!-- start search-->
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!--/.navbar-collapse-->
	 <!--/.navbar-->
			</div>
		</nav>
		</div>
	</div>
</div>
<br/><br/><br/>



<!--  SLIDER -->

  <?php
  require('config.php');
  $categoria = $_GET['set'];
  $query = "SELECT id, imagen, titulo_adentro, titulo_afuera, texto, categoria FROM noticias WHERE categoria = '$categoria' ORDER BY id DESC LIMIT 4";
  $resultado = $sql->query($query);
  ?>

		<div class="wrap">
			<div class="col-md-8">
				<div class="slider">
					<div class="callbacks_wrap">
						<ul class="rslides" id="slider">
       <?php while($text = $resultado->fetch_assoc()){?>							
							<li>
								<img src=" <?php echo $text['imagen']; ?>" WIDTH=260 HEIGHT=200>
								<div class="caption">
									<a href="single.html"><?php echo $text['titulo_adentro']; ?></a>
								</div>
							</li>
		  <?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>





<!-- PUBLICIDAD DE LA DERECHA  -->



			<div class="col-md-4 side-bar">
			
							<img height="450" src="pd.png" alt="" />
            </div>





<!--Dos noticias de deportes -->
  <?php
  require('config.php');
  $query = "SELECT id, imagen, titulo_adentro, titulo_afuera, texto, categoria FROM noticias WHERE categoria='$categoria' ORDER BY id DESC";
  $resultado = $sql->query($query);
  $text = $resultado->fetch_assoc()
  ?>










<div class="sports-top" style="margin-left: 10px">
	<div class="s-grid-left">
		<div class="cricket">
			<header><h3 class="title-head"> 

							<?php 
								if ($categoria === "social" ) echo "Cultura";
								elseif ($categoria === "gobierno") echo "Vanguadia Hoy";
								elseif ($categoria === "eventos") echo "Columna";
								else echo "$categoria";							
							?>

			</h3></header>

			 <div class="s-grid-small">
					<div class="sc-image">
						<a href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>"><img src=" <?php echo $text['imagen']; ?>"/></a>
					</div>
					
					<div class="sc-text">
						<h6>

							<?php 
								if ($categoria === "social" ) echo "Cultura";
								elseif ($categoria === "gobierno") echo "Vanguadia Hoy";
								elseif ($categoria === "eventos") echo "Columna";
								else echo "$categoria";	
							?>
						</h6>
						<a class="power" href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>">   <?php echo $text['titulo_adentro']; ?>   </a>
						<a class="reu" href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>"><img src="images/more.png" alt="" /></a>
					</div>
					
					<div class="clearfix"></div>
			</div>

<?php $text = $resultado->fetch_assoc();?>
			 <div class="s-grid-small">
					<div class="sc-image">
						<a href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>"><img src="<?php echo $text['imagen']; ?>"/></a>
					</div>
					
					<div class="sc-text">
						<h6>

							<?php 
								if ($categoria === "social" ) echo "Cultura";
								elseif ($categoria === "gobierno") echo "Vanguadia Hoy";
								elseif ($categoria === "eventos") echo "Columna";
								else echo "$categoria";	
							?>

						</h6>
						<a class="power" href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>">   <?php echo $text['titulo_adentro']; ?>   </a>
						<a class="reu" href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>"><img src="images/more.png" alt="" /></a>
					</div>
					
					<div class="clearfix"></div>
			</div>
	    </div>
	</div>

			
<!--Dos noticias de cultura -->

  <?php $text = $resultado->fetch_assoc() ?>

	<div class="s-grid-right">
		<div class="cricket">
				<header><h3 class="title-head"> .  </h3></header>

				<div class="s-grid-small">
					
					<div class="sc-image">
						<a href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>"><img src="<?php echo $text['imagen']; ?>" alt="" /></a>
					</div>

					<div class="sc-text">
						<h6>
							<?php 
								if ($categoria === "social" ) echo "Cultura";
								elseif ($categoria === "gobierno") echo "Vanguadia Hoy";
								elseif ($categoria === "eventos") echo "Columna";
								else echo "$categoria";	

							?>
						</h6>

						<a class="power" href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>">   <?php echo $text['titulo_adentro']; ?>  </a>
						<a class="reu" href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>"><img src="images/more.png" alt="" /></a>
					</div>
					
					<div class="clearfix"></div>
				
				</div>
				
<?php $text = $resultado->fetch_assoc();?>
				<div class="s-grid-small">
					<div class="sc-image">
						<a href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>"><img src="<?php echo $text['imagen']; ?>" alt="" /></a>
					</div>
					
					<div class="sc-text">
						<h6>

							<?php 
								if ($categoria === "social" ) echo "Cultura";
								elseif ($categoria === "gobierno") echo "Vanguadia Hoy";
								elseif ($categoria === "eventos") echo "Columna";
								else echo "$categoria";	

							?>

						</h6>
						<a class="power" href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>">   <?php echo $text['titulo_adentro']; ?>  </a>
						<a class="reu" href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>"><img src="images/more.png" alt="" /></a>
					</div>
					
					<div class="clearfix"></div>
				</div>
		</div>
	</div>
				
				<div class="clearfix"></div>
</div>








<?php $text = $resultado->fetch_assoc();?>

<div class="sports-top" style="margin-left: 10px">
	<div class="s-grid-left">
		<div class="cricket">
			<header><h3 class="title-head"> .</h3></header>

			 <div class="s-grid-small">
					<div class="sc-image">
						<a href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>"><img src=" <?php echo $text['imagen']; ?>"/></a>
					</div>
					
					<div class="sc-text">
						<h6>

							<?php 
								if ($categoria === "social" ) echo "Cultura";
								elseif ($categoria === "gobierno") echo "Vanguadia Hoy";
								elseif ($categoria === "eventos") echo "Columna";
								else echo "$categoria";	
							?>
						</h6>
						<a class="power" href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>">   <?php echo $text['titulo_adentro']; ?>   </a>
						<a class="reu" href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>"><img src="images/more.png" alt="" /></a>
					</div>
					
					<div class="clearfix"></div>
			</div>

<?php $text = $resultado->fetch_assoc();?>
			 <div class="s-grid-small">
					<div class="sc-image">
						<a href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>"><img src="<?php echo $text['imagen']; ?>"/></a>
					</div>
					
					<div class="sc-text">
						<h6>

							<?php 
								if ($categoria === "social" ) echo "Cultura";
								elseif ($categoria === "gobierno") echo "Vanguadia Hoy";
								elseif ($categoria === "eventos") echo "Columna";
								else echo "$categoria";	
							?>

						</h6>
						<a class="power" href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>">   <?php echo $text['titulo_adentro']; ?>   </a>
						<a class="reu" href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>"><img src="images/more.png" alt="" /></a>
					</div>
					
					<div class="clearfix"></div>
			</div>
	    </div>
	</div>

			
<!--Dos noticias de cultura -->

  <?php $text = $resultado->fetch_assoc() ?>

	<div class="s-grid-right">
		<div class="cricket">
				<header><h3 class="title-head"> .  </h3></header>

				<div class="s-grid-small">
					
					<div class="sc-image">
						<a href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>"><img src="<?php echo $text['imagen']; ?>" alt="" /></a>
					</div>

					<div class="sc-text">
						<h6>
							<?php 
								if ($categoria === "social" ) echo "Cultura";
								elseif ($categoria === "gobierno") echo "Vanguadia Hoy";
								elseif ($categoria === "eventos") echo "Columna";
								else echo "$categoria";	

							?>
						</h6>

						<a class="power" href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>">   <?php echo $text['titulo_adentro']; ?>  </a>
						<a class="reu" href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>"><img src="images/more.png" alt="" /></a>
					</div>
					
					<div class="clearfix"></div>
				
				</div>
				
<?php $text = $resultado->fetch_assoc();?>
				<div class="s-grid-small">
					<div class="sc-image">
						<a href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>"><img src="<?php echo $text['imagen']; ?>" alt="" /></a>
					</div>
					
					<div class="sc-text">
						<h6>

							<?php 
								if ($categoria === "social" ) echo "Cultura";
								elseif ($categoria === "gobierno") echo "Vanguadia Hoy";
								elseif ($categoria === "eventos") echo "Columna";
								else echo "$categoria";	

							?>

						</h6>
						<a class="power" href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>">   <?php echo $text['titulo_adentro']; ?>  </a>
						<a class="reu" href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>"><img src="images/more.png" alt="" /></a>
					</div>
					
					<div class="clearfix"></div>
				</div>
		</div>
	</div>
				
				<div class="clearfix"></div>
</div>








<?php $text = $resultado->fetch_assoc();?>

<div class="sports-top" style="margin-left: 10px">
	<div class="s-grid-left">
		<div class="cricket">
			<header><h3 class="title-head"> .</h3></header>

			 <div class="s-grid-small">
					<div class="sc-image">
						<a href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>"><img src=" <?php echo $text['imagen']; ?>"/></a>
					</div>
					
					<div class="sc-text">
						<h6>

							<?php 
								if ($categoria === "social" ) echo "Cultura";
								elseif ($categoria === "gobierno") echo "Vanguadia Hoy";
								elseif ($categoria === "eventos") echo "Columna";
								else echo "$categoria";	
							?>
						</h6>
						<a class="power" href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>">   <?php echo $text['titulo_adentro']; ?>   </a>
						<a class="reu" href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>"><img src="images/more.png" alt="" /></a>
					</div>
					
					<div class="clearfix"></div>
			</div>

<?php $text = $resultado->fetch_assoc();?>
			 <div class="s-grid-small">
					<div class="sc-image">
						<a href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>"><img src="<?php echo $text['imagen']; ?>"/></a>
					</div>
					
					<div class="sc-text">
						<h6>

							<?php 
								if ($categoria === "social" ) echo "Cultura";
								elseif ($categoria === "gobierno") echo "Vanguadia Hoy";
								elseif ($categoria === "eventos") echo "Columna";
								else echo "$categoria";	
							?>

						</h6>
						<a class="power" href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>">   <?php echo $text['titulo_adentro']; ?>   </a>
						<a class="reu" href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>"><img src="images/more.png" alt="" /></a>
					</div>
					
					<div class="clearfix"></div>
			</div>
	    </div>
	</div>

			
<!--Dos noticias de cultura -->

  <?php $text = $resultado->fetch_assoc() ?>

	<div class="s-grid-right">
		<div class="cricket">
				<header><h3 class="title-head"> .  </h3></header>

				<div class="s-grid-small">
					
					<div class="sc-image">
						<a href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>"><img src="<?php echo $text['imagen']; ?>" alt="" /></a>
					</div>

					<div class="sc-text">
						<h6>
							<?php 
								if ($categoria === "social" ) echo "Cultura";
								elseif ($categoria === "gobierno") echo "Vanguadia Hoy";
								elseif ($categoria === "eventos") echo "Columna";
								else echo "$categoria";	

							?>
						</h6>

						<a class="power" href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>">   <?php echo $text['titulo_adentro']; ?>  </a>
						<a class="reu" href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>"><img src="images/more.png" alt="" /></a>
					</div>
					
					<div class="clearfix"></div>
				
				</div>
				
<?php $text = $resultado->fetch_assoc();?>
				<div class="s-grid-small">
					<div class="sc-image">
						<a href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>"><img src="<?php echo $text['imagen']; ?>" alt="" /></a>
					</div>
					
					<div class="sc-text">
						<h6>

							<?php 
								if ($categoria === "social" ) echo "Cultura";
								elseif ($categoria === "gobierno") echo "Vanguadia Hoy";
								elseif ($categoria === "eventos") echo "Columna";
								else echo "$categoria";	

							?>

						</h6>
						<a class="power" href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>">   <?php echo $text['titulo_adentro']; ?>  </a>
						<a class="reu" href="nota.php?titulo=<?php echo $text['id'];?>&set=<?php echo $text['categoria']; ?>"><img src="images/more.png" alt="" /></a>
					</div>
					
					<div class="clearfix"></div>
				</div>
		</div>
	</div>
				
				<div class="clearfix"></div>
</div>












					<div class="clearfix"></div>


			<div class="col-md-4 side-bar">
			<div class="first_half">
				<div class="list_vertical"></div>
			</div>
					<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
	<div class="footer">
		<div class="footer-bottom">
			<div class="wrap">
				<div class="copyrights col-md-6">
					<p> © 2016 Vanguardia Magazine | WebMaster <a href="http://w3layouts.com/">@SrAlfred</a></p>
				</div>
				<div class="footer-social-icons col-md-6">
					<ul>
						<li><a class="facebook" href="#"></a></li>
						<li><a class="twitter" href="#"></a></li>
						<li><a class="googleplus" href="#"></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>







</html>