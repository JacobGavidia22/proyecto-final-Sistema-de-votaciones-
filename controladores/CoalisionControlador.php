<?php
class CoalisionControlador extends Coalision{
    public function guardarDatos($con,$objetoP){
        $variableSql = "INSERT INTO coalision ";
        $variableSql .= "(idCoalision,Partidouno,Partidodos,Partidotres,Partidocuatro,Nombre,";
        $variableSql .= "Tipo, Bandera) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objetoP[0]."',";
        $variableSql.="'".$objetoP[1]."',";
        $variableSql.="'".$objetoP[2]."',";
        $variableSql.="'".$objetoP[3]."',";
        $variableSql.="'".$objetoP[4]."',";
        $variableSql.="'".$objetoP[5]."',";
        $variableSql.="'".$objetoP[6]."',";
        $variableSql.="'".$objetoP[7]."');";
        //var_dump($variableSql);
        return consultaA($con, $variableSql);
    }

    public function modificarDatos($con,$objetoP) {
        $variableSql = "UPDATE coalision SET  ";
        $variableSql .= "Partidouno = '".$objetoP[1]."'";
        $variableSql .= ",Partidodos = '".$objetoP[2]."'";
        $variableSql .= ",Partidotres= '".$objetoP[3]."'";
        $variableSql .= ",Partidocuatro= '".$objetoP[4]."'";
        $variableSql .= ",Nombre= '".$objetoP[5]."'";
        $variableSql .= ",Tipo= '".$objetoP[6]."'";
        $variableSql .= ",Bandera= '".$objetoP[7]."'";
        $variableSql .= "WHERE idCoalision= ".$objetoP[0].";";
        return consultaA($con, $variableSql);
  }
} 

?>