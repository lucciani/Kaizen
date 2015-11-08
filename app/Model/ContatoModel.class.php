<?php

class ContatoModel extends DaoContato {

    public function inserirModel(ContatoVO $con) {
        $dao = new DaoContato();
        return $dao->inserir($con);
    }
    
}
