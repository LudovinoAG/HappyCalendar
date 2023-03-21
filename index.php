<!DOCTYPE html>
<html>
<head>
	<title>ANIEMP - Inicio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" type="image/jpg" href="favicon.jpg"/>
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
</head>

<body>
<script>
    window.module = {};
  </script>
  <script type="text/javascript" src="js/confetti.js"></script>
  <script>
    window.confetti = module.exports;
  </script>

<div class="container">

<div class="logo">
	<img src="pics/pastel.jpg" alt="">
</div>

	<header>
		
		

		<div class="row">

			<div class="col-lg-6 col-md-8 col-sm-9 h_name">
				<div class="name">
					<span class="titulo">ANIVERSARIO EMPLEADOS - ANIEMP</span>
					<span class="details">Control para la vista en la pantalla de los empleados
					que estan de Cumpleaños.</span>
				</div>
			</div>

			<div class="col-lg-6 col-md-4 col-sm-3 h_info">
				<div class="info">
					<span class="username">Username</span>
					<br>
					<span class="dateNow">Fecha Actual</span>
				</div>
			</div>

		</div>

		<div class="row div_menu">
			<div class="col-lg-12">
				<div class="menu">
					<ul>
						<li class="activado"><a href="index.php"> <i class="fas fa-home"></i> Inicio</a></li>
						<li><a href="empleados.php"><i class="fas fa-user"></i> Empleados</a></li>
						<li><a href="config.php"><i class="fas fa-cog"></i> Configuración</a></li>
						<li><a href="#"><i class="fas fa-sliders-h"></i></a></li>
						<li><a href="#"><i class="fas fa-question-circle"></i></a></li>
					</ul>

				</div>
			</div>
		</div>
		<canvas id='my-canvas'></canvas>
	</header>

	<section class="contenido_principal">

		<div class="row fila_contenido">

			<div class="col-lg-7 col-md-7 col-sm-7 contenido_left">
				
			<h4><i class="fas fa-question-circle"></i> ¿Qué es ANIEMP?</h4>
			<p>Por sus siglas es <strong>ANIVERSARIO DE EMPLEADOS</strong> y es una herramienta diseñada para
			 automatizar las fechas festivas de los empleados de una organización, de esta manera poder lograr
			 su motivación al momento de visualizar su foto y mensaje en pantalla.
			</p>

			<h4><i class="fas fa-question-circle"></i> ¿Como funciona?</h4>
			<p>
				Solo debes agregar en el menú <strong>Empleados</strong> los recursos que quieras añadir a la herramienta
				completando los campos del formulario de alta, en el caso de no cargar una foto personalizada
				se estara usando la foto por defecto del carnet del empleado.
			</p>

			<h4><i class="fas fa-info-circle"></i> Recuerda!</h4>

			<p>Manten a toda tu gestión motivada, mostrando su foto a todo el centro en su dia de cumpleaños
			con un maravilloso mensaje personalizado de felicitaciones o frase motivacional. Una vez configurado
			todo el proceso se hara de forma automatica y sera visualizada en una segunda vista que podras
			colocar en una pantalla de televisor para hacer el momento de tu recurso aún más interesante. 
			</p>

			</div>


			<div class="col-lg-4 col-md-4 col-sm-4 contenido_rigth">

				<span>PROXIMO</span> <span>ANIVERSARIO</span>
				<p class='p_Crono'></p>

				<div class="div_fotos_inicio">

					<?php 
						include_once "top_empleados_ani.php";
					?>

				</div>
				
			</div>

		</div>
		
	</section>


	<footer>
		<div>
			<p>Se autoriza su uso a <strong>Nombre empresa</strong> todos los derechos reservados 2021</p>
			<span>Developed by Ludovino Guzmán</span>
		</div>
	</footer>
	
</div>
</body>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/moment.js"></script>
<script type="text/javascript" src="js/app.js"></script>

</html>