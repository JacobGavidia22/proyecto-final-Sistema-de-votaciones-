<?php
include '../clases/Periodo.php';
include '../controladores/PeriodoControlador.php';
include '../coneccion/coneccion.php';

$periodo= new PeriodoControlador();
@$accion=$_REQUEST['accion'];
switch ($accion) {
    case 'save':
        if (isset($_REQUEST['btnEleccion'])) {
            $periodo->setidPeriodo('null');
            $periodo->setTipo($_REQUEST['Eleccion']);
            $periodo->setPeriodo($_REQUEST['PeriodoE']);

            $objetoP=array($periodo->getidPeriodo(),
                            $periodo->getTipo(),
                            $periodo->getPeriodo());

            print $periodo->guardarDatos($con,$objetoP);
            header("Location:../paginas/PeriodoElectoral.php?g=1");

        }else{
            header("Location:../paginas/PeriodoElectoral.php?e=1");

        }
        break;
    case 'ac':

        if (isset($_REQUEST['btnEleccion'])) {
            $periodo->setidPeriodo($_REQUEST['idPeriodo']);
            $periodo->setTipo($_REQUEST['Eleccion']);
            $periodo->setPeriodo($_REQUEST['PeriodoE']);

            $objetoP=array($periodo->getidPeriodo(), 
                            $periodo->getTipo(),
                            $periodo->getPeriodo());

            print $periodo->modificarDatos($con,$objetoP);
            header("Location:../consultas/consultarperiodo.php?g=1");

        }else{
            header("Location:../consultas/consultarperiodo.php?e=1");

        }

        break;

        default:
        print 'No hay Accion que realizar';
        break;
}

?>