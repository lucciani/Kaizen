<?php

class DaoSolicitante extends PDOConnectionFactory {

    public $conex;
    private $cpf;

    public function DaoSolicitante() {
        $this->conex = PDOConnectionFactory::getConnection();
    }

    // realiza uma inserção
    public function insere(ColaboradorVO $col, ContatoVO $contato, DadosBancariosVO $dados) {
        try {
            $stmtCol = $this->conex->prepare("INSERT INTO colaborador (cpf, nome)"
                    . " VALUES (:cpf, :nome)");
            $stmtCol->bindValue(':cpf', $col->getCpf());
            $stmtCol->bindValue(':nome', $col->getNome());
            
            
            $stmtCont = $this->conex->prepare("INSERT INTO contatos (cpf, telefone, celular, email) "
                    . "VALUES (:cpf, :telefone, :celular, :email)");
            $stmtCont->bindValue(':cpf', $col->getCpf());
            $stmtCont->bindValue(':telefone', $contato->getTelefone());
            $stmtCont->bindValue(':celular', $contato->getCelular());
            $stmtCont->bindValue(':email', $contato->getEmail());
            
            
            $stmtDad = $this->conex->prepare("INSERT INTO dados_bancarios (cpf, agencia, conta, banco) "
                    . "VALUES (:cpf, :agencia, :conta, :banco)");
            $stmtDad->bindValue(':cpf', $col->getCpf());
            $stmtDad->bindValue(':agencia', $dados->getAgencia());
            $stmtDad->bindValue(':conta', $dados->getConta());
            $stmtDad->bindValue(':banco', $dados->getBanco());
            
            $stmtCol->execute();
            $stmtCont->execute();
            $stmtDad->execute();

            

            // fecho a conexão
            $this->conex = null;
            // caso ocorra um erro, retorna o erro;
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }

}
