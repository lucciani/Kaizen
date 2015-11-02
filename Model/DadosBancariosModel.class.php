<?php

class DadosBancariosModel extends DaoDadosBancarios {

    public function inserirModel(DadosBancariosVO $dados) {
        $dao = new DaoDadosBancarios();
        return $dao->inserir($dados);
    }

}
