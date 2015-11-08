<?php

class CentroDeCustoController {

    private $modelCusto;
    private $custo;

    public function __construct() {
        
    }

    public function salvar() {
        $this->custo = new CentroDeCustoVO();
        $this->modelCusto = new CentroDeCustoModel();
        //VO Centro de Custo
        $this->custo->setId($_POST["id"]);
        $this->custo->setDescricao($_POST["descricao"]);

        //Obejtos Model
        $this->modelCusto->inserirModel($this->custo);


        if ($this->modelCusto->inserirModel($this->custo)) {
            $_SESSION["msg"] = "Pessoa não cadastrada.";
        } else {
            $_SESSION["msg"] = "Pessoa não cadastrada.";
        }
        header("Location: index.php?content=custo");
    }

    public function listar() {
        $this->modelCusto = new CentroDeCustoModel();
        return $this->modelCusto->listarModel();
    }

}
