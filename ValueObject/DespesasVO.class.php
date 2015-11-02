<?php

class DespesasVO {

    private $id;
    private $descricao;
    private $quantidade;
    private $valorUn;
    private $totalUn;

    public function __construct() {
        
    }

    public function getId() {
        return $this->id;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function getValorUn() {
        return $this->valorUn;
    }

    public function getTotalUn() {
        return $this->totalUn;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function setValorUn($valorUn) {
        $this->valorUn = $valorUn;
    }

    public function setTotalUn($totalUn) {
        $this->totalUn = $totalUn;
    }

}
