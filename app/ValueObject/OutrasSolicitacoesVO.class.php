<?php

class OutrasSolicitacoesVO {
   

    private $empresa;
    private $colaborador;
    private $custo;
    private $dataSolicitacao;
    private $natureza;
    private $diretor;
    private $valor;
    private $limiteRec;
    private $motivo;
    
    public function __construct() {
        
    }

    public function getEmpresa() {
        return $this->empresa;
    }

    public function getColaborador() {
        return $this->colaborador;
    }

    public function getCusto() {
        return $this->custo;
    }

    public function getDataSolicitacao() {
        return $this->dataSolicitacao;
    }

    public function getNatureza() {
        return $this->natureza;
    }

    public function getDiretor() {
        return $this->diretor;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getLimiteRec() {
        return $this->limiteRec;
    }

    public function getMotivo() {
        return $this->motivo;
    }

    public function setEmpresa($empresa) {
        $this->empresa = $empresa;
    }

    public function setColaborador($colaborador) {
        $this->colaborador = $colaborador;
    }

    public function setCusto($custo) {
        $this->custo = $custo;
    }

    public function setDataSolicitacao($dataSolicitacao) {
        $this->dataSolicitacao = $dataSolicitacao;
    }

    public function setNatureza($natureza) {
        $this->natureza = $natureza;
    }

    public function setDiretor($diretor) {
        $this->diretor = $diretor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function setLimiteRec($limiteRec) {
        $this->limiteRec = $limiteRec;
    }

    public function setMotivo($motivo) {
        $this->motivo = $motivo;
    }


    
    
}
