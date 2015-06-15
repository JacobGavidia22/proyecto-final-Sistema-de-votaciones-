<?php
session_start();
$con = mysqli_connect('127.0.0.1','root','') or die(mysql_error());

if(isset($_POST['pwd']) && !empty($_POST['pwd']))
{
    $dui=$_POST['pwd'];
    $sql="select * from sistemavotaciones.registrovotantes where DUI='$dui'";

    $result=mysqli_query($con,$sql) 
    or die("Ocurrio un error al hacer la consulta");


    $row=mysqli_fetch_array($result);
    if($row){
        $_SESSION['Votante'] = $row;

        //periodo electoral

        $presidentes="Presidenciales";
        $AlcaldesDiputados='Alcaldes y Diputados';


        $conexion=mysql_connect("127.0.0.1","root","")or die ('Ha fallado la conexión con el servidor: '.mysql_error());
        mysql_select_db("sistemavotaciones",$conexion)or die ('Error al seleccionar la Base de Datos: '.mysql_error());

        $nuevo=mysql_query("SELECT * from periodo where Tipo='$presidentes'");
        $periodo = mysql_num_rows($nuevo);
        if ($periodo>0) {

            ?>
            <script type="text/javascript">
             window.location = "../papeletas/presidentes/Presidentes.php";
            </script>
            <?php 
        }else{
            $nuevo=mysql_query("SELECT * from periodo where Tipo='$AlcaldesDiputados'");
            $periodo = mysql_num_rows($nuevo);
            if ($periodo>0) {

                ?>
                <script type="text/javascript">
                 window.location = "../papeletas/diputados/Diputados.php";
                </script>
                <?php 
            }else{
                echo "<script type=\"text/javascript\">alert('No existe periodo electoral vigente o el administrador aun no habilita el sistema.!!');window.location.assign('cerrarDui.php');</script>";
            }
        }

    }else
    {
        echo "<script type=\"text/javascript\">alert('El DUI ingresado es incorrecto!!');window.location.assign('../Index.php');</script>";
    }
}
else
    echo "<center>Algun campo esta vacio o no estas autorizado para ver esta pagina</center>";
?>