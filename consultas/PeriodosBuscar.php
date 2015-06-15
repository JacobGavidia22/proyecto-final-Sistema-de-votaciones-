<?php session_start();

    if (isset($_SESSION['Usuario'])) {
?>

<?php
include '../coneccion/coneccion.php';
$sql ="SELECT * FROM periodo WHERE idPeriodo ='".$_REQUEST['idPeriodo']."';";
$datos= consultaD($con, $sql,3);
//var_dump($datos);
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<title>Modificar Registros</title>
	<link rel="stylesheet" type="text/css" href="../mycss/estilo.css">
	<link rel="stylesheet" type="text/css" href="../mycss/estiloInscripcionPar.css">
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
		        	<a href="../paginas/PeriodoElectoral.php.php">Inicio</a>
		        	
		        </nav>
			</div>
	    </header>
	</div>

	<p>Modificar Registros</p>

	<table border="0px">
		<form method="post" action="../manejadores/manejadorPeriodo.php?accion=ac" name="Eleccion">
			<input type="hidden" name="idPeriodo" value="<?php print $datos[0][0];?>">
			<tr>
				<td>
					<label>Tipo:</label>
				</td>
				<td>
					<select name="Eleccion" required="required">
						<?php echo '<option value="'.$datos[0][1].'">'.utf8_encode($datos[0][1]).'</option>';?>
						<option value="Alcaldes y Diputados">Alcaldes y Diputados</option>
						<option value="Presidenciales">Presidenciales</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<label>Año:</label>
				</td>
				<td>
					<input type="text" value="<?php print $datos[0][2]; ?>" name="PeriodoE" required="required" placeholder="0000" maxlength="4">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input name="btnEleccion" type="submit" class="btnEnviar" value="Guardar">
				</td>
			</tr>
		</form>
	</table>
	

	<footer>
		<strong>
			<p class="Yo2">&copy; Derechos Reservados Año 2015</p>
			<a href="http://www.tse.gob.sv"><p class="Yo3">Tribunal Supremo Electoral</p></a>
		</strong>
	</footer>
</body>

</html>



<?php }else{
    header("Location: ../paginas/InicioSesion.php");
 } ?>