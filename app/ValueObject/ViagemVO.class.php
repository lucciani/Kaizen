<?php

class ViagemVO {

    private $empresa;
    private $colaborador;
    private $centroCusto;
    private $dataSolicitacao;
    private $destino;
    private $periodo;
    private $motivo;
    private $motorista;
    private $idDespesas;
    private $totalDespesas;
    
    function __construct() {
        
    }

    
    public function getEmpresa() {
        return $this->empresa;
    }

    public function getColaborador() {
        return $this->colaborador;
    }

    public function getCentroCusto() {
        return $this->centroCusto;
    }

    public function getDataSolicitacao() {
        return $this->dataSolicitacao;
    }

    public function getDestino() {
        return $this->destino;
    }

    public function getPeriodo() {
        return $this->periodo;
    }

    public function getMotivo() {
        return $this->motivo;
    }

    public function getMotorista() {
        return $this->motorista;
    }

    public function getIdDespesas() {
        return $this->idDespesas;
    }

    public function getTotalDespesas() {
        return $this->totalDespesas;
    }

    public function setEmpresa($empresa) {
        $this->empresa = $empresa;
    }

    public function setColaborador($colaborador) {
        $this->colaborador = $colaborador;
    }

    public function setCentroCusto($centroCusto) {
        $this->centroCusto = $centroCusto;
    }

    public function setDataSolicitacao($dataSolicitacao) {
        $this->dataSolicitacao = $dataSolicitacao;
    }

    public function setDestino($destino) {
        $this->destino = $destino;
    }

    public function setPeriodo($periodo) {
        $this->periodo = $periodo;
    }

    public function setMotivo($motivo) {
        $this->motivo = $motivo;
    }

    public function setMotorista($motorista) {
        $this->motorista = $motorista;
    }

    public function setIdDespesas($idDespesas) {
        $this->idDespesas = $idDespesas;
    }

    public function setTotalDespesas($totalDespesas) {
        $this->totalDespesas = $totalDespesas;
    }


}
