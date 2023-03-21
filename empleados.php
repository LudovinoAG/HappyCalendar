<!DOCTYPE html>
<html>
<head>
	<title>ANIEMP - Empleados</title>
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
<!-- Ventana emergente -->
<div class="modal fade" id="MyModal" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<div class="modal-title">Cambio de Foto</div>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

			<div id="contenido_emergente" class="modal-body">
				<h5></h5>
			</div>

			<div class="modal-footer">
				<button class="btn btn-primary btn-lg" data-bs-dismiss="modal" aria-label="Close">
					Cerrar
				</button>
			</div>
		</div>
	</div>
</div>



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
						<li><a href="index.php"> <i class="fas fa-home"></i> Inicio</a></li>
						<li class="activado"><a href="empleados.php"><i class="fas fa-user"></i> Empleados</a></li>
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

			<div class="col-lg-6 col-md-6 col-sm-6 contenido_left_empleados">
				<h4 class="titulo_empleados"><i class="fas fa-search"></i> BUSQUEDA DE EMPLEADOS</h4>
				<div class="row div_search">
					<div class='col-lg-4 col-md-4 col-sm-4'>

							<div id="drop_Criterios" class="dropdown mt-1">
								<button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="botonDrowp"
								data-bs-toggle="dropdown" aria-expanded="false">
									<span>Criterio de búsqueda</span>
								</button>

								<ul id="lstcriterios" class="dropdown-menu" aria-labelledby="botonDrowp" name="lstcriterios">
									<button class="dropdown-item">Tarjeta</button>
									<button class="dropdown-item">Nombre</button>
									<button class="dropdown-item">Fecha Nacimiento</button>
								</ul>
							</div>

					</div>

					<div class="col-lg-6 col-md-6 col-sm-6">				
						<div id="Res_sel_criterio" class="div_selCriterio mt-1">
							<input id="txtTarjeta" name="txtCriterio" class="form-control" type="text" size="25" maxlength="6" placeholder='Tarjeta'>
							<input id="txtNombre" name="txtCriterio" class="form-control" type="hidden" size="25" maxlength="65" placeholder='Nombre'>
							<input id="txtMes" name="txtCriterio" class="form-control" type="hidden" size="25" maxlength="15" placeholder='Fecha Nacimiento'>
								
						</label>
						</div>
					</div>

					<div class="col-lg-2 col-md-2 col-sm-2">				
						<button id='bthBuscar' class="btn_buscar btn btn-default mt-0" type="button">Buscar
					
						</button>
					</div>

				</div>

				<div class='row div_resul'>
					<div id='lista_empleado_criterio' class="col-lg-12 col-md-12 col-sm-12">				
						
					</div>
				</div>
			</div>

			<div class="col-lg-7 col-md-7 col-sm-7 contenido_rigth_empleados">
				<div class="linea_animada"></div>
				<div class="div_vista">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<img id="foto_empleado" src="pics/pics.png" alt="Foto">	
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<button id='boton_cambiar' class="btn btn-default btn-sm">Cambiar Foto</button>	
							<input accept="image/*" class="form-control" id='file_foto' name='file_foto' type="file" />
							<button type="button" data-bs-toggle="modal" data-bs-target="MyModal" id='bth_enviar' class='btn btn-primary btn-sm'><i class="fas fa-file-upload fa-lg"></i></button>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<span>Tarjeta</span>
							<br><label id="tarjeta_result" name="tarjeta_result"></label>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<span>Nombre</span>
							<br><label id="nombre_result" name="nombre_result"></label>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<br>
							<div class="progress" style="display:none;">
								<div class="progress-bar-striped bg-info progress-bar-animated progress_bar" role="progressbar" style="height: 0%;">0%</div>
							</div>
						</div>
					</div>
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
<script type="text/javascript" src="js/app.js"></script>

</html>