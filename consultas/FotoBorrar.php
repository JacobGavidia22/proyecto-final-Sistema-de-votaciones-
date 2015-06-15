<?php session_start();

    if (isset($_SESSION['Usuario'])) {
?>

<?php
include '../coneccion/coneccion.php';

$sql="DELETE FROM fotocandidatos where idFoto=".$_REQUEST['Id'].";";
var_dump($sql);
print consultaA($con, $sql);
header("Location: consultarcandidato.php");
?>

<?php }else{
    header("Location: InicioSesion.php");
 }
 ?>