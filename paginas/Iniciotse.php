<?php session_start();
    if (isset($_SESSION['Usuario'])) {
?>

<!DOCTYPE html>

<html lang="es">

<head>
	<meta charset=utf-8>
	<title>Administrador de Sistema de votación</title>
	<link rel="stylesheet" type="text/css" href="../mycss/estilo.css">
	<link rel="stylesheet" type="text/css" href="../mycss/EstiloUno.css">
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
			</div>
	    </header>

	    <section>
	    	<div id="menu">
	    		<ul>
	    			<li><a href="Iniciotse.php">Inicio</a></li>
	    			<li><a href="PeriodoElectoral.php">Periodo Electoral</a></li>
		 			<li><a href="InPartidos.php">Inscripción Partidos</a></li>
		 			<li><a href="InCandidatos.php">Inscripción Candidatos</a></li>
		 			<li><a href="InVotantes.php">Inscripción Votantes</a></li>
		 			<li><a href="Coalision.php">Inscripción de Coalisión</a></li>
		 			<li><a href="../sesion/cerrar.php">Cerrar Sesión</a></li>
		 		</ul>
		 	</div>
	    </section>

	 </body>

<footer>
	<strong>
		<p class="Yo2">&copy; Derechos Reservados Año 2015</p>
		<a href="http://www.tse.gob.sv"><p class="Yo3">Tribunal Supremo Electoral</p></a>
	</strong>
	
</footer>
</html>

<?php }else{
    header("Location: InicioSesion.php");
 } ?>
