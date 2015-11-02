<?php

class DaoFundoFixo {

    public $conex = null;

    public function __construct() {
        $this->conex = PDOConnectionFactory::getConnection();
    }

    public function atualizar(FundoFixoVO $fixo, $id) {
        try {
            $stmt = $this->conex->prepare("UPDATE fundo_fixo SET data_solicitacao= :data_solicitacao, valor= :valor WHERE id= :$id");
            $this->conex->beginTransaction();

            $stmt->bindValue(':data_solicitacao', $fixo->getDataSolicitacao());
            $stmt->bindValue(':valor', $fixo->getValor());

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
            $num = $this->conex->exec("DELETE FROM fundo_fixo WHERE id=$id");
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

    public function inserir(FundoFixoVO $fixo) {
        try {
            $stmt = $this->conex->prepare("INSERT INTO fundo_fixo (empresa, colaborador, centro_custo, data_solicitacao, valor) "
                    . "VALUES (:empresa, :colaborador, :centro_custo, :data_solicitacao, :valor)");
            $stmt->bindValue(':empresa', $fixo->getEmpresa());
            $stmt->bindValue(':colaborador', $fixo->getColaborador());
            $stmt->bindValue(':centro_custo', $fixo->getCentro_custo());
            $stmt->bindValue(':data_solicitacao', $fixo->getDataSolicitacao());
            $stmt->bindValue(':valor', $fixo->getValor());
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
            $stmt = $this->conex->prepare("SELECT * FROM fundo_fixo");
            $stmt->execute();
            // desconecta 
            $this->conex = null;
            // retorna o resultado da query
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }

    public function relFixo($where) {
        try {
            $stmt = $this->conex->prepare("SELECT * FROM fundo_fixo WHERE centro_custo = '$where'");
            // desconecta 
            $stmt->execute();
            $this->conex = null;
            // retorna o resultado da query
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }
    
    public function qntRegistros() {
        try {
            $stmt = $this->conex->prepare("SELECT * FROM fundo_fixo");
            $stmt->execute();
            $rows = count($stmt->fetchAll(PDO::FETCH_ASSOC));
            // desconecta 
            $this->conex = null;
            // retorna o resultado da query
            return $rows;
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }

}
