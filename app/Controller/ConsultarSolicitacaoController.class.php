<?php

class ConsultarSolicitacaoController {

    private $modelViagem;
    private $modelFundoFixo;
    private $modelOutras;

    public function __construct() {
        
    }

    public function listar() {
        $this->modelViagem = new ViagemModel();
        $this->modelFundoFixo = new FundoFixoModel();
        $this->modelOutras = new OutrasSolicitacoesModel();
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
