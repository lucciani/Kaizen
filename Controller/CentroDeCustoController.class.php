<?php

//include 'Conf/PDOConnectionFactory.class.php';
include 'Dao/DaoCentroDeCusto.class.php';
include 'Model/CentroDeCustoModel.class.php';
include 'ValueObject/CentroDeCustoVO.class.php';

class CentroDeCustoController {

    private $modelCusto;
    private $custo;

    public function __construct() {
        $this->custo = new CentroDeCustoVO();
        $this->modelCusto = new CentroDeCustoModel();
    }

    public function salvar() {

        //VO Centro de Custo
        $this->custo->setId($_POST["id"]);
        $this->custo->setDescricao($_POST["descricao"]);

        //Obejtos Model
        $this->modelCusto->inserirModel($this->custo);


        if ($this->modelCusto->inserirModel($this->custo)) {
            header("Location: View/custo/centrodecusto.php");
        } else {
            $_SESSION["msg"] = "Pessoa não cadastrada.";
        }
        header("Location: http://localhost/kaizen_2/index.php?content=home");
    }

    public function listar() {
        return $this->modelCusto->listarModel();
    }

}
