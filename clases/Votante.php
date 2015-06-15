<?php
class Votante{
    private $idVotantes;
    private $Nombres;
    private $Apellidos;
    private $DUI;
    private $Genero;
    private $FechaNacimiento;
    private $Direccion;
    private $CodDepartamento;
    private $CodMunicipio;

    public function getidVotantes(){
        return $this->idVotantes;
    }

    public function getNombres(){
    	return $this->Nombres;
    }

    public function getApellidos(){
    	return $this->Apellidos;
    }

    public function getDUI(){
    	return $this->DUI;
    }

    public function getGenero(){
    	return $this->Genero;
    }

    public function getFechaNacimiento(){
    	return $this->FechaNacimiento;
    }

    public function getDireccion(){
    	return $this->Direccion;
    }

    public function getCodDepartamento(){
    	return $this->CodDepartamento;
    }

    public function getCodMunicipio(){
    	return $this->CodMunicipio;
    }



    public function setidVotantes($idVotantes){
        $this->idVotantes = $idVotantes;
    }

    public function setNombres($Nombres){
    	$this->Nombres = $Nombres;
    }

    public function setApellidos($Apellidos){
    	$this->Apellidos = $Apellidos;
    }

    public function setDUI($DUI){
    	$this->DUI = $DUI;
    }

    public function setGenero($Genero){
    	$this->Genero = $Genero;
    }

    public function setFechaNacimiento($FechaNacimiento){
    	$this->FechaNacimiento = $FechaNacimiento;
    }

    public function setDireccion($Direccion){
    	$this->Direccion = $Direccion;
    }

    public function setCodDepartamento($CodDepartamento){
    	$this->CodDepartamento = $CodDepartamento;
    }

    public function setCodMunicipio($CodMunicipio){
    	$this->CodMunicipio = $CodMunicipio;
    }

}

?>