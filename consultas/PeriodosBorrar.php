<?php session_start();

    if (isset($_SESSION['Usuario'])) {
?>

<?php
include '../coneccion/coneccion.php';
include  '../clases/Periodo.php';
include '../controladores/PeriodoControlador.php';

$sql="DELETE FROM periodo where idPeriodo=".$_REQUEST['idPeriodo'].";";
print consultaA($con, $sql);
header("Location: consultarperiodo.php");
?>

<?php }else{
    header("Location: consultarperiodo.php");
 } ?>