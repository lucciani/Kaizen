<?php

class ColaboradorModel extends DaoColaborador{

    public function inserirModel(ColaboradorVO $col) {
//        $dao = new DaoColaborador();
        return DaoColaborador::inserir($col);
    }
    
     public function listarModel() {
//        $dao = new DaoColaborador();
        return DaoColaborador::listar();
    }

}
