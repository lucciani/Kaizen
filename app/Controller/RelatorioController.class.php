<?php

class RelatorioController {

    private $modelViagem;
    private $modelFixo;
    private $modelOutras;

    public function __construct() {
        
    }

    public function report() {
        $this->modelViagem = new ViagemModel();
        $this->modelFixo = new FundoFixoModel();
        $this->modelOutras = new OutrasSolicitacoesModel();
//        var_dump($_POST["tipoSolicitacao"]);
        switch ($_POST["tipoSolicitacao"]) {
            case "Viagem":
                return $this->modelViagem->relatorioViagem($_POST["departamento"]);
            case "Fundo fixo":
                return $this->modelFixo->relatorioFixo($_POST["departamento"]);
            case "Outras":
                return $this->modelOutras->relatorioOutras($_POST["departamento"]);
            default:
                break;
        }
        header("Location: index.php?content=consultar");
    }

}
