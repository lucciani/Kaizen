<?php

class FundoFixoModel extends DaoFundoFixo {
    
//    private $dao;

    public function inserirModel(FundoFixoVO $fixo) {
//        $this->dao = new DaoFundoFixo();
        var_dump($fixo);
        return DaoFundoFixo::inserir($fixo);
    }

    public function listarModel() {
//        $this->dao = new DaoFundoFixo();
        return DaoFundoFixo::listar();
    }
    
    public function countRegistro() {
//        $this->dao = new DaoFundoFixo();
        return DaoFundoFixo::qntRegistros();
    }
    
    public function relatorioFixo($custo) {
        return DaoFundoFixo::reportRow($custo);
    }

}
