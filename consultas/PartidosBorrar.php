<?php session_start();

    if (isset($_SESSION['Usuario'])) {
?>

<?php
include '../coneccion/coneccion.php';
include  '../clases/Partido.php';
include '../controladores/PartidoControlador.php';

$sql="DELETE FROM inscripcionpartido where idPartidos=".$_REQUEST['idPartidos'].";";
print consultaA($con, $sql);
header("Location: consultarpartido.php");
?>

<?php }else{
    header("Location: InicioSesion.php");
 } ?>