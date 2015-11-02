<?php

include 'Conf/PDOConnectionFactory.class.php';
include 'Dao/DaoEmpresa.class.php';
include 'Model/EmpresaModel.class.php';
include 'ValueObject/EmpresaVO.class.php';

class EmpresaController {

    private $empresa;
    private $modelEm;

    public function __construct() {
        $this->empresa = new EmpresaVO();
        $this->modelEm = new EmpresaModel();
    }

    public function listar() {
        return $this->modelEm->listarModel();
    }

}
