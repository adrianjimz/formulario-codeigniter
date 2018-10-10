<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Persona</title>
</head>
<body>
	<h1>Cargo persona</h1>
	<form action="<?php echo base_url(); ?>cpersona/guardar" method="POST">
		<table>
			<tr>
				<td><label>DNI:</label></td>
				<td><input type="text" name="txtDNI" maxlength="8"></td>
			</tr>
			<tr>
				<td><label>Nombre:</label></td>
				<td><input type="text" name="txtNombre"></td>
			</tr>
			<tr>
				<td><label>Apellido Paterno:</label></td>
				<td><input type="text" name="txtApPaterno"></td>
			</tr>
			<tr>
				<td><label>Apellido Materno:</label></td>
				<td><input type="text" name="txtApMaterno"></td>
			</tr>
			<tr>
				<td><label>Email:</label></td>
				<td><input type="email" name="txtEmail"></td>
			</tr>
			<tr>
				<td><label>Fecha de nacimiento:</label></td>
				<td><input type="date" name="datFecNac"></td>
			</tr>
			<tr>
				<td><label><b><br>Usuarios</b></label></td>
			</tr>
			<tr>
				<td><label>Usuario:</label></td>
				<td><input type="text" name="txtUsuario"></td>
			</tr>
			<tr>
				<td><label>Clave:</label></td>
				<td><input type="password" name="txtClave"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Guardar"></td>
			</tr>
		</table>
	</form>
	<a href="<?php echo base_url();?>clogin">Loguearse</a>
</body>
</html>