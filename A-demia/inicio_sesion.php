<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Inicio de sesión</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/base.css" />
	<link rel="stylesheet" href="css/inicio_sesion.css" />
  	<link rel="stylesheet" type="text/css" href="css/menu.css" />
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
</head>
<body>
	<?php include("php/menu.php") ?>
	
		<div class="sesion">
			<h2>Inicio de sesión</h2>
			<input type="text" name="ncontrol" placeholder="No. Control">
			<input type="password" name="pass" placeholder="Contraseña">
			<input type="button" name="sesion" value="Iniciar sesion">
			<hr>
			<a href="">Registrarse</a>|
			<a href="">Olvidé mi contraseña</a>
		</div>
	

</body>
</html>