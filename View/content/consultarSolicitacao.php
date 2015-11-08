<?php
//include 'Controller/ConsultarController.class.php';
//include 'Controller/ViagemController.class.php';
//include 'Controller/FundoFixoController.class.php';
//include 'Controller/OutrasSolicitacoesController.class.php';
?>
<div class="x_content">
    <form class="form-horizontal form-label-left" novalidate method="POST" action="index.php?content=consultar">
        <span class="section">Consulta de solicitações</span>

        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipoSolicitacao">Tipo da solicitação <span class="required">*</span>
            </label>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <select id="tipoSolicitacao" name="tipoSolicitacao" class="select2_single form-control" tabindex="-1"required="required">
                    <option disabled selected>Escolha uma solicitação</option>
                    <option>Viagem</option>
                    <option>Fundo fixo</option>
                    <option>Outras</option>
                </select>
            </div>
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
                <button id="send" type="submit" class="pesquisar btn btn-success">Pesquisar</button>
            </div>
        </div>
    </form>
    <div class="x_content">
        <div class="col-md-12 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Solicitações</h2>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <?php
                    $tipoSolicitacao = (isset($_POST['tipoSolicitacao'])) ? $_POST['tipoSolicitacao'] : '';
                    switch ($tipoSolicitacao) {
                        case "Viagem":
                            echo '<table class="table table-striped responsive-utilities jambo_table">
                        <thead>
                            <tr>
                                <th>Empresa</th>
                                <th>Colaborador</th>
                                <th>Centro de Custo</th>
                                <th>Data Solicitação</th>
                                <th>Destino</th>
                                <th>Período</th>
                                <th>Motivo</th>
                                <th>Motorista</th>
                            </tr>
                        </thead>
                        <tbody>
                        ';
                            ?>
                            <?php
                            $solicitacaoViagem = new ViagemController();
                            $arrayViagem = $solicitacaoViagem->listar();
                            foreach ($arrayViagem as $key => $viagens) {
                                echo '<tr>
                                <td>' . $viagens['empresa'] . '</td>
                                <td>' . $viagens['colaborador'] . '</td>
                                <td>' . $viagens['centro_custo'] . '</td>
                                <td>' . $viagens['data_solicitacao'] . '</td>
                                <td>' . $viagens['destino'] . '</td>
                                <td>' . $viagens['periodo'] . '</td>
                                <td>' . $viagens['motivo'] . '</td>
                                <td>' . $viagens['motorista'] . '</td>
                            </tr>';
                            }
                            echo '</tbody>
                            </table>';
                            break;

                        case "Fundo fixo":
                            echo '<table class="table table-striped responsive-utilities jambo_table">
                        <thead>
                            <tr>
                                <th>Empresa</th>
                                <th>Colaborador</th>
                                <th>Centro de Custo</th>
                                <th>Data Solicitação</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                        ';
                            ?>
                            <?php
                            $fundoFixo = new FundoFixoController();
                            $arrayFixo = $fundoFixo->listar();
                            foreach ($arrayFixo as $key => $fixo) {
                                echo '<tr>
                                <td>' . $fixo['empresa'] . '</td>
                                <td>' . $fixo['colaborador'] . '</td>
                                <td>' . $fixo['departamento'] . '</td>
                                <td>' . $fixo['data_solicitacao'] . '</td>
                                <td>' . $fixo['valor'] . '</td>
                            </tr>';
                            }
                            echo '</tbody>
                            </table>';
                            break;
                        case "Outras":
                            echo '<table class="table table-striped responsive-utilities jambo_table">
                        <thead>
                            <tr>
                                <th>Empresa</th>
                                <th>Colaborador</th>
                                <th>Centro de Custo</th>
                                <th>Data Solicitação</th>
                                <th>Natureza</th>
                                <th>Diretor</th>
                                <th>Valor</th>
                                <th>Limite recebimento</th>
                                <th>Motivo</th>
                            </tr>
                        </thead>
                        <tbody>
                        ';
                            ?>
                            <?php
                            $outras = new OutrasSolicitacoesController();
                            $arrayOutras = $outras->listar();
                            foreach ($arrayOutras as $key => $out) {
                                echo '<tr>
                                <td>' . $out['empresa'] . '</td>
                                <td>' . $out['colaborador'] . '</td>
                                <td>' . $out['centro_custo'] . '</td>
                                <td>' . $out['data_solicitacao'] . '</td>
                                <td>' . $out['natureza'] . '</td>
                                <td>' . $out['diretor'] . '</td>
                                <td>' . $out['valor'] . '</td>
                                <td>' . $out['limite_rec'] . '</td>
                                <td>' . $out['motivo'] . '</td>
                            </tr>';
                            }
                            echo '</tbody>
                            </table>';
                            break;

                        default:
                            break;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PNotify -->
<script type="text/javascript" src="js/notify/pnotify.core.js"></script>
<script type="text/javascript" src="js/notify/pnotify.buttons.js"></script>
<script type="text/javascript" src="js/notify/pnotify.nonblock.js"></script>