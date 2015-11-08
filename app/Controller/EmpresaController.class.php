<?php

class EmpresaController {

    private $modelEm;

    public function __construct() {
        
    }

    public function listar() {
        $this->modelEm = new EmpresaModel();
        return $this->modelEm->listarModel();
    }

}
