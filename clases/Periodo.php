<?php
class Periodo{
    private $idPeriodo;
    private $Tipo;
    private $Periodo;

    public function getidPeriodo(){
        return $this->idPeriodo;
    }

    public function getTipo(){
        return $this->Tipo;
    }

     public function getPeriodo(){
        return $this->Periodo;
    }

    public function setidPeriodo($idPeriodo) {
        $this->idPeriodo = $idPeriodo;
    }

    public function setTipo($Tipo) {
        $this->Tipo = $Tipo;
    }

    public function setPeriodo($Periodo) {
        $this->Periodo = $Periodo;
    }

}

?>