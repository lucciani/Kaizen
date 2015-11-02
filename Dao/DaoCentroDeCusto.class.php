<?php

class DaoCentroDeCusto {

    public $conex = null;

    public function __construct() {
        $this->conex = PDOConnectionFactory::getConnection();
    }

    public function atualizar() {
        
    }

    public function deletar() {
        
    }

    public function inserir(CentroDeCustoVO $custo) {
        try {
            $stmt = $this->conex->prepare("INSERT INTO centro_de_custo (id, descricao) "
                    . "VALUES (:id, :descricao)");
            $stmt->bindValue(':id', $custo->getId());
            $stmt->bindValue(':descricao', $custo->getDescricao());

            $stmt->execute();

            // fecho a conexão
            $this->conex = null;
            // caso ocorra um erro, retorna o erro;
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }

    public function listar() {
        try {
            $stmt = $this->conex->prepare("SELECT * FROM centro_de_custo");
            // desconecta 
            $stmt->execute();
            $this->conex = null;
            // retorna o resultado da query
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }

}
