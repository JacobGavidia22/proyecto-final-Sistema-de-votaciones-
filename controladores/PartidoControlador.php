<?php
class PartidoControlador extends Partido{
    public function guardarDatos($con,$objetoP){
        $variableSql = "INSERT INTO inscripcionpartido ";
        $variableSql .= "(idPartidos,NombrePartido,Responsable,";
        $variableSql .= "DUIRepresentante,Bandera) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objetoP[0]."',";
        $variableSql.="'".$objetoP[1]."',";
        $variableSql.="'".$objetoP[2]."',";
        $variableSql.="'".$objetoP[3]."',";
        $variableSql.="'".$objetoP[4]."');";

        return consultaA($con, $variableSql);
    }

    public function modificarDatos($con,$objetoP) {
        $variableSql = "UPDATE inscripcionpartido SET  ";
        $variableSql .= "NombrePartido = '".$objetoP[1]."'";
        $variableSql .= ",Responsable = '".$objetoP[2]."'";
        $variableSql .= ",DUIRepresentante = '".$objetoP[3]."'";
        $variableSql .= ",Bandera = '".$objetoP[4]."'";
        $variableSql .= "WHERE idPartidos = ".$objetoP[0].";";
        return consultaA($con, $variableSql);
  }
} 

?>