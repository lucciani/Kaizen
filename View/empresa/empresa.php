<div class="x_content">
    <div class="col-md-12 col-sm-6 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Empresas</h2>
                <ul class="nav navbar-right panel_toolbox">
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>CNPJ</th>
                            <th>Descrição</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $empresa = new EmpresaController();
                        $arrayEm = $empresa->listar();
                        foreach ($arrayEm as $key => $valueEm) {
                            echo '<tr>
                                <td>' . $valueEm['id'] . '</td>
                                <td>' . $valueEm['cnpj'] . '</td>
                                <td>' . $valueEm['descricao'] . '</td>
                            </tr>';
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>