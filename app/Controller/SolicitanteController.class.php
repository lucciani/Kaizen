<?php
require('app/Config.inc.php');
class SolicitanteController {

    private $modelSolicitante;
    private $colaborador;
    private $contato;
    private $dados;

    public function __construct() {
        
    }

    public function salvar() {
        $this->modelSolicitante = new SolicitanteModel();
        $this->colaborador = new ColaboradorVO();
        $this->contato = new ContatoVO();
        $this->dados = new DadosBancariosVO();
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
        $this->modelSolicitante->inserirModel($this->colaborador, $this->contato, $this->dados);
        var_dump($this->modelSolicitante);
        if ($this->modelSolicitante) {
            echo 'Pessoa cadastrada com sucesso.';
        } else {
            $_SESSION["msg"] = "Pessoa não cadastrada.";
        }
        header("Location: index.php?content=home");
    }

}
