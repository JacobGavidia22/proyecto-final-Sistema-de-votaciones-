<?php session_start();

    if (isset($_SESSION['Usuario'])) {
?>

<?php
include '../coneccion/coneccion.php';

$sql ="SELECT * FROM inscripcioncandidato WHERE idCandidato ='".$_REQUEST['idCandidato']."';";
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
		        	<a href="../paginas/InCandidatos.php">Inicio</a>
		        	
		        </nav>
			</div>
	    </header>
	</div>

	<p>Modificar Registros</p>

	<table border="0x">
		<form method="post" action="../manejadores/manejadorCandidato.php?accion=ac" name="forCandidatos">
			<input type="hidden" name="idCandidato" value="<?php print $datos[0][0];?>">
			<tr>
				<td>
					<label2>Nombres:</label2>
				</td>
				<td>
					<input name="NombresCandidato" value="<?php print $datos[0][1]; ?>" type="text" placeholder="Nombre Candidato" required="required" maxlength="35">
				</td>
			</tr>
			<tr>
				<td>
					<label1>Apellidos:</label1>
				</td>
				<td>
					<input name="ApellidosCandidato" value="<?php print $datos[0][2]; ?>" type="text" placeholder="Apellido Candidato" required="required" maxlength="35">
				</td>
			</tr>
			<tr>
				<td>
					<label1>Dui del Candidato:</label1>
				</td>
				<td>
					<input  onkeyup="mascara(this,'-',patron3,true)" name="DUICandidato" value="<?php print $datos[0][3]; ?>" type="text" placeholder="00000000-0" required="required" maxlength="10">
				</td>
			</tr>
			<tr>
				<td>
					<label3>Tipo de Candidatura:</label3>
				</td>
				<td>
					<select name="TipoCandidato" required="required">
						<?php echo '<option value="'.$datos[0][4].'">'.utf8_encode($datos[0][4]).'</option>';?>
						<option value="Alcalde">Alcalde</option>
						<option value="Diputado">Diputado</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<label6>Participación</label6>
				</td>
				<td>
					<select name="Participacion" required="required">
						<?php echo '<option value="'.$datos[0][5].'">'.utf8_encode($datos[0][5]).'</option>';?>
		        	    <option value="Partidaria">Partidaria</option>
		        	    <option value="No Partidaria">No Partidaria</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<label4>Departamento:</label4>
				</td>
				<td>
					<select name="depto" id="depto" required="required">
						<?php echo '<option value="'.$datos[0][6].'">'.utf8_encode($datos[0][6]).'</option>';?>
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
					<label5>Municipio:</label5>
				</td>
				<td>
					<select name="municipio" id="municipio" required="required">
						<?php echo '<option value="'.$datos[0][7].'">'.utf8_encode($datos[0][7]).'</option>';?>

					</select>
				</td>
			<tr>
				<td>
				    <label3>Su Bandera:</label3><br>
			    </td>
				<td>
					<select name="Foto" required="required">
						<?php echo '<option value="'.$datos[0][8].'">'.utf8_encode($datos[0][8]).'</option>';?>
						<?php
                            $sql = "SELECT Foto FROM fotocandidatos;";
                            $datos = consultaD($con, $sql);
                            foreach ($datos as $value) {
                                print "<option value='";
                                print $value['Foto'];
                                print "'>";
                                print $value['Foto'];
                                print "</option>";
                            }                
                        ?>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input name="btnGuardarCandidato" type="submit" class="btnEnviar" value="Actualizar">
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