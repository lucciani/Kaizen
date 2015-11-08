<?php

class ColaboradorVO {

    private $cpf;
    private $nome;
    private $contato;
    private $dadosBancarios;

    public function __construct() {
        
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getContato() {
        return $this->contato;
    }

    public function getDadosBancarios() {
        return $this->dadosBancarios;
    }

    public function setContato($contato) {
        $this->contato = $contato;
    }

    public function setDadosBancarios($dadosBancarios) {
        $this->dadosBancarios = $dadosBancarios;
    }



}
