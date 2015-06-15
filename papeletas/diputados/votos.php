<?php
	// Recibimos la ID del vinculo desde la URL
	$idCandidato = $_REQUEST['idCandidato'];
	
	mysql_connect("127.0.0.1", "root", "") or die(mysql_error());
	mysql_select_db("sistemavotaciones") or die(mysql_error());

	// Incrementamos en 1 el contador del link con la ID especificada en la url

	$update = "UPDATE inscripcioncandidato SET Votos=(Votos + 1) WHERE idCandidato='$idCandidato'";
	mysql_query($update) or die (mysql_error());

	if ($update) {
		header("location: Ok.php");
		echo "Gracias por Votar!!";
	}else{
		echo "Ocurrio un error inesperado!!";
	}
?>
