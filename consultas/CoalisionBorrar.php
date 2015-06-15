<?php session_start();

    if (isset($_SESSION['Usuario'])) {
?>

<?php
include '../coneccion/coneccion.php';
include  '../clases/Coalision.php';
include '../controladores/CoalisionControlador.php';

$sql="DELETE FROM coalision where idCoalision=".$_REQUEST['idCoalision'].";";
print consultaA($con, $sql);
header("Location: consultarcoalision.php");
?>

<?php }else{
    header("Location: InicioSesion.php");
 } ?>