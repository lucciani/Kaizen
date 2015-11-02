<?php

class DadosBancariosVO {

    
    private $Agencia;
    private $Conta;
    private $Banco;
    
    public function DadosBancariosVO() {
        
    }
    function getAgencia() {
        return $this->Agencia;
    }

    function getConta() {
        return $this->Conta;
    }

    function getBanco() {
        return $this->Banco;
    }

    function setAgencia($Agencia) {
        $this->Agencia = $Agencia;
    }

    function setConta($Conta) {
        $this->Conta = $Conta;
    }

    function setBanco($Banco) {
        $this->Banco = $Banco;
    }



}
