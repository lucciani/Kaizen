<?php

class OutrasSolicitacoesModel extends DaoOutrasSolicitacoes {

    public function inserirModel(OutrasSolicitacoesVO $outras) {
        return DaoOutrasSolicitacoes::insere($outras);
    }
    
    public function listarModel() {
//        $dao = new DaoOutrasSolicitacoes();
        return DaoOutrasSolicitacoes::listar();
    }
    
     public function countRegistro() {
//        $this->dao = new DaoViagem();
        return DaoOutrasSolicitacoes::qntRegistros();
    }
    
    public function relatorioOutras($custo) {
        return DaoOutrasSolicitacoes::relOutras($custo);
    }
}
