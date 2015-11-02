<?php

//include 'Conf/PDOConnectionFactory.class.php';
include 'Dao/DaoOutrasSolicitacoes.class.php';
include 'ValueObject/OutrasSolicitacoesVO.class.php';
include 'Model/OutrasSolicitacoesModel.class.php';

class OutrasSolicitacoesController {

    private $outras;
    private $modeloutras;

    public function __construct() {
        $this->outras = new OutrasSolicitacoesVO();
        $this->modeloutras = new OutrasSolicitacoesModel();
    }

    public function salvar() {

        $this->outras->setEmpresa($_POST["empresa"]);
        $this->outras->setColaborador($_POST["colaborador"]);
        $this->outras->setCusto($_POST["departamento"]);
        $this->outras->setDataSolicitacao($_POST["datesolicitacao"]);
        $this->outras->setNatureza($_POST["natureza"]);
        $this->outras->setDiretor($_POST["diretor"]);
        $this->outras->setValor($_POST["valor"]);
        $this->outras->setLimiteRec($_POST["datareceber"]);
        $this->outras->setMotivo($_POST["motivooutros"]);

        $this->modeloutras->inserirModel($this->outras);

        if ($this->modeloutras) {
            $_SESSION["msg"] = "sucesso.";
        } else {
            $_SESSION["msg"] = "Erro.";
        }
        header("Location: index.php?content=consultar");
    }

    public function listar() {
        return $this->modeloutras->listarModel();
    }
    
    public function countReg() {
        return $this->modeloutras->countRegistro();
        
    }
    
    public function reportOutras($where) {
        return $this->modeloutras->relatorioOutras($where);
    }

}
