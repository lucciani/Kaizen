<?php

class DaoDespesas {

    public $conex = null;

    public function __construct() {
        $this->conex = PDOConnectionFactory::getConnection();
    }

    public function atualizar(FundoFixoVO $fixo, $id) {
        try {
            $stmt = $this->conex->prepare("UPDATE despesas SET data_solicitacao= :data_solicitacao, valor= :valor WHERE id= :$id");
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
            $num = $this->conex->exec("DELETE FROM despesas WHERE id=$id");
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

    public function inserir(DespesasVO $desp) {
        try {
            $stmt = $this->conex->prepare("INSERT INTO despesas (id, descricao, quantidade, valorUn, totalUn) "
                    . "VALUES (:id, :descricao, :quantidade, :valorUn, :totalUn)");
            $stmt->bindValue(':id', $desp->getId());
            $stmt->bindValue(':descricao', $desp->getDescricao());
            $stmt->bindValue(':quantidade', $desp->getQuantidade());
            $stmt->bindValue(':valorUn', $desp->getValorUn());
            $stmt->bindValue(':totalUn', $desp->getTotalUn());
            
//            $ultima_viagem = $this->conex->last_insert_id();

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
            $stmt = $this->conex->prepare("SELECT * FROM despesas");
            $stmt->execute();
            // desconecta 
            $this->conex = null;
            // retorna o resultado da query
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }

}
