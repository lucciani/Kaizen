<?php

class DaoNatureza {

    public $conex = null;

    public function __construct() {
        $this->conex = PDOConnectionFactory::getConnection();
    }

    public function listar() {
        try {
            $stmt = $this->conex->prepare("SELECT * FROM natureza ORDER BY descricao ASC");
            $stmt->execute();
            // desconecta 
            $this->conex = null;
            // retorna o resultado da query
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }
    
    public function getIdNatureza($where) {
        try {
            $stmt = $this->conex->prepare("SELECT id FROM natureza WHERE descricao = '$where'");
            // desconecta 
            $stmt->execute();
            $this->conex = null;
            // retorna o resultado da query
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }

}
