<?php

class PessoaVO {

    private $Cpf;
    private $Nome;
    
    function __construct() {
        
    }
    
    public function getCpf() {
        return $this->Cpf;
    }

    public function getNome() {
        return $this->Nome;
    }

    public function setCpf($Cpf) {
        $this->Cpf = $Cpf;
    }

    public function setNome($Nome) {
        $this->Nome = $Nome;
    }

}
