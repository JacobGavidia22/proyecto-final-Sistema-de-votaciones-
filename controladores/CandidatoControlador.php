<?php
class CandidatoControlador extends Candidato{
    public function guardarDatos($con,$objetoC){
        $variableSql = "INSERT INTO inscripcioncandidato ";
        $variableSql .= "(idCandidato,Nombres,Apellidos,DUICandidato,TipoCandidatura,";
        $variableSql .="Participacion,Departamento,Municipio,Foto)";
        $variableSql .= " VALUES(";
        $variableSql.="'".$objetoC[0]."',";
        $variableSql.="'".$objetoC[1]."',";
        $variableSql.="'".$objetoC[2]."',";
        $variableSql.="'".$objetoC[3]."',";
        $variableSql.="'".$objetoC[4]."',";
        $variableSql.="'".$objetoC[5]."',";
        $variableSql.="'".$objetoC[6]."',";
        $variableSql.="'".$objetoC[7]."',";
        $variableSql.="'".$objetoC[8]."');";
        //var_dump($variableSql);
        return consultaA($con, $variableSql);
    }

    public function modificarDatos($con,$objetoC) {
        $variableSql = "UPDATE inscripcioncandidato SET  ";
        $variableSql .= "Nombres = '".$objetoC[1]."'";
        $variableSql .= ",Apellidos = '".$objetoC[2]."'";
        $variableSql .= ",DUICandidato = '".$objetoC[3]."'";
        $variableSql .= ",TipoCandidatura = '".$objetoC[4]."'";
        $variableSql .= ",Participacion = '".$objetoC[5]."'";
        $variableSql .= ",Departamento = '".$objetoC[6]."'";
        $variableSql .= ",Municipio = '".$objetoC[7]."'";
        $variableSql .= ",Foto = '".$objetoC[8]."'";
        $variableSql .= "WHERE idCandidato = ".$objetoC[0].";";
        return consultaA($con, $variableSql);
  }
} 

?>