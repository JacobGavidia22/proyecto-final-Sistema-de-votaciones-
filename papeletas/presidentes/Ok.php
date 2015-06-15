<?php session_start();

    if (isset($_SESSION['Votante'])) {
?>

<!doctype html>
<html>
<head>
	<title>Papeleta de votaciónes</title>
	<meta charset="utf-8">
	<META HTTP-EQUIV="REFRESH" CONTENT="2;URL=../../sesion/cerrarDui.php">
	<link rel="stylesheet" type="text/css" href="../../mycss/estilo.css">
	<link rel="stylesheet" type="text/css" href="../../mycss/estiloInscripcionPar.css">
	<link rel="shortcut icon" type="image/x-icon" href="../../image/ic.ico">
	
	<!--<script language="javascript" type="text/javascript">
		window.history.forward(1);
	</script>-->
	<script type="text/javascript">
	function retroceder(){
		window.location.hash="no-back-button";
		window.location.hash="Again-No-back-button";
		window.onhashchange=function(){window.location.hash="no-back-button";}
	}
	</script>
</head>

<body onload="retroceder();">
	<header>
		<div class="centra">
			<div class="logo">
				<img src="../../image/tse2.png" alt="Logo">
		    </div>
		    <div class="logo2">
		        <img src="../../image/12.png" alt="Logo">
		    </div>
		    <h1>¡¡Gracias por Votar!!</h1>
		</div>
	</header>

	<section class="ok">

		<figure>
			<img class="ok" src="img/ok.png" alt="Ok">
		</figure>

	</section>

	<footer>
		<strong>
			<p class="Yo2">&copy; Derechos Reservados Año 2015</p>
			<p class="Yo3">Tribunal Supremo Electoral</p>
		</strong>
	</footer>
</body>
</html>

<?php }else{
    header("Location: ../../Index.php");
 }
 ?>