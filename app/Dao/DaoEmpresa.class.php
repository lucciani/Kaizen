<?php

class DaoEmpresa {

    public $conex = null;

    public function __construct() {
        $this->conex = PDOConnectionFactory::getConnection();
    }

    public function atualizar(EmpresaVO $em) {
        try {
            $stmt = $this->conex->prepare("UPDATE empresa SET cnpj= :cnpj, descricao= :descricao WHERE id= :id");
            $this->conex->beginTransaction();

            $stmt->bindValue(':cnpj', $em->getCnpj());
            $stmt->bindValue(':descricao', $em->getDescricao());
            $stmt->bindValue(':id', $em->getId());

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

    public function deletar(EmpresaVO $em) {
        try {
            // executo a query
            $stmt = $this->conex->prepare("DELETE FROM empresa WHERE id=:id");
            $stmt->bindValue(':id', $em->getId());

            $stmt->execute();

            // fecho a conexão
            $this->conex = null;
            // caso ocorra um erro, retorna o erro;
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }

    public function inserir(EmpresaVO $em) {
        try {
            $stmt = $this->conex->prepare("INSERT INTO empresa (cnpj, descricao) "
                    . "VALUES (:cnpj, :descricao)");
            $stmt->bindValue(':cnpj', $em->getCnpj());
            $stmt->bindValue(':descricao', $em->getDescricao());

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
            $stmt = $this->conex->prepare("SELECT * FROM empresa ORDER BY descricao ASC");
            // desconecta 
            $stmt->execute();
            $this->conex = null;
            // retorna o resultado da query
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }
    public function getIdEmpresa($where) {
        try {
            $stmt = $this->conex->prepare("SELECT cnpj FROM empresa WHERE descricao = '$where'");
            // desconecta 
            $stmt->execute();
            $this->conex = null;
            // retorna o resultado da query
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }

    public function getById($id) {
        try {
            $stmt = $this->conex->prepare("SELECT * FROM empresa WHERE id = ".  addslashes($id));
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
