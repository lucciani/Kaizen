<?php

class CentroDeCustoVO {
    private $id;
    private $descricao;
    
    public function __construct() {
        
    }

    public function getId() {
        return $this->id;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

        //put your code here
}
