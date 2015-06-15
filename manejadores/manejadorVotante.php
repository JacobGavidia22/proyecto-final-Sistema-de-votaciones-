<?php
include '../clases/Votante.php';
include '../controladores/VotanteControlador.php';
include '../coneccion/coneccion.php';

$votante = new VotanteControlador();
@$accion=$_REQUEST['accion'];
switch ($accion) {
    case 'save':
    @$dui=$_POST['txtDUI'];

    $conexion=mysql_connect("127.0.0.1","root","")or die ('Ha fallado la conexión con el servidor: '.mysql_error());
    mysql_select_db("sistemavotaciones",$conexion)or die ('Error al seleccionar la Base de Datos: '.mysql_error());
//para un dui repetido
    $nuevo_dui=mysql_query("SELECT * from registrovotantes where DUI='$dui'");
    $dui_exist = mysql_num_rows($nuevo_dui);


    if ($dui_exist>0) {
        echo "<script type=\"text/javascript\">alert('El Numero de Dui $dui ya existe!!');window.location.assign('../paginas/InVotantes.php');</script>";
    }else{
        if (isset($_REQUEST['btnGuardarVotantes'])) {
            $votante->setidVotantes('null');
            $votante->setNombres($_REQUEST['txtNombresVotante']);
            $votante->setApellidos($_REQUEST['txtapellidoVotante']);
            $votante->setDUI($_REQUEST['txtDUI']);
            $votante->setGenero($_REQUEST['Radgenero']);
            $votante->setFechaNacimiento($_REQUEST['FechaNac']);
            $votante->setDireccion($_REQUEST['Direccion']);
            $votante->setCodDepartamento($_REQUEST['depto']);
            $votante->setCodMunicipio($_REQUEST['municipio']);

            $objetoV=array($votante->getidVotantes(),
                            $votante->getNombres(),
                            $votante->getApellidos(),
                            $votante->getDUI(),
                            $votante->getGenero(),
                            $votante->getFechaNacimiento(),
                            $votante->getDireccion(),
                            $votante->getCodDepartamento(),
                            $votante->getCodMunicipio());


            print $votante->guardarDatos($con,$objetoV);
            header("Location:../paginas/InVotantes.php?g=1");

        }else{
            header("Location:../paginas/InVotantes.php?e=1");

        }
    }
        break;
    case 'ac':
           
        if (isset($_REQUEST['btnGuardarVotantes'])) {
            $votante->setidVotantes($_REQUEST['idVotantes']);
            $votante->setNombres($_REQUEST['txtNombresVotante']);
            $votante->setApellidos($_REQUEST['txtapellidoVotante']);
            $votante->setDUI($_REQUEST['txtDUI']);
            $votante->setGenero($_REQUEST['Radgenero']);
            $votante->setFechaNacimiento($_REQUEST['FechaNac']);
            $votante->setDireccion($_REQUEST['Direccion']);
            $votante->setCodDepartamento($_REQUEST['depto']);
            $votante->setCodMunicipio($_REQUEST['municipio']);

            $objetoV=array($votante->getidVotantes(),
                            $votante->getNombres(),
                            $votante->getApellidos(),
                            $votante->getDUI(),
                            $votante->getGenero(),
                            $votante->getFechaNacimiento(),
                            $votante->getDireccion(),
                            $votante->getCodDepartamento(),
                            $votante->getCodMunicipio());

            print $votante->modificarDatos($con,$objetoV);
            header("Location:../consultas/consultarvotante.php?g=1");

        }else{
            header("Location:../consultas/consultarvotante.php?e=1");

        }

        break;

        default:
        print 'No hay Accion que realizar';
        break;
}
?>
    