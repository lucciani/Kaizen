<?php
include 'Dao/DaoColaborador.class.php';
include 'Model/ColaboradorModel.class.php';
include 'ValueObject/ColaboradorVO.class.php';
class ColaboradorController {

    private $colaborador;
    private $modelCol;

    public function __construct() {
        $this->colaborador = new ColaboradorVO();
        $this->modelCol = new ColaboradorModel();
    }

    public function listar() {
        return $this->modelCol->listarModel();
    }

}
