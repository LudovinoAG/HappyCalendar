<!DOCTYPE html>
<html>
<head>
	<title>ANIEMP - Configuracion</title>
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
<div class="modal fade" id="MyModal_Add" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<div id="title_MOD" class="modal-title">Nuevo empleados</div>
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

<!-- Ventana EDITAR -->
<div class="modal fade" id="MyModal_EDIT" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<div class="modal-title">EDITAR MENSAJE</div>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

			<div id="contenido_emergente_EDIT" class="modal-body">
				<h5></h5>
				<div class="form-group">
					<label for="txtMensaje"> Mensaje: <span id='Ident_Mensaje'></span>
						<textarea class="form-control" name="txtMensaje" id="txtMensaje" cols="60" rows="4">

						</textarea>
					</label>	
				</div>

				<div class="form-group">
					<label for="txtAsignado"> Asignado:
						<input type="text" class="form-control" size="60" maxlength="80" id="txtAsignado" 
						name="txtAsignado" disabled>
					</label>
				</div>

			
			</div>

			<div class="modal-footer">
				<button id="boton_save_edit" class="btn btn-success btn-lg">Guardar</button>
				<button class="btn btn-primary btn-lg" data-bs-dismiss="modal" aria-label="Close">
					Cerrar
				</button>
			</div>
		</div>
	</div>
</div>

<!-- Ventana emergente 2 -->
<div class="modal fade" id="MyModal_Mensaje" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<div id="title_MOD" class="modal-title">Mensaje</div>
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

<!-- Ventana CREAR MENSAJE -->
<div class="modal fade" id="MyModal_Mensaje_Crear" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<div id='title_crear' class="modal-title">NUEVO MENSAJE</div>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

			<div id="contenido_emergente_CREAR" class="modal-body">
				<h5></h5>
				<div class="form-group">
					<label for="txtMensaje"> Mensaje: <span id='Ident_Mensaje'></span>
						<textarea class="form-control" name="txtNewMsg" id="txtNewMsg" cols="60" rows="4"></textarea>
					</label>	
				</div>
			
			</div>

			<div class="modal-footer">
				<label id='msg_status' class='control-label msg_status'></label>
				<button id="boton_save_mensaje" class="btn btn-success btn-lg">Registrar</button>
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
		<canvas id='my-canvas'>
			
		</canvas>
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
						<li><a href="empleados.php"><i class="fas fa-user"></i> Empleados</a></li>
						<li class="activado"><a href="config.php"><i class="fas fa-cog"></i> Configuración</a></li>
						<li><a href="#"><i class="fas fa-sliders-h"></i></a></li>
						
						<li><a href="#"><i class="fas fa-question-circle"></i></a></li>
					</ul>

				</div>
			</div>
		</div>
	</header>

	<section class="contenido_principal">

		<div class="row fila_contenido">

			<div class="col-lg-8 col-md-8 col-sm-8 contenido_left_Configuracion">
				<h4 class="titulo_add"><i class="fas fa-address-card"></i> AGREGAR EMPLEADOS</h4>

				<div class="row agregar_empleado">
					<div class='col-lg-12 col-md-12 col-sm-12'>
						<div class="form-group">
							<label for="txtTarjeta"> Tarjeta
								<input id="txtTarjeta" class="form-control" type="text" size="6" maxlength="6" name="txtTarjeta">
							</label>

							<label for="txtNombre"> Nombre Completo
								<input id="txtNombre" class="form-control" type="text" size=29 maxlength="65" name="txtNombre">
							</label>

							<label for="txtFechaNacimiento"> Fecha nacimiento
								<input  id="txtFechaNacimiento" class="form-control" type="date" size="10" maxlength="10" name="txtFechaNacimiento">
							</label>

							<label for="lstsupervisor"> Supervisor
								<select class="form-control" name="lstsupervisor" id="lstsupervisor">
									<option value="1">Ludovino Guzman</option>
								</select>
							</label>
						</div>

						<div class="form-group">
							<label for="lstsegmento"> Segmento
								<select class="form-control" name="lstsegmento" id="lstsegmento">
									<option value="1">Soporte a Ventas</option>
								</select>
							</label>

							<label for="txtFile_Foto"> Foto
								<input id="txtFile_Foto" class="form-control" type="file" name="txtFile_Foto">
							</label>

							<div id="botones">
								<button class="btn btn-default btn-sm" id="btn_insertar_empleado">Insertar</button>
								<button class="btn btn-danger btn-sm" id="btn_clear">Limpiar</button>
							</div>
						</div>

					</div>


				</div>
				

				<h4 class="titulo_admin_mensaje"><i class="fas fa-file-alt"></i> ADMINISTRACION DE MENSAJES PERSONALIZADOS</h4>
				<div class="row div_admin_mensajes">
					<?php
						include_once "lista_mensajes.php";
					?>
				</div>

			</div>

			<div class="col-lg-4 col-md-4 col-sm-4 contenido_rigth_configuracion">
			<h4 class="titulo_config"><i class="fas fa-file-signature"></i> ASIGNAR MENSAJE</h4>
				<div class="div_config">
					<div class="row">
						<div class="col-lg-8 col-md-8 col-sm-8">
							<div class="form-group">
								<label id="titulo_find_empleado" for="txtFind">Empleado:
									<input id='txtFind' name="txtFind" class="form-control" type="text" size="14" maxlength="6" />
								</label>
								<button id="boton_search" class="btn btn-default btn-md"><i class="fas fa-search"></i></button>
							</div>

							<div class="form-group">
								<label id="txtFind_result"></label>
							</div>
							
							<div class="form-group">
								<label id="titulo_cod_mensaje" for="lstmensajes">Num. Mensaje</label>
								
									<?php include_once('Get_mensajes.php') ?>
									
							</div>
							
							<div class="row">
								<div class="col-lg-10 col-md-10 col-sm-10">
									<div class="form-group">
										<label id="titulo_mensajes" for="txtmensajes">Mensaje:</label>
										<label id="lblmensajes" for=""></label>
									</div>
								</div>

								<div class="col-lg-2 col-md-2 col-sm-2">
									<div class="form-group grupo_botones_mensaje">
										<button id='btn_set' class="btn btn-default btn-sm">Asignar Mensaje</button>
										<button id='btn_create' class="btn btn-primary btn-sm">Crear Mensajes </button>
									</div>
								</div>
							</div>


						</div>

						<div class="col-lg-4 col-md-4 col-sm-4" id='contenedor_foto'>
							<img id="foto_empleado" src="pics/pics.png" alt="foto">
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