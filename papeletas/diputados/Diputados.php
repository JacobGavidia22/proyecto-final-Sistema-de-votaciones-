<?php session_start();

    if (isset($_SESSION['Votante'])) {
?>

<!doctype html>
<html>

<head>
	<title>Papeleta de votaciones</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../mycss/estilo.css">
	<link rel="stylesheet" type="text/css" href="../../mycss/estiloInscripcionPar.css">
	<link rel="shortcut icon" type="image/x-icon" href="../../image/ic.ico">
	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>-->
	<!--<script src="js/jquery.min.js"></script>-->
	
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
		    <h1>Elecciones Diputados</h1><img class="ayuda" onClick ="alert('Dar un click en la bandera de su eleccion para poder votar')" src="../../image/ayuda.gif">
		</div>
	</header>

	<section class="papeletap">
		<!--<div id="ok" style="display: none;">
			<img src="img/ok.png" width="250" height="200" alt="ok"/>
		</div>-->

		<?php
		mysql_connect("127.0.0.1", "root", "") or die(mysql_error()) ;
		mysql_select_db("sistemavotaciones") or die(mysql_error()) ;

		$consulta = "SELECT * FROM `inscripcioncandidato` WHERE TipoCandidatura like'%Diputado%'";
		$resultado= @mysql_query($consulta) or die(mysql_error());

		while ($datos = @mysql_fetch_assoc($resultado) ){
			$ruta = "../../archivo/candidatos/" . $datos['Foto'];

			echo "<a href=".@$form."votos.php?idCandidato=".$datos['idCandidato']."><img class='presidente' src='$ruta' /></a>";
		}
		?>

		<!--<script src="js/script.js" type="text/javascript"></script>-->

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