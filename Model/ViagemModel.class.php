<?php

class ViagemModel extends DaoViagem{

    private $dao;
    public function inserirModel(ViagemVO $viagem, DespesasVO $desp) {
        $this->dao = new DaoViagem();
        return $this->dao->inserir($viagem, $desp);
    }
    
    public function listarModel() {
        $this->dao = new DaoViagem();
        return $this->dao->listar();
    }
    
    public function countRegistro() {
        $this->dao = new DaoViagem();
        return $this->dao->qntRegistros();
    }
    public function relatorioViagem() {
        return DaoViagem::relViagem($custo);
    }
}
