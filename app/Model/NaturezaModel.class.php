<?php

class NaturezaModel extends DaoNatureza {

    public function listarModel() {
        return DaoNatureza::listar();
    }

    public function getIdNat($where) {
        return DaoNatureza::getIdNatureza($where);
    }
}
