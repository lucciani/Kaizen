<?php

class EmpresaModel extends DaoEmpresa{

    public function inserirModel(ColaboradorVO $col) {
        $dao = new DaoColaborador();
        return $dao->inserir($col);
    }
    
    public function listarModel() {
        $dao = new DaoEmpresa();
        return $dao->listar();
    }
    
    public function getIdEmpresa($where) {
        return DaoEmpresa::getIdEmpresa($where);
    }
}
