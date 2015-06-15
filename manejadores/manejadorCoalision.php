<?php
include '../clases/Coalision.php';
include '../controladores/CoalisionControlador.php';
include '../coneccion/coneccion.php';

$coalision = new CoalisionControlador();
@$accion=$_REQUEST['accion'];
switch ($accion) {
    case 'save':
        if (isset($_REQUEST['btnCoalision'])) {
            $coalision->setidCoalision('null');
            $coalision->setPartidouno($_REQUEST['txtpartidouno']);
            $coalision->setPartidodos($_REQUEST['txtpartidodos']);
            $coalision->setPartidotres($_REQUEST['txtpartidotres']);
            $coalision->setPartidocuatro($_REQUEST['txtpartidocuatro']);
            $coalision->setNombre($_REQUEST['txtCoalision']);
            $coalision->setTipo($_REQUEST['Tipo']);
            $coalision->setBandera($_REQUEST['Bandera']);

            $objetoP=array($coalision->getidCoalision(),
                            $coalision->getPartidouno(),
                            $coalision->getPartidodos(),
                            $coalision->getPartidotres(),
                            $coalision->getPartidocuatro(),
                            $coalision->getNombre(),
                            $coalision->getTipo(),
                            $coalision->getBandera());

            print $coalision->guardarDatos($con,$objetoP);
            header("Location:../paginas/Coalision.php?g=1");

        }else{
            header("Location:../paginas/Coalision.php?e=1");

        }
        break;
    case 'ac':

        if (isset($_REQUEST['btnCoalision'])) {
            $coalision->setidCoalision($_REQUEST['idCoalision']);
            $coalision->setPartidouno($_REQUEST['txtpartidouno']);
            $coalision->setPartidodos($_REQUEST['txtpartidodos']);
            $coalision->setPartidotres($_REQUEST['txtpartidotres']);
            $coalision->setPartidocuatro($_REQUEST['txtpartidocuatro']);
            $coalision->setNombre($_REQUEST['txtCoalision']);
            $coalision->setTipo($_REQUEST['Tipo']);
            $coalision->setBandera($_REQUEST['Bandera']);

            

            $objetoP=array($coalision->getidCoalision(),
                            $coalision->getPartidouno(),
                            $coalision->getPartidodos(),
                            $coalision->getPartidotres(),
                            $coalision->getPartidocuatro(),
                            $coalision->getNombre(),
                            $coalision->getTipo(),
                            $coalision->getBandera());

            print $coalision->modificarDatos($con,$objetoP);
            header("Location:../consultas/consultarcoalision.php?g=1");

        }else{
            header("Location:../consultas/consultarcoalision.php?e=1");

        }

        break;

        default:
        print 'No hay Accion que realizar';
        break;
}

?>
