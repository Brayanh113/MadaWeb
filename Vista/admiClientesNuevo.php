<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>MADA || Registrar Cliente </title>
		<link rel="stylesheet" href="">
	</head>
	<body>

		<h1>Registrar Cliente</h1>
		<form class="form" action="../Controlador/ControladorUsuarios.php" method="POST" accept-charset="utf-8">

			<label for="Nombre">Nombre: </label>
			<input type="text" name="Nombre" id="Nombre">

			<label for="Apellido">Apellido: </label>
			<input type="text" name="Apellido" id="Apellido">

			<label for="Documento">Documento: </label>
			<input type="text" name="Documento" id="Documento">

			<label for="Direccion">Dirección: </label>
			<input type="text" name="Direccion" id="Direccion">

			<label for="Telefono">Telefono: </label>
			<input type="number" name="Telefono" id="Telefono">

			<label for="Correo">Correo: </label>
			<input type="email" name="Correo" id="Correo">

			<label for="Contrasena">Contraseña: </label>
			<input type="password" name="Contrasena" id="Contrasena">

			<label for="Estado">Estado: </label>
			<select name="Estado" id="Estado" class="camposInputs">
				<option value="">Seleccione</option>
				<option value="1">Activo</option>
				<option value="0">Inactivo</option>
			</select>

			<label for="IdRol">Rol: </label>
			<input type="text" name="IdRol" id="IdRol" value="1" placeholder="Cliente" readonly>

			<!-- <select name="IdRol" id="IdRol" class="camposInputs">
				<option value="">Seleccione</option>
				<option value="2">Administrador</option>
				<option value="1">Cliente</option>
			</select> -->

			<button type="submit" id="registrarUsuario" name="registrarUsuario">Registrar</button>

			
			
		</form>

		
	</body>
	</html>	