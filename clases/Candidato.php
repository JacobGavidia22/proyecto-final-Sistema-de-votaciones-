<?php
class Candidato{
    private $idCandidato;
    private $Nombres;
    private $Apellidos;
    private $DUICandidato;
    private $CodTipoCandidatura;
    private $CodParticipacion;
    private $CodDepartamento;
    private $CodMunicipio;
    private $Foto;
    
    public function getidCandidato() {
        return $this->idCandidato;
    }

    public function getNombres() {
        return $this->Nombres;
    }

    public function getApellidos() {
        return $this->Apellidos;
    }

    public function getDUICandidato() {
        return $this->DUICandidato;
    }

    public function getCodTipoCandidatura(){
        return $this->CodTipoCandidatura;
    }

    public function getCodParticipacion(){
        return $this->CodParticipacion;
    }

    public function getCodDepartamento(){
        return $this->CodDepartamento;
    }

    public function getCodMunicipio(){
        return $this->CodMunicipio;
    }

    public function getFoto(){
        return $this->Foto;
    }

    public function setidCandidato($idCandidato) {
        $this->idCandidato = $idCandidato;
    }

    public function setNombres($Nombres) {
        $this->Nombres = $Nombres;
    }

    public function setApellidos($Apellidos) {
        $this->Apellidos = $Apellidos;
    }

    public function setDUICandidato($DUICandidato) {
        $this->DUICandidato = $DUICandidato;
    }

    public function setCodTipoCandidatura($CodTipoCandidatura) {
        $this->CodTipoCandidatura = $CodTipoCandidatura;
    }

    public function setCodParticipacion($CodParticipacion) {
        $this->CodParticipacion = $CodParticipacion;
    }

    public function setCodDepartamento($CodDepartamento) {
        $this->CodDepartamento = $CodDepartamento;
    }

    public function setCodMunicipio($CodMunicipio) {
        $this->CodMunicipio = $CodMunicipio;
    }

    public function setFoto($Foto) {
        $this->Foto = $Foto;
    }
}

?>