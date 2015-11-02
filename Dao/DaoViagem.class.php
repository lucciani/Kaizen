<?php

class DaoViagem {

    public $conex = null;

    public function __construct() {
        $this->conex = PDOConnectionFactory::getConnection();
    }

//    public function atualizar(ViagemVO $viagem) {
//        try {
//            $stmt = $this->conex->prepare("UPDATE empresa SET cnpj= :cnpj, descricao= :descricao WHERE id= :id");
//            $this->conex->beginTransaction();
//
//            $stmt->bindValue(':cnpj', $em->getCnpj());
//            $stmt->bindValue(':descricao', $em->getDescricao());
//            $stmt->bindValue(':id', $em->getId());
//
//            // executo a query preparada
//            $stmt->execute();
//
//            $this->conex->commit();
//
//            // fecho a conexão
//            $this->conex = null;
//            // caso ocorra um erro, retorna o erro;
//        } catch (PDOException $ex) {
//            echo "Erro: " . $ex->getMessage();
//        }
//    }
//    public function deletar(EmpresaVO $em) {
//        try {
//            // executo a query
//            $stmt = $this->conex->prepare("DELETE FROM empresa WHERE id=:id");
//            $stmt->bindValue(':id', $em->getId());
//
//            $stmt->execute();
//
//            // fecho a conexão
//            $this->conex = null;
//            // caso ocorra um erro, retorna o erro;
//        } catch (PDOException $ex) {
//            echo "Erro: " . $ex->getMessage();
//        }
//    }

    public function inserir(ViagemVO $viagem, DespesasVO $desp) {
        try {
            $stmt = $this->conex->prepare("INSERT INTO viagem (empresa, colaborador,centro_custo, data_solicitacao, destino, periodo, motivo, motorista) "
                    . "VALUES (:empresa, :colaborador,:centro_custo, :data_solicitacao, :destino, :periodo, :motivo, :motorista)");
            $stmt->bindValue(':empresa', $viagem->getEmpresa());
            $stmt->bindValue(':colaborador', $viagem->getColaborador());
            $stmt->bindValue(':centro_custo', $viagem->getCentroCusto());
            $stmt->bindValue(':data_solicitacao', $viagem->getDataSolicitacao());
            $stmt->bindValue(':destino', $viagem->getDestino());
            $stmt->bindValue(':periodo', $viagem->getPeriodo());
            $stmt->bindValue(':motivo', $viagem->getMotivo());
            $stmt->bindValue(':motorista', $viagem->getMotorista());
            $ultima_viagem = $this->conex->last_insert_id();
            
            $stmtDesp = $this->conex->prepare("INSERT INTO despesas (descricao, quantidade, valor_un, valor, id_viagem) "
                    . "VALUES (:descricao, :quantidade, :valor_un, :valor, $ultima_viagem)");
            $stmtDesp->bindValue(':descricao', $desp->getDescricao());
            $stmtDesp->bindValue(':quantidade', $desp->getQuantidade());
            $stmtDesp->bindValue(':valor_un', $desp->getValorUn());
            $stmtDesp->bindValue(':valor', $desp->getTotalUn());
            
            $stmtDesp->execute();
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
            $stmt = $this->conex->prepare("SELECT * FROM viagem");
            // desconecta 
            $stmt->execute();
            $this->conex = null;
            // retorna o resultado da query
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }
    
    private function relViagem($where) {
        try {
            $stmt = $this->conex->prepare("SELECT * FROM viagem WHERE centro_custo = ".$where);
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
            $stmt = $this->conex->prepare("SELECT * FROM viagem");
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
