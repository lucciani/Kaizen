<?php

class ContatoVO {
    
    private $id;
    private $Telefone;
    private $Celular;
    private $Email;
    
    public function ContatoVO() {
    }
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

        
    function getTelefone() {
        return $this->Telefone;
    }

    function getCelular() {
        return $this->Celular;
    }

    function getEmail() {
        return $this->Email;
    }

    function setTelefone($Telefone) {
        $this->Telefone = $Telefone;
    }

    function setCelular($Celular) {
        $this->Celular = $Celular;
    }

    function setEmail($Email) {
        $this->Email = $Email;
    }


}
