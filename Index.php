<?php
session_start();
if (@$_SESSION['Votante']>0){
	header("Location: papeletas/presidentes/Presidentes.php");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<title>Ingresar un DUI Válido</title>
	<link rel="stylesheet" type="text/css" href="mycss/estiloPresidente.css">
	<link rel="stylesheet" type="text/css" href="mycss/estiloDui.css">
	<link rel="shortcut icon" type="image/x-icon" href="image/ic.ico">

	<link href="mycss/Dui/keyboardstyle.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="mycss/Dui/jquery-1.2.6.min.js"></script>
	<script type="text/javascript" src="mycss/Dui/jquery-ui-personalized-1.5.2.min.js"></script>
	<script type="text/javascript" src="mycss/Dui/jquery-fieldselection.js"></script>
	<script type="text/javascript" src="mycss/Dui/vkeyboard.js"></script>
	<script type="text/javascript" src="mycss/Js/mijs.js"></script>
	
</head>

<body onload="retroceder();">

	<header>
		<div class="centra">
			<div class="logo">
				<img src="image/tse2.png" alt="Logo">
		    </div>
		    <div class="logo2">
		        <img src="image/12.png" alt="Logo">
		    </div>
		</div>
	</header>
	<div>
		<table border="0px">
			<form name="forDUI" action="sesion/sesionDui.php" method="post">
				<tr>
					<td colspan="2">DUI</td>
				</tr>
				<tr>
					<td>
						<input onkeyup="mascara(this,'-',patron3,true)" name="pwd" id="pwd" type="text" class="inputdui" placeholder="00000000-0" required="required" maxlength="10">
					</td>
					<td>
						<a href="#" id="showkeyboard" title="Teclado">
							<img src="mycss/img/key.png">
						</a>
					</td>
					<td>
						<img class="ayuda" onClick ="alert('Ingrese el número de DUI y precionar enter')" src="image/ayuda.gif">
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<button type="submit" name="btnDui">
							<img class="buscador" src="image/buscador.jpg">
						</button>
			        </td>
			    </tr>
		    </form>
		</table>

		<div id="keyboard">
			<div id="row0">
				<input name="1" type="button" class="b" value="1" />
				<input name="2" type="button" class="b" value="2" />
				<input name="3" type="button" class="b" value="3" />
				<input name="4" type="button" class="b" value="4" />
				<input name="5" type="button" class="b" value="5" />
				<input name="6" type="button" class="b" value="6" />
				<input name="7" type="button" class="b" value="7" />
				<input name="8" type="button" class="b" value="8" />
				<input name="9" type="button" class="b" value="9" />
				<input name="0" type="button" class="b" value="0" />
				<input name="backspace" type="button" class="borrar" value="Backspace"/>
			</div>
		</div>
	</div>
</body>
</html>