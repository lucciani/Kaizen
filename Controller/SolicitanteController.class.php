<?php

//include 'Conf/PDOConnectionFactory.class.php';
include 'Dao/DaoSolicitante.class.php';
include 'Model/SolicitanteModel.class.php';
include 'ValueObject/ColaboradorVO.class.php';
include 'ValueObject/ContatoVO.class.php';
include 'ValueObject/DadosBancariosVO.class.php';

class SolicitanteController {

    private $modelSolicitante;
    private $colaborador;
    private $contato;
    private $dados;
    private $dao;

    public function __construct() {
        $this->modelSolicitante = new SolicitanteModel();
        $this->colaborador = new ColaboradorVO();
        $this->contato = new ContatoVO();
        $this->dados = new DadosBancariosVO();
        $this->dao = new DaoSolicitante();
            
    }

    public function salvar() {

        //VO colaborador
        $this->colaborador->setCpf($_POST["cpf"]);
        $this->colaborador->setNome($_POST["nome"]);
        //VO contato
        $this->contato->setTelefone($_POST["telefone"]);
        $this->contato->setCelular($_POST["celular"]);
        $this->contato->setEmail($_POST["email"]);
        //VO Dados bancarios
        $this->dados->setAgencia($_POST["agencia"]);
        $this->dados->setConta($_POST["conta"]);
        $this->dados->setBanco($_POST["banco"]);

        //Obejtos Model
//        $this->modelSolicitante->inserirModel($this->colaborador, $this->contato, $this->dados);
//        var_dump($this->modelSolicitante);
        $this->dao->insere($this->colaborador, $this->contato, $this->dados);
        var_dump($this->dao);
        if ($this->dao) {
            echo 'Pessoa cadastrada com sucesso.';
        } else {
            $_SESSION["msg"] = "Pessoa não cadastrada.";
        }
        header("Location: index.php?content=home");
    }

}
