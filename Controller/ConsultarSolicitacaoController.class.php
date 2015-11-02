<?php
include 'Conf/PDOConnectionFactory.class.php';
include 'Dao/DaoViagem.class.php';
include 'Dao/DaoFundoFixo.class.php';
include 'Dao/DaoOutrasSolicitacoes.class.php';
include 'ValueObject/ViagemVO.class.php';
include 'ValueObject/FundoFixoVO.class.php';
include 'ValueObject/OutrasSolicitacoesVO.class.php';
include 'Model/ViagemModel.class.php';
include 'Model/OutrasSolicitacoesModel.class.php';
include 'Model/FundoFixoModel.class.php';

class ConsultarSolicitacaoController {

    private $viagem;
    private $fundoFixo;
    private $outras;
    private $modelViagem;
    private $modelFundoFixo;
    private $modelOutras;

    public function __construct() {
        $this->viagem = new ViagemVO();
        $this->fundoFixo = new FundoFixoVO();
        $this->outras = new OutrasSolicitacoesVO();
        $this->modelViagem = new ViagemModel();
        $this->modelFundoFixo = new FundoFixoModel();
        $this->modelOutras = new OutrasSolicitacoesModel();
    }

    public function listar() {
//        var_dump($_POST["tipoSolicitacao"]);
        switch ($_POST["tipoSolicitacao"]) {
            case "Viagem":
                return $this->modelViagem->listarModel();
            case "Fundo fixo":
                return $this->modelFundoFixo->listarModel();
            case "Outras":
                return $this->modelOutras->listarModel();
            default:
                break;
        }
        header("Location: index.php?content=consultar");
    }

}
