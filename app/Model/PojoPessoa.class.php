<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PojoPessoa
 *
 * @author Giancarlo
 */
class PojoPessoa {

    private $Cpf;
    private $Nome;
    private $Sexo;
    
    function PojoPessoa() {
    }

    function getCpf() {
        return $this->Cpf;
    }

    function getNome() {
        return $this->Nome;
    }

    function getSexo() {
        return $this->Sexo;
    }

    function setCpf($Cpf) {
        $this->Cpf = $Cpf;
    }

    function setNome($Nome) {
        $this->Nome = $Nome;
    }

    function setSexo($Sexo) {
        $this->Sexo = $Sexo;
    }
    
}
