<?php session_start();

    if (isset($_SESSION['Usuario'])) {
?>

<?php
include '../coneccion/coneccion.php';

$sql="DELETE FROM banderapartidos where idBandera=".$_REQUEST['Id'].";";
var_dump($sql);
print consultaA($con, $sql);
header("Location: consultarpartido.php");
?>

<?php }else{
    header("Location: InicioSesion.php");
 } ?>