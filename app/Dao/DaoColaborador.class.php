<?php

class DaoColaborador {

    public $conex = null;

    public function __construct() {
        $this->conex = PDOConnectionFactory::getConnection();
    }

    public function atualizar(ColaboradorVO $col, $id) {
        try {
            $stmt = $this->conex->prepare("UPDATE colaborador SET cpf= :cpf, nome= :nome WHERE id= :$id");
            $this->conex->beginTransaction();

            $stmt->bindValue(':cpf', $col->getCpf());
            $stmt->bindValue(':nome', $col->getNome());

            // executo a query preparada
            $stmt->execute();

            $this->conex->commit();

            // fecho a conexão
            $this->conex = null;
            // caso ocorra um erro, retorna o erro;
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }

    public function deletar($id) {
        try {
            // executo a query
            $num = $this->conex->exec("DELETE FROM colaborador WHERE id=$id");
            // caso seja execuado ele retorna o número de rows que foram afetadas.
            if ($num >= 1) {
                return $num;
            } else {
                return 0;
            }
            // caso ocorra um erro, retorna o erro;
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }

    public function inserir(ColaboradorVO $col) {
        try {
            $stmt = $this->conex->prepare("INSERT INTO colaborador (cpf, nome) "
                    . "VALUES (:cpf, :nome)");
            $stmt->bindValue(':cpf', $col->getCpf());
            $stmt->bindValue(':nome', $col->getNome());

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
            $stmt = $this->conex->prepare("SELECT * FROM colaborador");
            // desconecta 
            $stmt->execute();
            $this->conex = null;
            // retorna o resultado da query
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }
    public function getIdColaborador($where) {
        try {
            $stmt = $this->conex->prepare("SELECT cpf FROM colaborador WHERE nome = '$where'");
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
