<?php

class FundoFixoVO {

    private $empresa;
    private $colaborador;
    private $centro_custo;
    private $dataSolicitacao;
    private $valor;
    
    public function __construct() {
        
    }

    public function getEmpresa() {
        return $this->empresa;
    }

    public function getColaborador() {
        return $this->colaborador;
    }

    public function getCentro_custo() {
        return $this->centro_custo;
    }

    public function getDataSolicitacao() {
        return $this->dataSolicitacao;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setEmpresa($empresa) {
        $this->empresa = $empresa;
    }

    public function setColaborador($colaborador) {
        $this->colaborador = $colaborador;
    }

    public function setCentro_custo($centro_custo) {
        $this->centro_custo = $centro_custo;
    }

    public function setDataSolicitacao($dataSolicitacao) {
        $this->dataSolicitacao = $dataSolicitacao;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }




}
