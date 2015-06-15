<?php session_start();

    if (isset($_SESSION['Usuario'])) {
?>

<?php
include '../coneccion/coneccion.php';
include  '../clases/Votante.php';
include '../controladores/VotanteControlador.php';

$sql="DELETE FROM registrovotantes where idVotantes=".$_REQUEST['idVotantes'].";";
print consultaA($con, $sql);
header("Location: consultarvotante.php");
?>

<?php }else{
    header("Location: InicioSesion.php");
 } ?>