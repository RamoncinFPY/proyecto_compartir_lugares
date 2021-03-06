

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de registro</title>
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/nav.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="shortcut icon" href="img/favicon/favicon.png" type="image/x-icon">
	<script src="js/jquery-3.6.0.min.js"></script>
</head>
<body>
	
	<div class="topnav" id="myTopnav">
		<a href="index.php">Login</a>
		<a href="about.php">About</a>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
			<i class="fa fa-bars"></i>
		</a>
	</div>

	<main>
		<h1>Formulario de registro</h1>
		<form action="action/nuevo_registro.php" method="POST"
			enctype="multipart/form-data"  
			class="formulario" id="formulario">

			<!-- Grupo: Nombre -->
			<div class="formulario__grupo" id="grupo__nombre">
				<label for="nombre" class="formulario__label">Nombre</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Escriba su nombre.</p>
			</div>

			<!-- Grupo: Apellido -->
			<div class="formulario__grupo" id="grupo__apellido">
				<label for="apellido" class="formulario__label">Apellido</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="apellido" id="apellido" placeholder="Apellido">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Escriba su apellido.</p>
			</div>

			<!-- Grupo: Contraseña -->
			<div class="formulario__grupo" id="grupo__password">
				<label for="password" class="formulario__label">Contraseña</label>
				<div class="formulario__grupo-input">
					<input type="password" class="formulario__input" name="password" id="password">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos, puede tener letras Aa-_ y números.</p>
			</div>

			<!-- Grupo: Contraseña 2 -->
			<div class="formulario__grupo" id="grupo__password2">
				<label for="password2" class="formulario__label">Repetir Contraseña</label>
				<div class="formulario__grupo-input">
					<input type="password" class="formulario__input" name="password2" id="password2">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
			</div>

			<!-- Grupo: Correo Electronico -->
			<div class="formulario__grupo" id="grupo__correo">
				<label for="correo" class="formulario__label">Correo Electrónico</label>
				<div class="formulario__grupo-input">
					<input type="email" class="formulario__input" name="correo" id="correo" placeholder="correo@correo.com"
					oninput="check()">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
			</div>
			<!-- Comprobación del correo electrónico -->
			<div class="formulario__grupo" id="grupo__correo2">
				<label for="correo2" class="formulario__label">Correo Electrónico</label>
				<div class="formulario__grupo-input">
					<input type="email" class="formulario__input" name="correo2" id="correo2" placeholder="correo@correo.com">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Ambos correos deben ser iguales.</p>
			</div>

			<!-- Grupo: Usuario -->
			<div class="formulario__grupo" id="grupo__usuario">
				<label for="usuario" class="formulario__label">Usuario(Fíjate si está disponible o nó!)</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="usuario" id="usuario" placeholder="usuario_123" oninput="check()">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
					<p><img src="img/Spinner-3.gif" id="preloader" style="display:none" ></p>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
				<p id="mensaje_longitud" class="formulario__input-error">MÍNIMO 4 CARACTERESs</p>
				<span id="missatge"></span>
			</div>
			
			<!-- Grupo: Imagen -->
			<div class="formulario__grupo" id="">
				<label class="formulario__label">Añadir imagen</label>
				<div class="formulario__grupo-input">
					<input name="archivo" id="archivo" type="file">
					<input type="hidden" name="MAX_FILE_SIZE" value="130000"><br>
				</div>
			</div>

			<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente.</p>
			</div>

			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit" class="formulario__btn" name="enviar">Enviar</button>
					<!-- <span id="enviar" type="submit" class="formulario__btn" name="enviar"></span> -->
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
			</div>
		</form>
	</main>

	<footer class="pie">
        Abril 2021, by Ramón
     </footer>
     <script src="js/checkuser.js"></script>
	<script src="js/formulario.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>