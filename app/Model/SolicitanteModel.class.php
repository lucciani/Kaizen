<?php

class SolicitanteModel {
    private $dao;
            
    function __construct() {
        $this->dao = new DaoSolicitante();
    }

    
    public function inserirModel(ColaboradorVO $col, ContatoVO $contato, DadosBancariosVO $dados) {
        return $this->dao->insere($col, $contato, $dados);
    }
    
}
