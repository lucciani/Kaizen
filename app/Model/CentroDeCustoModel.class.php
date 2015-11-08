<?php

class CentroDeCustoModel extends DaoCentroDeCusto {

    public function inserirModel(CentroDeCustoVO $custo) {
        $dao = new DaoCentroDeCusto();
        return $dao->inserir($custo);
    }

    public function listarModel() {
        $dao = new DaoCentroDeCusto();
        return $dao->listar();
    }

}
