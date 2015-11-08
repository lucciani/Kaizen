<?php
//require('app/Config.inc.php');
class FundoFixoController {

    private $fundoFixo;
    private $modelFixo;
    private $modelEmpresa;
    private $modelCol;

    function __construct() {
        
    }

    public function getIdCusto($id) {
        $idCusto = explode("-", $id);
        return $idCusto[0];
    }

    public function getDate($date) {
        $dateFormat = new DateTime($date);
        return $dateFormat->format('Y-m-d');
    }

    public function getIdEmp($id) {
        $this->modelEmpresa = new EmpresaModel();
        $cnpj = implode("", $this->modelEmpresa->getIdEmpresa($id));
        return $cnpj;
    }

    public function getIdCol($id) {
        $cpf = implode("", $this->modelCol->getIdColaborador($id));
        return $cpf;
    }

    public function salvar() {
        $this->fundoFixo = new FundoFixoVO();
        $this->modelFixo = new FundoFixoModel();
        //Obj VO
        $idEmp = $this->getIdEmp($_POST["empresa"]);
        $this->fundoFixo->setEmpresa($idEmp);
        $cpf = $this->getIdCol($_POST["colaborador"]);
        $this->fundoFixo->setColaborador($cpf);
        $id = $this->getIdCusto($_POST["centro_custo"]);
        $this->fundoFixo->setCentro_custo($id);
        $date = $this->getDate($_POST["datesolicitacao"]);
        $this->fundoFixo->setDataSolicitacao($date);
        $this->fundoFixo->setValor($_POST["valor"]);
        var_dump($this->fundoFixo);

        //Obj Model
        $this->modelFixo->inserirModel($this->fundoFixo);
        var_dump($this->modelFixo);

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
