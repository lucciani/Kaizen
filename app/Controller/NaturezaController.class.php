<?php

class NaturezaController {
    private $modelNat;
    
    public function listar() {
        $this->modelNat = new NaturezaModel();
        return $this->modelNat->listarModel();
    }
    
}
