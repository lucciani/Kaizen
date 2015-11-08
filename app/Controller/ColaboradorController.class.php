<?php
class ColaboradorController {

    private $colaborador;
    private $modelCol;

    public function __construct() {
        $this->colaborador = new ColaboradorVO();
        $this->modelCol = new ColaboradorModel();
    }

    public function listar() {
        $this->modelCol = new ColaboradorModel();
        return $this->modelCol->listarModel();
    }

}
