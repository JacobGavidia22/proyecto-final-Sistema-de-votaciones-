<?php session_start();

    if (isset($_SESSION['Usuario'])) {
?>

<?php
include '../coneccion/coneccion.php';

$sql ="SELECT * FROM registrovotantes WHERE idVotantes ='".$_REQUEST['idVotantes']."';";
$datos= consultaD($con, $sql,3);
//var_dump($datos);
?>
<?php $conexion = new mysqli('127.0.0.1', 'root', '', 'sistemavotaciones'); ?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<title>Modificar Registros</title>
	<script language="javascript" src="../paginas/js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="../mycss/estilo.css">
	<link rel="stylesheet" type="text/css" href="../mycss/estiloInscripcionPar.css">
	<link rel="shortcut icon" type="image/x-icon" href="../image/ic.ico">
	<script type="text/javascript" src="../mycss/Js/mijs.js"></script>
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
		        	<a href="../paginas/InVotantes.php">Inicio</a>
		        	
		        </nav>
			</div>
	    </header>
	</div>

	<p>Modificar Registros</p>
	<table border="0x">
		<form method="post" action="../manejadores/manejadorVotante.php?accion=ac" name="forVotantes">
			<input type="hidden" name="idVotantes" value="<?php print $datos[0][0];?>">
			<tr>
				<td>
					<label3>Nombres:</label3>
				</td>
				<td>
					<input name="txtNombresVotante" value="<?php print $datos[0][1]; ?>" type="text" placeholder="Nombres del Votante" required="required" maxlength="35">
				</td>
			</tr>
			<tr>
				<td>
					<label2>Apellido:</label2>
				</td>
				<td>
					<input name="txtapellidoVotante" value="<?php print $datos[0][2]; ?>"  type="text" placeholder="Apellidos del Votante" required="required" maxlength="35">
				</td>
			</tr>
			<tr>
				<td>
					<label1>DUI:</label1>
				</td>
				<td>
					<input onkeyup="mascara(this,'-',patron3,true)" name="txtDUI" value="<?php print $datos[0][3]; ?>" type="text" placeholder="00000000-0" required="required" maxlength="10">
				</td>
			</tr>
			<tr>
				<td>
					<label5>Género:</label5>
				</td>
				<td>
					<select name="Radgenero" required="required">
						<?php echo '<option value="'.$datos[0][4].'">'.utf8_encode($datos[0][4]).'</option>';?>
						<option value="Femenino">Femenino</option>
						<option value="Masculino">Masculino</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<label6>Fecha de nacimiento:</label6>
				</td>
				<td>
					<input name="FechaNac" value="<?php print $datos[0][5]; ?>" type="date" required="required">
				</td>
			</tr>
			<tr>
				<td>
					<label7>Dirección:</label7>
				</td>
				<td>
					<input type="text" value="<?php print $datos[0][6]; ?>" name="Direccion" placeholder="Dirección del Votante" required="required" maxlength="50">
				</td>
			</tr>
			<tr>
				<td>
					<label8>Departamento:</label8>
				</td>
				<td>
					<select name="depto" id="depto" required="required">
					 	<?php echo '<option value="'.$datos[0][7].'">'.utf8_encode($datos[0][7]).'</option>';?>

						<?php
						$result = $conexion->query("SELECT * FROM departamento");
						if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
							echo '<option value="'.$row['codigo'].'">'.utf8_encode($row['nombre']).'</option>';
						}
						}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<label9>Municipio:</label9>
				</td>
				<td>
					<select name="municipio" id="municipio" required="required">
						<?php echo '<option value="'.$datos[0][8].'">'.utf8_encode($datos[0][8]).'</option>';?>	
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input name="btnGuardarVotantes" type="submit" class="btnEnviar" value="Actualizar">
				</td>
			</tr>
		</form>
		<script language="javascript">
		$(document).ready(function(){
			$("#depto").change(function () {
				$("#depto option:selected").each(function () {
					id_depto = $(this).val();
					$.post("../paginas/municipios.php", { id_depto: id_depto }, function(data){
						$("#municipio").html(data);
					});
				});
			})
		});
		</script>
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