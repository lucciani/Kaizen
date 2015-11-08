<?php

class DaoContato {

    public $conex = null;

    public function __construct() {
        $this->conex = PDOConnectionFactory::getConnection();
    }

    public function atualizar() {
        
    }

    public function deletar() {
        
    }

    public function inserir(ContatoVO $con) {
        try {
            $stmt = $this->conex->prepare("INSERT INTO contatos (telefone, celular, email) "
                    . "VALUES (:telefone, :celular, :email)");
            $stmt->bindValue(':telefone', $con->getTelefone());
            $stmt->bindValue(':celular', $con->getCelular());
            $stmt->bindValue(':email', $con->getEmail());
            $stmt->execute();
            // fecho a conexão
            $this->conex = null;
            
            // caso ocorra um erro, retorna o erro;
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }

    public function listar() {
        
    }

}
