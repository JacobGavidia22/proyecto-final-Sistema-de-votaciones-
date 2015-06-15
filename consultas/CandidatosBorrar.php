<?php session_start();

    if (isset($_SESSION['Usuario'])) {
?>

<?php
include '../coneccion/coneccion.php';
include  '../clases/Candidato.php';
include '../controladores/CandidatoControlador.php';

$sql="DELETE FROM inscripcioncandidato where idCandidato=".$_REQUEST['idCandidato'].";";
print consultaA($con, $sql);
header("Location: consultarcandidato.php");
?>

<?php }else{
    header("Location: InicioSesion.php");
 } ?>