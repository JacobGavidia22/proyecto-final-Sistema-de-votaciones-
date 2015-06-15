<?php
session_start();
if (@$_SESSION['Usuario']>0){
	header("Location: Iniciotse.php");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<title>Sistema de Votación</title>
	<link rel="stylesheet" type="text/css" href="../mycss/estilo.css">
	<link rel="stylesheet" type="text/css" href="../mycss/estiloSesion.css">
	<link rel="shortcut icon" type="image/x-icon" href="../image/ic.ico">
</head>

<body>
	<div class="contenedor">
		<header>
			<div class="centra">
				<div class="logo">
					<img src="../image/tse2.png" alt="Logo">
		        </div>
		        <div class="logo2">
		        	<img src="../image/12.png" alt="Logo">
		        </div>
		        <nav>
		        	<a href="../principal.html">Inicio</a>
		        </nav>
			</div>
	    </header>
	</div>

	<section>
		<table border="0px">
			<tr>
				<td>
					<figure>
						<img class="sesion" src="../image/sesion.jpg" alt="Inicio de Sesión">
					</figure>
				</td>
				<td>
					<form action="../sesion/sesion.php" method="post" name="forSesion">
						<label1>Usuario</label1><br>
						<input name="Usuario" type="text" class="inputUsuario" placeholder="Username" required="required" maxlength="10"><br>
						<label2>Clave</label2><br>
						<input name="Clave" type="password" class="inputUsuario" placeholder="Password" required="required" maxlength="10"><br>
						<input class="btnEnviar" type="submit" name="btnSubmit" value="INGRESAR">
					</form>
				</td>
			</tr>
		</table>
	</section>
</body>

</html>
