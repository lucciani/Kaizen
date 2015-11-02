<?php

class DaoDadosBancarios {

    public $conex = null;

    public function __construct() {
        $this->conex = PDOConnectionFactory::getConnection();
    }

    public function atualizar() {
        
    }

    public function deletar() {
        
    }

    public function inserir(DadosBancariosVO $dados) {
        try {
            $stmt = $this->conex->prepare("INSERT INTO dados_bancarios (agencia, conta, banco) "
                    . "VALUES (:agencia, :conta, :banco)");
            $stmt->bindValue(':agencia', $dados->getAgencia());
            $stmt->bindValue(':conta', $dados->getConta());
            $stmt->bindValue(':banco', $dados->getBanco());
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
