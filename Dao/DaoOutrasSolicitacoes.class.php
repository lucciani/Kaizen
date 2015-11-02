<?php

class DaoOutrasSolicitacoes {

    public $conex = null;

    public function __construct() {
        $this->conex = PDOConnectionFactory::getConnection();
    }

    // realiza uma inserção
    public function insere(OutrasSolicitacoesVO $outras) {
        try {
            $stmt = $this->conex->prepare("INSERT INTO outras (empresa, colaborador, centro_custo, data_solicitacao, natureza, diretor, valor, limite_rec, motivo) "
                    . "VALUES (:empresa, :colaborador, :centro_custo, :data_solicitacao, :natureza, :diretor, :valor, :limite_rec, :motivo)");
            $stmt->bindValue(':empresa', $outras->getEmpresa());
            $stmt->bindValue(':colaborador', $outras->getColaborador());
            $stmt->bindValue(':centro_custo', $outras->getCusto());
            $stmt->bindValue(':data_solicitacao', $outras->getDataSolicitacao());
            $stmt->bindValue(':natureza', $outras->getNatureza());
            $stmt->bindValue(':diretor', $outras->getDiretor());
            $stmt->bindValue(':valor', $outras->getValor());
            $stmt->bindValue(':limite_rec', $outras->getLimiteRec());
            $stmt->bindValue(':motivo', $outras->getMotivo());


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
            $stmt = $this->conex->prepare("SELECT * FROM outras");
            // desconecta 
            $stmt->execute();
            $this->conex = null;
            // retorna o resultado da query
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }
    
    public function relOutras($where) {
        try {
            $stmt = $this->conex->prepare("SELECT * FROM outras WHERE centro_custo = '$where'");
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
            $stmt = $this->conex->prepare("SELECT * FROM outras");
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
