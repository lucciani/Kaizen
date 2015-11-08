<?php


class PessoaModel extends DaoPessoa {

    public function inserirModel(PojoPessoa $pessoa) {
        return DaoPessoa::insere($pessoa);
    }

}
