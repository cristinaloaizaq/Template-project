<!DOCTYPE HTML>
<?php 

if (isset($_GET['enviar'])) {

 	$nomb = trim($_GET['nombre']);
 	$tel = trim($_GET['telefono']);
 	$correo = trim($_GET['correo']);
 	$asunto = trim($_GET['asunto']);

 	if (empty($nomb)) {
 		$error = "Ingrese su nombre";
  		$code = 1;
 	}
 	else if (!ctype_alpha($nomb)) {
 		$error = "Ingrese letras unicamente";
 		$code = 1;
 	}
 	else if(empty($tel))
	 {
	  $error = "Ingrese su numero de telefono";
	  $code = 2;
	 }
	 else if(!is_numeric($tel))
	 {
	  $error = "Ingrese numeros unicamente!";
	  $code = 2;
	 }
 	else if(empty($correo))
	 {
	  $error = "Ingrese su correo";
	  $code = 3;
	 }
	 else if(!filter_var($correo, FILTER_VALIDATE_EMAIL))
	 {
	  $error = "Direccion de correo electronico invalido";
	  $code = 3;
	 }
	 else if (empty($asunto)) {
	 	$error = "Ingrese el asunto";
	 	$code = 4;
	 }else{
	 	Header ('location:imprime.php');
	 }
}
?>
<html>
	<head>
		<title>Formulario de contacto</title>
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
			<link rel="stylesheet" type="text/css" href="style.css">
		<style type="text/css">
			<?php
				if(isset($error))
				{
				 ?>
				 input:focus
				 {
				  border:solid red 1px;
				 }
				 <?php
				}
			?>
		</style>
		
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
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
							<li><a href="threecolumn.html">Multimedia</a></li>	
							<li><a href="onecolumn.html">Form's</a></li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- /Header -->
			
			<div id="page">
				<div class="container">
					<header>
						<h2 class="title">FORMULARIO DE INFORMACION</h2>
					</header>
					<div class="row">
						<form method="GET" action="">
							<table align="center" width="30%" border="0">
								
							<section id="content" >
								<div class="6u">
									<div class="form">
										<ul class="style3">
											<li id="error"><?php if(isset($error)){ echo $error;} ?></li>
											<li><span class="fa fa-check"></span><label for="">Ingrese su nombre completo</label></li>

											<li><input type="text" name="nombre" value="<?php if(isset($nomb)){echo $nomb;} ?>"  <?php if(isset($code) && $code == 1){ echo "autofocus"; }  ?>/></li>


											<li><span class="fa fa-check"></span><label for="">Ingrese su numero telefonico</label></li>

											<li><input type="text" name="telefono" value=" <?php if(isset($tel)){echo $tel;} ?>"  <?php if(isset($code) && $code == 2){ echo "autofocus"; }  ?>/></li>


											<li><span class="fa fa-check"></span><label for="">Ingrese su direccion de correo electronico</label></li>
											<li><input type="text" name="correo" value="<?php if(isset($correo)){echo $correo;} ?>" <?php if (isset($code) && $code == 3) {echo "autofocus";} ?>/></li>


											<li><span class="fa fa-check"></span><label for="">Ingrese un asunto</label></li>

											<li><input type="text" name="asunto" value=" <?php if(isset($asunto)) {echo $asunto;}?> " <?php if (isset($code) && $code == 4 ) {echo "autofocus";} ?>/></li>


											<li><span class="fa fa-check"></span><label for="">Deje sus comentarios</label></li>
											<li><textarea name="com">Ingrese comentario</textarea></li>
											<li><input type="submit" name="enviar"></li>
										</ul>
									</div>	
								</div>										
							</section>
						</table>
 						</form>		
					</div>
				</div>	
			</div>

			<!-- Copyright -->
			<div id="copyright">
				<div class="container">
					Design: <a href="http://templated.co">Cristina Loaiza</a> FICHA: <a href="http://unsplash.com">1355953</a> (<a href="http://unsplash.com/cc0">CC0</a>)
				</div>
			</div>
			
		</div>
	</body>
</html>