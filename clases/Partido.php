<?php
class Partido{
    private $idPartidos;
    private $NombrePartido;
    private $Responsable;
    private $DUIRepresentante;
    private $LinkBandera;
    
    public function getidPartidos() {
        return $this->idPartidos;
    }

    public function getNombrePartido() {
    return $this->NombrePartido;
    }

    public function getResponsable() {
    return $this->Responsable;
    }

    public function getDUIRepresentante() {
    return $this->DUIRepresentante;
    }

    public function getLinkBandera() {
    return $this->LinkBandera;
    }



    public function setidPartidos($idPartidos) {
        $this->idPartidos = $idPartidos;
    }

    public function setNombrePartido($NombrePartido) {
        $this->NombrePartido = $NombrePartido;
    }

    
    public function setResponsable($Responsable) {
        $this->Responsable = $Responsable;
    }

    public function setDUIRepresentante($DUIRepresentante) {
        $this->DUIRepresentante = $DUIRepresentante;
    }

     public function setLinkBandera($LinkBandera) {
        $this->LinkBandera = $LinkBandera;
    }
   
}

?>