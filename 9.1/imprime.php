<!DOCTYPE html>

<?php 

$nomb = trim($_GET['nombre']);
$tel = trim($_GET['telefono']);
$correo = trim($_GET['correo']);
$asunto = trim($_GET['asunto']);
$Comentario = ($_GET['com']);
 ?>
<html>
<head>
	<title>FORMULARIO</title>
			<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>

</head>
<body>

	<div id="wrapper">
			
			<!-- Header -->
			<div id="header2">
				<div class="container"> 
					
					<!-- Nav -->
					<nav id="nav">
						<ul>
							<li class="active"><a href="index.html">Homepage</a></li>
							<li><a href="twocolumn1.html">Personal information</a></li>
							<li><a href="twocolumn2.html">Laboral information</a></li>

							<li><a href="onecolumn.php">Form's</a></li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- /Header -->
			
			<div id="page">
				<div class="container">
					<header>
						<h2 class="title">DATOS INGRESADOS EN EL FORMULARIO</h2>
					</header>
					<div class="row">
						<form method="GET">
							
								
								<section id="content" >
									<div class="6u">
										<div class="form">
											<ul class="style3">
												<li><span class="fa fa-check"></span><label for="">Nombre:  <?php echo $nomb; ?></label></li>
												<li><span class="fa fa-check"></span><label for="">Telefono: <?php echo $tel; ?></label></li>
												<li><span class="fa fa-check"></span><label for="">Correo electronico: <?php echo $correo; ?></label></li>
												<li><span class="fa fa-check"></span><label for="">Asunto: <?php echo $asunto; ?></label></li>
												<li><span class="fa fa-check"></span><label for="">Comentario: </label></li>
												<li><span class="fa fa-check"><textarea><?php echo $Comentario ; ?></textarea></span></li>
											</ul>
										</div>
									</div>
								</section>	
							
 						</form>		
					</div>
				</div>	
			</div>

			<!-- Copyright -->
			<div id="copyright">
				<div class="container">
					Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
				</div>
			</div>
			
		</div>
	</body>
</html>
</body>
</html>