<?php

class DaoSolicitante extends PDOConnectionFactory {

    public $conex = null;
    private $idContato;
    private $idDados;

    public function DaoSolicitante() {
        $this->conex = PDOConnectionFactory::getConnection();
    }

    // realiza uma inserção
    public function insere(ColaboradorVO $col, ContatoVO $contato, DadosBancariosVO $dados) {
        try {
            $stmtCont = $this->conex->prepare("INSERT INTO contatos (telefone, celular, email) "
                    . "VALUES (:telefone, :celular, :email)");
            $stmtCont->bindValue(':telefone', $contato->getTelefone());
            $stmtCont->bindValue(':celular', $contato->getCelular());
            $stmtCont->bindValue(':email', $contato->getEmail());
            $stmtCont->execute();
            $this->idContato = $this->conex->lastInsertId;
            
            $stmtDad = $this->conex->prepare("INSERT INTO dados_bancarios (agencia, conta, banco) "
                    . "VALUES (:agencia, :conta, :banco)");
            $stmtDad->bindValue(':agencia', $dados->getAgencia());
            $stmtDad->bindValue(':conta', $dados->getConta());
            $stmtDad->bindValue(':banco', $dados->getBanco());
            $stmtDad->execute();
            $this->idDados = $this->conex->lastInsertId;

            $stmtCol = $this->conex->prepare("INSERT INTO colaborador (cpf, nome ,id_contato, id_dados_bancario)"
                    . " VALUES (:cpf, :nome, :id_contato, :id_dados_bancario)");
            $stmtCol->bindValue(':cpf', $col->getCpf());
            $stmtCol->bindValue(':nome', $col->getNome());
            $stmtCol->bindValue(':id_contato', (int)$this->idContato);
            $stmtCol->bindValue(':id_dados_bancario', (int)$this->idDados);



            $stmtCol->execute();

            // fecho a conexão
            $this->conex = null;
            // caso ocorra um erro, retorna o erro;
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }

}
