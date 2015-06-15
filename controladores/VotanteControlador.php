<?php
class VotanteControlador extends Votante{
    public function guardarDatos($con,$objetoV){
        $variableSql = "INSERT INTO registrovotantes ";
        $variableSql .= "(idVotantes,Nombres,Apellidos,DUI,Genero,";
        $variableSql .="FechaNacimiento,Direccion,Departamento,Municipio)";
        $variableSql .= " VALUES(";
        $variableSql.="'".$objetoV[0]."',";
        $variableSql.="'".$objetoV[1]."',";
        $variableSql.="'".$objetoV[2]."',";
        $variableSql.="'".$objetoV[3]."',";
        $variableSql.="'".$objetoV[4]."',";
        $variableSql.="'".$objetoV[5]."',";
        $variableSql.="'".$objetoV[6]."',";
        $variableSql.="'".$objetoV[7]."',";
        $variableSql.="'".$objetoV[8]."');";
        //var_dump($variableSql);
        return consultaA($con, $variableSql);
    }

    public function modificarDatos($con,$objetoV) {
        $variableSql = "UPDATE registrovotantes SET  ";
        $variableSql .= "Nombres = '".$objetoV[1]."'";
        $variableSql .= ",Apellidos = '".$objetoV[2]."'";
        $variableSql .= ",DUI = '".$objetoV[3]."'";
        $variableSql .= ",Genero = '".$objetoV[4]."'";
        $variableSql .= ",FechaNacimiento = '".$objetoV[5]."'";
        $variableSql .= ",Direccion = '".$objetoV[6]."'";
        $variableSql .= ",Departamento = '".$objetoV[7]."'";
        $variableSql .= ",Municipio = '".$objetoV[8]."'";
        $variableSql .= "WHERE idVotantes = ".$objetoV[0].";";
        return consultaA($con, $variableSql);
  }
} 

?>