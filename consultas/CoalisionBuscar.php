<?php session_start();

    if (isset($_SESSION['Usuario'])) {
?>

<?php
include '../coneccion/coneccion.php';
$sql ="SELECT * FROM coalision WHERE idCoalision ='".$_REQUEST['idCoalision']."';";
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
		        	<a href="../paginas/Coalision.php">Inicio</a>
		        	
		        </nav>
			</div>
	    </header>
	</div>

	<p>Modificar Registros</p>

	<table border="0px">
	<form method="post" action="../manejadores/manejadorCoalision.php?accion=ac" name="forCoalision">
		<input type="hidden" name="idCoalision" value="<?php print $datos[0][0];?>">
		<tr>
			<td>
				<label1>Partido 1:</label1>
			</td>
			<td>
				<input name="txtpartidouno" value="<?php print $datos[0][1]; ?>" type="text" required="required" maxlength="20" placeholder="Nombre partido 1">
			</td>
		</tr>
		<tr>
			<td>
				<label2>Partido 2:</label2>
			</td>
		    <td>
				<input name="txtpartidodos" value="<?php print $datos[0][2]; ?>" type="text" required="required" maxlength="20" placeholder="Nombre partido 2">
			</td>
		</tr>
		<tr>
			<td>
				<label2>Partido 3:</label2>
			</td>
		    <td>
				<input name="txtpartidotres" value="<?php print $datos[0][3]; ?>" type="text" required="required" maxlength="20" placeholder="Nombre partido 3">
			</td>
		</tr>

		<tr>
			<td>
				<label2>Partido 4:</label2>
			</td>
		    <td>
				<input name="txtpartidocuatro" value="<?php print $datos[0][4]; ?>"  type="text" required="required" maxlength="20" placeholder="Nombre partido 4">
			</td>
		</tr>
		<tr>
			<td>
				<label3>Nombre de la coalisión</label3>
			</td>
			<td>
				<input name="txtCoalision" value="<?php print $datos[0][5]; ?>" type="text" required="required" maxlength="20" placeholder="Nombre de la coalisión">
			</td>
		</tr>
		<tr>
			<td>
				<label4>Tipo:</label4>
			</td>
			<td>
				<select name="Tipo" required="required">
					<?php echo '<option value="'.$datos[0][6].'">'.utf8_encode($datos[0][6]).'</option>';?>
					<option value="Alcaldes">Alcaldes</option>
					<option value="Diputados">Diputados</option>
					<option value="Presidentes">Presidentes</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
			    <label3>Su Bandera:</label3><br>
		    </td>
		    <td>
		    	<select name="Bandera" required="required">
					<?php echo '<option value="'.$datos[0][7].'">'.utf8_encode($datos[0][7]).'</option>';?>
					<?php
                        $sql = "SELECT Bandera FROM coalision;";
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
				<input name="btnCoalision" type="submit" class="btnEnviar" value="Actualizar">
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