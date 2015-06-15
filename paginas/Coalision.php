<?php session_start();

    if (isset($_SESSION['Usuario'])) {
?>

<?php include '../coneccion/coneccion.php'; ?>
<!DOCTYPE html>

<html lang="es">

<head>
	<meta charset="utf-8">
	<title>Formulario de Coalisión</title>
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
		        	<a href="Iniciotse.php">Inicio</a>
		        	<a href="../consultas/consultarcoalision.php">Registros</a>
		        	<a href="../sesion/cerrar.php">Cerrar Sesión</a>
		        </nav>
			</div>
	    </header>
	</div>

	<p>Coalisiones de Partidos <img class="ayudau" onClick ="alert('Primero suba la bandera de la coalisión  y  luego seleccionela y guarde su registro')" src="../image/ayuda.gif"></p>
	
	<table border="0px" class="izquierda">
		<form method="post" action="" enctype="multipart/form-data">
			<tr>
				<td>
					<label>Subir Bandera de Coalisión</label>
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
							$ruta = "../archivo/coalision/" . $_FILES['SelecBandera']['name'];
							if (!file_exists($ruta)){
								$resultado = @move_uploaded_file($_FILES["SelecBandera"]["tmp_name"], $ruta);
								if ($resultado){
									$nombre = $_FILES['SelecBandera']['name'];
									@mysql_query("INSERT INTO banderacoalision (Bandera) VALUES ('$nombre')");
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
<table border="0px" class="derecha">
	<form method="post" action="../manejadores/manejadorCoalision.php?accion=save" name="forCoalision" enctype="multipart/form-data">
		<tr>
			<td>
				<label1>Partido 1:</label1>
			</td>
			<td>
				<input name="txtpartidouno" type="text" required="required" maxlength="20" placeholder="Nombre partido 1">
			</td>
		</tr>
		<tr>
			<td>
				<label2>Partido 2:</label2>
			</td>
		    <td>
				<input name="txtpartidodos" type="text" required="required" maxlength="20" placeholder="Nombre partido 2">
			</td>
		</tr>

		<tr>
			<td>
				<label2>Partido 3:</label2>
			</td>
		    <td>
				<input name="txtpartidotres" type="text" required="required" maxlength="20" placeholder="Nombre partido 3">
			</td>
		</tr>

		<tr>
			<td>
				<label2>Partido 4:</label2>
			</td>
		    <td>
				<input name="txtpartidocuatro" type="text" required="required" maxlength="20" placeholder="Nombre partido 4">
			</td>
		</tr>
		<tr>
			<td>
				<label3>Nombre de la coalisión</label3>
			</td>
			<td>
				<input name="txtCoalision" type="text" required="required" maxlength="20" placeholder="Nombre de la coalisión">
			</td>
		</tr>
		<tr>
			<td>
				<label4>Tipo:</label4>
			</td>
			<td>
				<select name="Tipo" required="required">
					<option value="">Seleccionar</option>
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
					<option value="">seleccionar</option>
					<?php
                    $sql = "SELECT Bandera FROM banderacoalision;";
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
				<input name="btnCoalision" type="submit" class="btnEnviar" value="Guardar">
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
         window.location='Coalision.php';   
      
    }
    alert("Datos Almacenados Correctamente!!");
    setTimeout("redir3()",200);
}

if($_GET("e")!=null){
    
    function redir3(){
         window.location='Coalision.php';
      
    }
    alert("Error al Guardar los Datos!!");
    setTimeout("redir3()",200);
}

</script>

<?php }else{
    header("Location: InicioSesion.php");
 } ?>