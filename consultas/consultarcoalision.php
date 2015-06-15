<?php session_start();

    if (isset($_SESSION['Usuario'])) {
?>

<?php include '../coneccion/coneccion.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<title>Registros de Coalisiones</title>
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

	<section>
		<p>Registro de las Coalisiones</p>
		<br>

		<?php

		$sql = 'SELECT idCoalision, Partidouno as Primero,Partidodos as Segundo,Partidotres as Tercero, Partidocuatro as Cuarto, Nombre, Tipo, Bandera FROM coalision';
		$datoss =  consultaD($con, $sql);
		print imprimetablaCo($datoss,"Coalision","table table-bordered table-striped","table",1);
		?>

		<br>

		<p>Votos Registrados</p>
		<?php

		$sql = 'SELECT idCoalision as Id, Bandera, Votos  FROM banderacoalision';
		$datoss =  consultaD($con, $sql);
		print imprimetablafotocoalision($datoss,"BanderaC","table table-bordered table-striped","table",1);
		
		?>
	</section>
	

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
         window.location='consultarcoalision.php';   
      
    }
    alert("Datos Actualizados Correctamente");
    setTimeout("redir3()",200);
}

if($_GET("e")!=null){
    
    function redir3(){
         window.location='consultarcoalision.php';
    }

    alert("Error al Actualizar los Datos");
    setTimeout("redir3()",200);
}


</script>

<?php }else{
    header("Location: ../paginas/InicioSesion.php");
 } ?>