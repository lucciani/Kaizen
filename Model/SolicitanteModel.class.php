<?php

class SolicitanteModel extends DaoSolicitante {
    
    public function inserirModel(ColaboradorVO $col, ContatoVO $contato, DadosBancariosVO $dados) {
        return DaoSolicitante::insere($col, $contato, $dados);
    }

}
