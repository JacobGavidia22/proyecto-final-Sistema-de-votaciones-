<?php
include '../clases/Partido.php';
include '../controladores/PartidoControlador.php';
include '../coneccion/coneccion.php';

$partido= new PartidoControlador();
@$accion=$_REQUEST['accion'];

switch ($accion) {
    case 'save':
    @$dui=$_POST['DUIRepresentante'];

    $conexion=mysql_connect("127.0.0.1","root","")or die ('Ha fallado la conexión con el servidor: '.mysql_error());
    mysql_select_db("sistemavotaciones",$conexion)or die ('Error al seleccionar la Base de Datos: '.mysql_error());
    //para un dui repetido
    $nuevo_dui=mysql_query("SELECT * from inscripcionpartido where DUIRepresentante='$dui'");
    $dui_exist = mysql_num_rows($nuevo_dui);


    if ($dui_exist>0 ) {
        echo "<script type=\"text/javascript\">alert('El Numero de Dui $dui ya existe!!');window.location.assign('../paginas/InPartidos.php');</script>";
        
    }else{
        if (isset($_REQUEST['btnGuardarPartido'])) {
            $partido->setidPartidos('null');
            $partido->setNombrePartido($_REQUEST['NombrePartido']);
            $partido->setResponsable($_REQUEST['ResponsablePartido']);
            $partido->setDUIRepresentante($_REQUEST['DUIRepresentante']);
            $partido->setLinkBandera($_REQUEST['Bandera']);

            $objetoP=array($partido->getidPartidos(),
                            $partido->getNombrePartido(),
                            $partido->getResponsable(),
                            $partido->getDUIRepresentante(),
                            $partido->getLinkBandera());

            print $partido->guardarDatos($con,$objetoP);
            header("Location:../paginas/InPartidos.php?g=1");

        }else{
            header("Location:../paginas/InPartidos.php?e=1");

        }
    }
        break;
    case 'ac':
   
        if (isset($_REQUEST['btnGuardarPartido'])) {
            $partido->setidPartidos($_REQUEST['idPartidos']);
            $partido->setNombrePartido($_REQUEST['NombrePartido']);
            $partido->setResponsable($_REQUEST['ResponsablePartido']);
            $partido->setDUIRepresentante($_REQUEST['DUIRepresentante']);
            $partido->setLinkBandera($_REQUEST['Bandera']);

            $objetoP=array($partido->getidPartidos(), 
                            $partido->getNombrePartido(),
                            $partido->getResponsable(),
                            $partido->getDUIRepresentante(),
                            $partido->getLinkBandera());

            print $partido->modificarDatos($con,$objetoP);
            header("Location:../consultas/consultarpartido.php?g=1");

        }else{
            header("Location:../consultas/consultarpartido.php?e=1");

        }

        break;

        default:
        print 'No hay Accion que realizar';
        break;
}

?>
    