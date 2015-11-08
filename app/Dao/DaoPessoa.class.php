<?php

class DaoPessoa extends PDOConnectionFactory {

// irá receber uma conexão

    public $conex = null;

    public function DaoPessoa() {
    }

    // realiza uma inserção
    public function insere(PojoPessoa $pessoa) {
        $conex = PDOConnectionFactory::getConnection();
        try {
            $stmt = $conex->prepare("INSERT INTO colaborador (cpf, nome) VALUES (?, ?)");
            $stmt->bindValue(1, $pessoa->getCpf());
            $stmt->bindValue(2, $pessoa->getNome());

            // executo a query preparada
            $stmt->execute();

            // fecho a conexão
            $conex = null;
            // caso ocorra um erro, retorna o erro;
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }

}
