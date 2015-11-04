<?php

include 'Conf/PDOConnectionFactory.class.php';
include 'Dao/DaoFundoFixo.class.php';
include 'Model/FundoFixoModel.class.php';
include 'ValueObject/FundoFixoVO.class.php';

class FundoFixoController {

    private $fundoFixo;
    private $modelFixo;

    function __construct() {
        $this->fundoFixo = new FundoFixoVO();
        $this->modelFixo = new FundoFixoModel();
    }
    
    public function getIdCusto($id) {
         $idCusto = explode("-", $id);
         return (int) $idCusto[0];
    }
    
    public function getDate($date) {
        $dateFormat = new DateTime($date);
        return $dateFormat->format('Y-m-d');
    }

    public function salvar() {
        //Obj VO
        $this->fundoFixo->setEmpresa($_POST["empresa"]);
        $this->fundoFixo->setColaborador($_POST["colaborador"]);
        $id = $this->getIdCusto($_POST["centro_custo"]);
        $this->fundoFixo->setCentro_custo($id);
        $date = $this->getDate($_POST["datesolicitacao"]);
        $this->fundoFixo->setDataSolicitacao($date);
        $this->fundoFixo->setValor($_POST["valor"]);

        //Obj Model
        $this->modelFixo->inserirModel($this->fundoFixo);

        if ($this->modelFixo) {
            $_SESSION["msg"] = "Fundo fixo cadastrada com sucesso.";
        } else {
            $_SESSION["msg"] = "Fundo fixo não cadastrada.";
        }
        header("Location: index.php?content=home");
    }

    public function listar() {
        return $this->modelFixo->listarModel();
    }

    public function countReg() {
        return $this->modelFixo->countRegistro();
    }
    
    public function reportFundoFixo($where) {
        return $this->modelFixo->relatorioFixo($where);
    }

}
