<?php session_start();

    if (isset($_SESSION['Usuario'])) {
?>

<?php include '../coneccion/coneccion.php'; ?>
<?php $conexion = new mysqli('127.0.0.1', 'root', '', 'sistemavotaciones'); ?>


<!DOCTYPE html>

<html lang="es">

<head>
	<meta charset=utf-8>
	<title>Formulario de Inscripción de Candidatos</title>
	<script language="javascript" src="js/jquery.js"></script>
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
		        	<a href="Iniciotse.php">Inicio</a>
		        	<a href="../consultas/consultarcandidato.php">Registros</a>
		        	<a href="../sesion/cerrar.php">Cerrar Sesión</a>
		        </nav>
			</div>
	    </header>
	</div>

	<p>Incripción de Candidatos <img class="ayudau" onClick ="alert('Primero suba la foto del candidato del partido político y  luego seleccionela y guarde su registro')" src="../image/ayuda.gif"></p>
	<table border="0px" class="izquierda">
		<form method="post" action="" enctype="multipart/form-data">
			<tr>
				<td>
					<label>Subir Foto de candidato</label>
				</td>
			</tr>
			<tr>
				<td>
					<input type="file" name="SelecBandera" class="file" required="required">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="Subir" name="btnSubir" class="btnEnviar">
				</td>
			</tr>
			<tr>
				<td>
					<?php
					mysql_connect("127.0.0.1", "root", "") or die(mysql_error()) ;
					mysql_select_db("sistemavotaciones") or die(mysql_error()) ;

					if (@$_FILES["SelecBandera"]["error"] > 0){
						echo "Ha ocurrido un error!!";
					} else {
						$permitidos = array("image/jpg", "image/jpeg", "image/png");
						$limite_kb = 500;

						if (in_array(@$_FILES['SelecBandera']['type'], $permitidos) && $_FILES['SelecBandera']['size'] <= $limite_kb * 1024){
							$ruta = "../archivo/candidatos/" . $_FILES['SelecBandera']['name'];
							if (!file_exists($ruta)){
								$resultado = @move_uploaded_file($_FILES["SelecBandera"]["tmp_name"], $ruta);
								if ($resultado){
									$nombre = $_FILES['SelecBandera']['name'];
									@mysql_query("INSERT INTO fotocandidatos(Foto) VALUES ('$nombre')");
									echo "El archivo ha sido subido exitosamente";
								} else {
									echo "Ocurrio un error al subir el archivo.";
								}
							} else {
								echo $_FILES['SelecBandera']['name'] .", Este archivo ya existe,<br>Favor renombrarlo";
							}
						} else {
							echo "Formatos admitidos: .jpg, .png, .jpeg";
						}
					}
					?>
				</td>
			</tr>
		</form>
	</table>
	
	<table border="0x" class="derecha">
		<form method="post" action="../manejadores/manejadorCandidato.php?accion=save" name="forCandidatos" enctype="multipart/form-data">
			<tr>
				<td>
					<label2>Nombres:</label2>
				</td>
				<td>
					<input name="NombresCandidato" type="text" placeholder="Nombre Candidato" required="required" maxlength="35">
				</td>
			</tr>
			<tr>
				<td>
					<label1>Apellidos:</label1>
				</td>
				<td>
					<input name="ApellidosCandidato" type="text" placeholder="Apellido Candidato" required="required" maxlength="35">
				</td>
			</tr>
			<tr>
				<td>
					<label1>Dui del Candidato:</label1>
				</td>
				<td>
					<input onkeyup="mascara(this,'-',patron3,true)" name="DUICandidato" type="text" placeholder="00000000-0" required="required" maxlength="10">
				</td>
			</tr>
			<tr>
				<td>
					<label3>Tipo de Candidatura:</label3>
				</td>
				<td>
					<select name="TipoCandidato" required="required">
						<option value="">Seleccionar</option>
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
		        	    <option value="">Seleccionar</option>
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
						<option value="">Seleccionar</option>
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
						<option value="">Seleccionar</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					Su Foto:
				</td>
				<td colspan="2">
					<select name="Foto" required="required">
						<option value="">seleccionar</option>
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
					<input name="btnGuardarCandidato" type="submit" class="btnEnviar" value="Guardar">
				</td>
			</tr>
		</form>
		<script language="javascript">
		$(document).ready(function(){
			$("#depto").change(function () {
				$("#depto option:selected").each(function () {
					id_depto = $(this).val();
					$.post("municipios.php", { id_depto: id_depto }, function(data){
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

<script>
function $_GET(param){

/* Obtener la url completa */
url = document.URL;
/* Buscar a partir del signo de interrogación ? */
url = String(url.match(/\?+.+/));
/* limpiar la cadena quitándole el signo ? */
url = url.replace("?", "");
/* Crear un array con parametro=valor */
url = url.split("&");
x = 0;
while (x < url.length)
{
p = url[x].split("=");
if (p[0] == param)
{
return decodeURIComponent(p[1]);
}
x++;
}
}

if($_GET("g")!=null){
    
    function redir3(){
         window.location='InCandidatos.php';   
      
    }
    alert("Datos Almacenados Correctamente!!");
    setTimeout("redir3()",200);
}

if($_GET("e")!=null){
    
    function redir3(){
         window.location='InCandidatos.php';   
      
    }
    alert("Error al Guardar los Datos!!");
    setTimeout("redir3()",200);
}

</script>

<?php }else{
    header("Location: InicioSesion.php");
 } ?>