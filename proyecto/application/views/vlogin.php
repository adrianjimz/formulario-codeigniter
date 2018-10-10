<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<form action="<?php echo base_url();?>clogin/ingresar" method="POST">
		<table>
			<tr>
				<td><label>Usuario</label></td>
				<td><input type="text" name="txtUsuario"></td>
			</tr>
			<tr>
				<td><label>Contraseña</label></td>
				<td><input type="password" name="txtClave"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Ingresar"></td>
			</tr>
		</table>
	</form>
	<?php echo $mensaje; ?>
</body>
</html>