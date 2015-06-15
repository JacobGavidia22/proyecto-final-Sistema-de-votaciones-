<?php session_start();

    if (isset($_SESSION['Usuario'])) {
?>

<?php
include '../coneccion/coneccion.php';
@$sql ="SELECT * FROM inscripcionpartido WHERE idPartidos ='".$_REQUEST['idPartidos']."';";
@$datos= consultaD($con, $sql,3);
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
		        	<a href="../paginas/InPartidos.php">Inicio</a>
		        	
		        </nav>
			</div>
	    </header>
	</div>

	<p>Modificar Registros</p>

	<table border="0px">
		<form method="post" action="../manejadores/manejadorPartidos.php?accion=ac" name="forPartidos">
			<input type="hidden" name="idPartidos" value="<?php print $datos[0][0];?>">
			<tr>
				<td>
					<label1>Nombre:</label1><br>
				</td>
				<td>
					<input name="NombrePartido" value="<?php print $datos[0][1]; ?>" type="text" class="" placeholder="Nombre del Partido" required="required" maxlength="35"><br>
				</td>
			</tr>
			
			<tr>
				<td>
					<label2>Representante:</label2><br>
				</td>
				<td>
					<input name="ResponsablePartido" value="<?php print $datos[0][2]; ?>" type="text" class="" placeholder="Representante Legal" required="required" maxlength="35"><br>
				</td>
			</tr>
			<tr>
				<td>
					<label1>Dui:</label1><br>
				</td>
				<td>
					<input onkeyup="mascara(this,'-',patron3,true)" name="DUIRepresentante" value="<?php print $datos[0][3]; ?>" type="text" class="" placeholder="00000000-0" required="required" maxlength="10"><br>
				</td>
			</tr>
			<tr>
				<td>
				    <label3>Su Bandera:</label3><br>
			    </td>
				<td>
					<select name="Bandera" required="required">
						<?php echo '<option value="'.$datos[0][4].'">'.utf8_encode($datos[0][4]).'</option>';?>
						<?php
                            $sql = "SELECT Bandera FROM banderapartidos;";
                            $datos = consultaD($con, $sql);
                            foreach ($datos as $value) {
                                print "<option value='";
                                print $value['Bandera'];
                                print "'>";
                                print $value['Bandera'];
                                print "</option>";
                            }                
                        ?>
					</select>
				</td>
			</tr>
			
			<tr>
				<td colspan="2">
					<input name="btnGuardarPartido" type="submit" class="btnEnviar" value="Actualizar">
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