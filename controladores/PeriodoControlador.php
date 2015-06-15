<?php
class PeriodoControlador extends Periodo{
    public function guardarDatos($con,$objetoP){
        $variableSql = "INSERT INTO periodo ";
        $variableSql .= "(idPeriodo,Tipo,Periodo)";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objetoP[0]."',";
        $variableSql.="'".$objetoP[1]."',";
        $variableSql.="'".$objetoP[2]."');";

        return consultaA($con, $variableSql);
    }

    public function modificarDatos($con,$objetoP) {
        $variableSql = "UPDATE periodo SET  ";
        $variableSql .= "Tipo = '".$objetoP[1]."'";
        $variableSql .= ",Periodo = '".$objetoP[2]."'";
        $variableSql .= "WHERE idPeriodo = ".$objetoP[0].";";
        return consultaA($con, $variableSql);
  }
} 

?>