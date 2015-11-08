<?php

class EmpresaVO {

    private $id;
    private $cnpj;
    private $descricao;

    public function __construct() {
        
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getCnpj() {
        return $this->cnpj;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    //put your code here
}
