<?php
class Coalision{
    private $idCoalision;
    private $Partidouno;
    private $Partidodos;
    private $Partidotres;
    private $Partidocuatro;
    private $Nombre;
    private $Tipo;
    private $Bandera;

    public function getidCoalision(){
        return $this->idCoalision;
    }

    public function getPartidouno(){
        return $this->Partidouno;
    }

    public function getPartidodos(){
        return $this->Partidodos;
    }

    public function getPartidotres(){
        return $this->Partidotres;
    }

    public function getPartidocuatro(){
        return $this->Partidocuatro;
    }

    public function getNombre(){
        return $this->Nombre;
    }

    public function getTipo(){
        return $this->Tipo;
    }

    public function getBandera(){
        return $this->Bandera;
    }


    public function setidCoalision($idCoalision) {
        $this->idCoalision = $idCoalision;
    }

    public function setPartidouno($Partidouno) {
        $this->Partidouno = $Partidouno;
    }

    public function setPartidodos($Partidodos) {
        $this->Partidodos = $Partidodos;
    }

    public function setPartidotres($Partidotres) {
        $this->Partidotres = $Partidotres;
    }

     public function setPartidocuatro($Partidocuatro) {
        $this->Partidocuatro = $Partidocuatro;
    }

    public function setNombre($Nombre) {
        $this->Nombre = $Nombre;
    }

    public function setTipo($Tipo) {
        $this->Tipo = $Tipo;
    }

    public function setBandera($Bandera) {
        $this->Bandera = $Bandera;
    }
}

?>
