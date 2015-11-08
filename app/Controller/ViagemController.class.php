<?php

class ViagemController {

    private $viagem;
    private $despesa;
    private $modelViagem;

    public function __construct() {
        
    }

    public function salvar() {
        $this->viagem = new ViagemVO();
        $this->despesa = new DespesasVO();
        $this->modelViagem = new ViagemModel();
        //VO colaborador
        $this->viagem->setEmpresa($_POST["empresa"]);
        $this->viagem->setColaborador($_POST["colaborador"]);
        $this->viagem->setCentroCusto($_POST["departamento"]);
        $this->viagem->setDataSolicitacao($_POST["datesolicitacao"]);
        $this->viagem->setDestino($_POST["destino"]);
        $this->viagem->setPeriodo($_POST["reservation"]);
        $this->viagem->setMotivo($_POST["motivoviagem"]);
        $this->viagem->setMotorista($_POST["motorista"]);

        $this->despesa->setDescricao($_POST["descricao[]"]);
        $this->despesa->setQuantidade($_POST["quantidade[]"]);
        $this->despesa->setValorUn($_POST["valorDia[]"]);
        $this->despesa->setTotalUn($_POST["totalDia[]"]);

        //Obejtos Model
        $this->modelViagem->inserirModel($this->viagem, $this->despesa);


        if (($this->modelCol->inserirModel($this->colaborador))) {
            echo 'Pessoa cadastrada com sucesso.';
        } else {
            $_SESSION["msg"] = "Pessoa não cadastrada.";
        }
        header("Location: View/solicitante/retorno.php");
    }

    public function listar() {
        $this->modelViagem = new ViagemModel();
        return $this->modelViagem->listarModel();
    }

    public function countReg() {
        $this->modelViagem = new ViagemModel();
        return $this->modelViagem->countRegistro();
    }

}
