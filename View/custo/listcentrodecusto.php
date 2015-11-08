<div class="x_content">
    <div class="col-md-12 col-sm-6 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Centro de Custo</h2>
                <ul class="nav navbar-right panel_toolbox">
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table class="table table-striped responsive-utilities jambo_table" id="example">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Descrição</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $centroCusto = new CentroDeCustoController();
                        $array = $centroCusto->listar();
                        foreach ($array as $key => $value):
                            echo '<tr>
                                <td>' . $value['id'] . '</td>
                                <td>' . $value['descricao'] . '</td>
                            </tr>';
                        endforeach
                        ?>
                    </tbody>

                </table>

            </div>
        </div>
    </div>
</div>
<!-- Datatables -->
<script src="js/datatables/js/jquery.dataTables.js"></script>
<script src="js/datatables/tools/js/dataTables.tableTools.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>