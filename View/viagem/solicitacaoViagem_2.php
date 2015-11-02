<?php
include 'Controller/CentroDeCustoController.class.php';
include 'Controller/EmpresaController.class.php';
include 'Controller/ColaboradorController.class.php';
?>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Solicitação para viagem </h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <!-- Smart Wizard -->
            <div id="wizard" class="form_wizard wizard_horizontal">
                <ul class="wizard_steps">
                    <li>
                        <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                Passo 1<br />
                                <small>Dados cooportativos</small>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                Passo 2<br />
                                <small>Dados da viagem</small>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                Passo 3<br />
                                <small>Dados das despesas</small>
                            </span>
                        </a>
                    </li>
                </ul>
                <form class="form-horizontal form-label-left">
                    <div id="step-1">
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="empresa">Empresa <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="empresa" name="empresa" class="select2_single form-control" tabindex="-1"required="required">
                                    <option > </option>
                                    //<?php
                                    $empresa = new EmpresaController();
                                    $arrayEm = $empresa->listar();
                                    foreach ($arrayEm as $key => $valueEm) {
                                        echo '<option>' . $valueEm['descricao'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="colaborador">Colaborador <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="colaborador" name="colaborador" class="select2_single form-control" tabindex="-1"required="required">
                                    <option > </option>
                                    //<?php
                                    $col = new ColaboradorController();
                                    $arrayCol = $col->listar();
                                    foreach ($arrayCol as $key => $valueCol) {
                                        echo '<option>' . $valueCol['nome'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="departamento">Centro de custo <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="departamento" name="departamento" class="select2_single form-control" tabindex="-1"required="required">
                                    <option> </option>
                                    <?php
                                    $centroCusto = new CentroDeCustoController();
                                    $array = $centroCusto->listar();
                                    foreach ($array as $key => $value) {
                                        echo '<option>' . $value['descricao'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="datesolicitacao">Data de Solicitação <span class="required">*</span>
                            </label>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <input type="text" id="dataind" name="datesolicitacao" data-validate-linked="datesolicitacao" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                    </div>
                    <div id="step-2">
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="destino">Destino <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="destino" name="destino" class="select2_single form-control" tabindex="-1"required="required">
                                    <option> </option>
                                    <option >Acre </option>
                                    <option >Alagoas</option>
                                    <option >Amapá</option>
                                    <option >Amazonas</option>
                                    <option >Bahia</option>
                                    <option >Ceará</option>
                                    <option >Distrito Federal</option>
                                    <option >Espírito Santo </option>
                                    <option >Goiás </option>
                                    <option >Maranhão</option>
                                    <option >Mato Grosso</option>
                                    <option >Mato Grosso do Sul</option>
                                    <option >Minas Gerais</option>
                                    <option >Pará</option>
                                    <option >Paraíba</option>
                                    <option >Paraná</option>
                                    <option >Pernambuco</option>
                                    <option >Piauí</option>
                                    <option >Rio de Janeiro</option>
                                    <option >Rio Grande do Norte </option>
                                    <option >Rio Grande do Sul </option>
                                    <option >Rondônia </option>
                                    <option >Roraima </option>
                                    <option >Santa Catarina</option>
                                    <option >São Paulo</option>
                                    <option >Sergipe </option>
                                    <option >Tocantins</option>
                                </select>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="periodoviagem">Período da viagem <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" style="width: 200px" name="reservation" id="dataviagem" class="form-control" />
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="motivoviagem">Motivo <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea id="motivoviagem" required="required" name="textarea" class="form-control col-md-7 col-xs-12"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="motorista">Motorista <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="motorista" name="motorista" data-validate-linked="colaborador" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                    </div>
                    <div id="step-3">
                        <div class="container">
                            <form><!-- Form das despesas-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="despesa">Despesa <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="despesa" name="despesa" data-validate-linked="despesa" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="quantidade">Quantidade <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <input type="text" id="quantidade" name="quantidade" data-validate-linked="quantidade" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="valorDia">Valor/Dia <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <input type="text" id="valorDia" name="valorDia" data-validate-linked="valorDia" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button id="send" type="submit" class="btn btn-success">Adicionar</button>
                                    </div>
                                </div>
                            </form><!-- Form das despesas-->
                        </div>

                </form>
                <div class="x_content">
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Despesas</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table class="table table-striped responsive-utilities jambo_table" id="example">
                                    <thead>
                                        <tr>
                                            <th>Despesa</th>
                                            <th>Quantidade</th>
                                            <th>Valor/Dia</th>
                                            <th>Total/Dia</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
//                                        $despesas = new CentroDeCustoController();
//                                        $array = $centroCusto->listar();
//                                        foreach ($array as $key => $value):
//                                            echo '<tr>
//                                <td>' . $value['descricao'] . '</td>
//                                <td>' . $value['quantidade'] . '</td>
//                                <td>' . $value['valor_un'] . '</td>
//                                <td>' . $value['valor'] . '</td>
//                            </tr>';
//                                        endforeach
                                        ?>
                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>
                </div><!-- Div table -->
                <div class="form-group">
                    <label class="control-label col-md-9 col-sm-6 col-xs-6" for="total">Total
                    </label>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <input type="text" id="total" name="total" value="alguma coisa pra teste" disabled="disabled" data-validate-linked="totalDia" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
            </div><!--Fim Div contedo 3 -->
        </div>
    </div>
</div>

<script type="text/javascript">

    (function ($) {

        RemoveTableRow = function (handler) {
            var tr = $(handler).closest('tr');

            tr.fadeOut(400, function () {
                tr.remove();
            });

            return false;
        };

        AddTableRow = function () {

            var newRow = $("<tr>");
            var cols = "";

            cols += '<td><input type="text" name="despesa" class="form-control col-md-7 col-xs-12"></td>';

            cols += '<td><input type="text" name="quantidade" class="form-control col-md-7 col-xs-12"></td>';

            cols += '<td><input type="text" name="valorDia" class="form-control col-md-7 col-xs-12"></td>';

            cols += '<td><input type="text" name="totalDia" class="form-control col-md-7 col-xs-12"></td>';

            cols += '<td class="actions">';
            cols += '<button class="btn btn-large btn-danger" onclick="RemoveTableRow(this)" type="button">Remover</button>';
            cols += '</td>';

            newRow.append(cols);

            $("#despesa-table").append(newRow);

            return false;
        };
    })(jQuery);
</script>