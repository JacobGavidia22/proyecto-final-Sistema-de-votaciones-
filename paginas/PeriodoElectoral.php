<?php session_start();

    if (isset($_SESSION['Usuario'])) {
?>
<!DOCTYPE html>

<html lang="es">

<head>
	<meta charset="utf-8">
	<title>Periodo Electoral</title>
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
		        	<a href="../consultas/consultarperiodo.php">Registros</a>
		        	<a href="../sesion/cerrar.php">Cerrar Sesión</a>
		        </nav>
			</div>
	    </header>
	</div>

	<p>Periodo de Elección <img class="ayudau" onClick ="alert('Registrar un nuevo periodo electoral, esto es lo primero que se debe de tomar en cuenta. (Procure tener solo un unico periodo electoral osea el vigente)')" src="../image/ayuda.gif"></p>
	<table border="0px">
		<form method="post" action="../manejadores/manejadorPeriodo.php?accion=save" name="Eleccion">
			<tr>
				<td>
					<label>Tipo:</label>
				</td>
				<td>
					<select name="Eleccion" required="required">
						<option value="">Seleccionar</option>
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
					<input type="text" name="PeriodoE" required="required" placeholder="0000" maxlength="4">
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
         window.location='PeriodoElectoral.php';   
      
    }
    alert("Datos Almacenados Correctamente!!");
    setTimeout("redir3()",200);
}

if($_GET("e")!=null){
    
    function redir3(){
         window.location='PeriodoElectoral.php';   
      
    }
    alert("Error al Guardar los Datos!!");
    setTimeout("redir3()",200);
}

</script>

<?php }else{
    header("Location: InicioSesion.php");
 } ?>