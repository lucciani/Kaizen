<?php

class OutrasSolicitacoesController {

    private $outras;
    private $modeloutras;
    private $modelCol;
    private $modelEmpresa;
    private $modelNat;

    public function __construct() {
        
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
        $this->modelCol = new ColaboradorModel();
        $cpf = implode("", $this->modelCol->getIdCol($id));
        return $cpf;
    }
    public function getIdNatureza($id) {
        $conta = explode("-", $id);
        return $conta[0];
    }

    public function salvar() {
        $this->outras = new OutrasSolicitacoesVO();
        $this->modeloutras = new OutrasSolicitacoesModel();
        
        $idEmp = $this->getIdEmp($_POST["empresa"]);
        $this->outras->setEmpresa($idEmp);
        $cpf = $this->getIdCol($_POST["colaborador"]);
        $this->outras->setColaborador($cpf);
        $id = $this->getIdCusto($_POST["centro_custo"]);
        $this->outras->setCusto($id);
        $date = $this->getDate($_POST["datesolicitacao"]);
        $this->outras->setDataSolicitacao($date);
        $conta = $this->getIdNatureza($_POST["natureza"]);
        $this->outras->setNatureza($conta);
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
        header("Location: index.php?content=home");
    }

    public function listar() {
        $this->modeloutras = new OutrasSolicitacoesModel();
        return $this->modeloutras->listarModel();
    }

    public function countReg() {
        $this->modeloutras = new OutrasSolicitacoesModel();
        return $this->modeloutras->countRegistro();
    }

    public function reportOutras($where) {
        $this->modeloutras = new OutrasSolicitacoesModel();
        return $this->modeloutras->relatorioOutras($where);
    }

}
