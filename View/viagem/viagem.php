<?php
$colaborador = new ColaboradorController();
$arrayCol = $colaborador->listar();
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
                                <small>Dados da hospedagem</small>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#step-4">
                            <span class="step_no">4</span>
                            <span class="step_descr">
                                Passo 4<br />
                                <small>Ajuda de custo</small>
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="departamento">Centro de custo <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="departamento" name="departamento" class="select2_single form-control" tabindex="-1"required="required">
                                    <option> </option>
                                    <?php
                                    $centroCusto = new CentroDeCustoController();
                                    $array = $centroCusto->listar();
                                    foreach ($array as $key => $value) {
                                        echo '<option>' . $value['id'] . '  -  ' . $value['descricao'] . '</option>';
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
                        <div class="container">
                            <div class="table-responsive">
                                <!--                            Table-->
                                <table id="colaborador-table" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Colaborador</th>
                                            <th>CPF</th>
                                            <th>RG</th>
                                            <th>Data Nascimento</th>
                                            <th class="actions">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="5" style="text-align: left;">
                                                <button class="btn btn-large btn-success" onclick="AddColaborador(this)" type="button">Adicionar Colaborador</button>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <!--                            Fim Table-->
                            </div>
                        </div>
                    </div>

                    <div id="step-2">
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="motivoviagem">Motivo <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea id="motivoviagem" required="required" name="motivoviagem" class="form-control col-md-7 col-xs-12"></textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="obs">Observações <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea id="obs" required="required" name="obs" class="form-control col-md-7 col-xs-12"></textarea>
                            </div>
                        </div>
                        <div class="container">
                            <div class="table-responsive">
                                <!-- Table-->
                                <table id="viagem-table" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Origem</th>
                                            <th>Destino</th>
                                            <th>Horário Preferência</th>
                                            <th>Período</th>
                                            <th class="actions">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="4" style="text-align: left;">
                                                <button class="btn btn-large btn-success" onclick="AddViagem(this)" type="button">Adicionar Destino</button>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <!-- Fim Table-->
                            </div>
                        </div>
                    </div>
                    <div id="step-3">
                        <div class="container">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="local">Local do evento
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="local" name="local" data-validate-linked="local" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="table-responsive">
                                <!-- Table-->
                                <table id="hospedagem-table" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Cidades/Estado</th>
                                            <th>Entrada</th>
                                            <th>Saida</th>
                                            <th>Diárias</th>
                                            <th class="actions">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="5" style="text-align: left;">
                                                <button class="btn btn-large btn-success" onclick="AddHosp(this)" type="button">Adicionar Hospedagem</button>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <!-- Fim Table-->
                            </div>
                        </div>
                    </div>
                    <div id="step-4">
                        <div class="container">
                            <div class="table-responsive">
                                <!-- Table-->
                                <table id="despesa-table" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Despesa</th>
                                            <th>Quantidade</th>
                                            <th>Valor/Dia</th>
                                            <th>Total/Dia</th>
                                            <th class="actions">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="6" style="text-align: left;">
                                                <button class="btn btn-large btn-success" onclick="AddTableRow(this)" type="button">Adicionar Despesa</button>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <!-- Fim Table-->
                                <div class="form-group">
                                    <label class="control-label col-md-10 col-sm-6 col-xs-6" for="total">Total 
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="text" id="total" name="total" data-validate-linked="total" disabled="disabled" class="total form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--JS tabela colaborador-->
<script type="text/javascript">
    (function($) {

        RemoveColaborador = function(handler) {
            var tr = $(handler).closest('tr');

            tr.fadeOut(400, function() {
                tr.remove();
            });

            return false;
        };

        AddColaborador = function() {

            var newRow = $("<tr>");
            var cols = "";

            cols += '<td><select id="colaborador" name="colaborador[]" class="js-example-basic-single" tabindex="-1"><option disabled selected>Selecione o colaborador</option><?php
                                    foreach ($arrayCol as $key => $valuecol) {
                                        echo '<option>' . $valuecol['nome'] . '</option>';
                                    }
                                    ?></select></td>';

            cols += '<td><input type="text" name="cpf[]" class="form-control col-md-7 col-xs-12" disabled="disabled"></td>';

            cols += '<td><input type="text" name="rg[]" class="rg form-control col-md-7 col-xs-12" disabled="disabled"></td>';

            cols += '<td><input type="text" name="dataNasc" class="dataNasc form-control col-md-7 col-xs-12" disabled="disabled"></td>';

            cols += '<td class="actions">';
            cols += '<button class="btn btn-large btn-danger" onclick="RemoveColaborador(this)" type="button">Remover</button>';
            cols += '</td>';

            newRow.append(cols);

            $("#colaborador-table").append(newRow);
            
            $(".js-example-basic-single").select2();

            return false;
        };
    })(jQuery);
</script>


<!--JS tabela despesas-->
<script type="text/javascript">
    function id(el) {
        return document.getElementById(el);
    }
    function total(un, qnt) {
        return parseFloat(un.replace(',', '.'), 10) * parseFloat(qnt.replace(',', '.'), 10);
    }
    (function($) {

        RemoveTableRow = function(handler) {
            var tr = $(handler).closest('tr');

            tr.fadeOut(400, function() {
                tr.remove();
            });

            return false;
        };

        AddTableRow = function() {

            var newRow = $("<tr>");
            var cols = "";

            cols += '<td><input type="text" name="despesa[]" class="form-control col-md-7 col-xs-12"></td>';

            cols += '<td><input type="text" name="qnt" class="qnt form-control col-md-7 col-xs-12"></td>';

            cols += '<td><input type="text" name="valor_unitario" class="valor_unitario form-control col-md-7 col-xs-12"></td>';

            cols += '<td><input type="text" name="totalDia" class="totalDia form-control col-md-7 col-xs-12" disabled="disabled"></td>';

            cols += '<td class="actions">';
            cols += '<button class="btn btn-large btn-danger" onclick="RemoveTableRow(this)" type="button">Remover</button>';
            cols += '</td>';

            newRow.append(cols);

            $("#despesa-table").append(newRow);

            $(".valor_unitario").on('keyup', function() {
                var index = $("#despesa-table tbody tr").index($(this).parent().parent()) + 1;
                var qnt = $("#despesa-table tbody tr:nth-child(" + index + ") .qnt").val();
                var result = total($(this).val(), qnt);
                $("#despesa-table tbody tr:nth-child(" + index + ") .totalDia").val(String(result.toFixed(2)).formatMoney());
            });

            $(".qnt").on('keyup', function() {
                var index = $("#despesa-table tbody tr").index($(this).parent().parent()) + 1;
                var unitario = $("#despesa-table tbody tr:nth-child(" + index + ") .valor_unitario").val();
                var result = total($(this).val(), unitario);
                $("#despesa-table tbody tr:nth-child(" + index + ") .totalDia").val(String(result.toFixed(2)).formatMoney());
            });

            String.prototype.formatMoney = function() {
                var v = this;

                if (v.indexOf('.') === -1) {
                    v = v.replace(/([\d]+)/, "$1,00");
                }

                v = v.replace(/([\d]+)\.([\d]{1})$/, "$1,$20");
                v = v.replace(/([\d]+)\.([\d]{2})$/, "$1,$2");
                v = v.replace(/([\d]+)([\d]{3}),([\d]{2})$/, "$1.$2,$3");

                return v;
            };
            return false;
        };
    })(jQuery);
</script>

<!--JS tabela hospedagem-->
<script type="text/javascript">
    (function($) {

        RemoveHosp = function(handler) {
            var tr = $(handler).closest('tr');

            tr.fadeOut(400, function() {
                tr.remove();
            });

            return false;
        };

        AddHosp = function() {

            var newRow = $("<tr>");
            var cols = "";

            cols += '<td><select id="destino" name="destino" class="select2_single form-control" tabindex="-1"><option disabled selected>Selecione o destino></option><option >Acre </option><option >Alagoas</option><option >Amapá</option><option >Amazonas</option><option >Bahia</option><option >Ceará</option><option >Distrito Federal</option><option >Espírito Santo </option><option >Goiás </option><option >Maranhão</option><option >Mato Grosso</option><option >Mato Grosso do Sul</option><option >Minas Gerais</option><option >Pará</option><option >Paraíba</option><option >Paraná</option><option >Pernambuco</option><option >Piauí</option><option >Rio de Janeiro</option><option >Rio Grande do Norte </option><option >Rio Grande do Sul </option><option >Rondônia </option><option >Roraima </option><option >Santa Catarina</option><option >São Paulo</option><option >Sergipe </option><option >Tocantins</option></select></td>';

            cols += '<td><input type="text" name="entrada" class="dataHospIn form-control col-md-7 col-xs-12"></td>';

            cols += '<td><input type="text" name="saida" class="dataHospOut form-control col-md-7 col-xs-12"></td>';

            cols += '<td><input type="text" name="diarias" class="totalDia form-control col-md-7 col-xs-12" disabled="disabled"></td>';

            cols += '<td class="actions">';
            cols += '<button class="btn btn-large btn-danger" onclick="RemoveHosp(this)" type="button">Remover</button>';
            cols += '</td>';

            newRow.append(cols);

            $("#hospedagem-table").append(newRow);

            $('.dataHospIn').daterangepicker({
                "singleDatePicker": true,
                "locale": {
                    "format": "DD-MM-YYYY",
                    "separator": " - ",
                    "applyLabel": "Confirmar",
                    "cancelLabel": "Limpar",
                    "fromLabel": "Saída",
                    "toLabel": "Chegada",
                    "customRangeLabel": "Custom",
                    "daysOfWeek": [
                        "Dom",
                        "Seg",
                        "Ter",
                        "Qua",
                        "Qui",
                        "Sex",
                        "Sab"
                    ],
                    "monthNames": [
                        "Janeiro",
                        "Fevereiro",
                        "Março",
                        "Abril",
                        "Maio",
                        "Junho",
                        "Julho",
                        "Agosto",
                        "Setembro",
                        "Outubro",
                        "Novembro",
                        "Dezembro"
                    ],
                    "firstDay": 1
                },
                "opens": "center"
            }, function(start, end, label) {
                console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
            });
            $('.dataHospOut').daterangepicker({
                "singleDatePicker": true,
                "locale": {
                    "format": "DD-MM-YYYY",
                    "separator": " - ",
                    "applyLabel": "Confirmar",
                    "cancelLabel": "Limpar",
                    "fromLabel": "Saída",
                    "toLabel": "Chegada",
                    "customRangeLabel": "Custom",
                    "daysOfWeek": [
                        "Dom",
                        "Seg",
                        "Ter",
                        "Qua",
                        "Qui",
                        "Sex",
                        "Sab"
                    ],
                    "monthNames": [
                        "Janeiro",
                        "Fevereiro",
                        "Março",
                        "Abril",
                        "Maio",
                        "Junho",
                        "Julho",
                        "Agosto",
                        "Setembro",
                        "Outubro",
                        "Novembro",
                        "Dezembro"
                    ],
                    "firstDay": 1
                },
                "opens": "center"
            }, function(start, end, label) {
                console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
            });

            return false;
        };
    })(jQuery);
</script>

<!--JS tabela viagem-->
<script type="text/javascript">
    (function($) {

        RemoveViagem = function(handler) {
            var tr = $(handler).closest('tr');

            tr.fadeOut(400, function() {
                tr.remove();
            });

            return false;
        };

        AddViagem = function() {

            var newRow = $("<tr>");
            var cols = "";

            cols += '<td><select id="destino" name="origem" class="select2_single form-control" tabindex="-1"><option disabled selected>Selecione o destino></option><option >Acre </option><option >Alagoas</option><option >Amapá</option><option >Amazonas</option><option >Bahia</option><option >Ceará</option><option >Distrito Federal</option><option >Espírito Santo </option><option >Goiás </option><option >Maranhão</option><option >Mato Grosso</option><option >Mato Grosso do Sul</option><option >Minas Gerais</option><option >Pará</option><option >Paraíba</option><option >Paraná</option><option >Pernambuco</option><option >Piauí</option><option >Rio de Janeiro</option><option >Rio Grande do Norte </option><option >Rio Grande do Sul </option><option >Rondônia </option><option >Roraima </option><option >Santa Catarina</option><option >São Paulo</option><option >Sergipe </option><option >Tocantins</option></select></td>';

            cols += '<td><select id="destino" name="destino" class="select2_single form-control" tabindex="-1"><option disabled selected>Selecione o destino></option><option >Acre </option><option >Alagoas</option><option >Amapá</option><option >Amazonas</option><option >Bahia</option><option >Ceará</option><option >Distrito Federal</option><option >Espírito Santo </option><option >Goiás </option><option >Maranhão</option><option >Mato Grosso</option><option >Mato Grosso do Sul</option><option >Minas Gerais</option><option >Pará</option><option >Paraíba</option><option >Paraná</option><option >Pernambuco</option><option >Piauí</option><option >Rio de Janeiro</option><option >Rio Grande do Norte </option><option >Rio Grande do Sul </option><option >Rondônia </option><option >Roraima </option><option >Santa Catarina</option><option >São Paulo</option><option >Sergipe </option><option >Tocantins</option></select></td>';

            cols += '<td><input id="horario" class="form-control col-md-7 col-xs-12" name="horario" data-inputmask="\'mask\' : \'99:99\'" type="text"></td>';

            cols += '<td><input type="text" name="dataviagem" id="dataviagem"  class="dataviagem form-control"/></td>';

            cols += '<td class="actions">';
            cols += '<button class="btn btn-large btn-danger" onclick="RemoveViagem(this)" type="button">Remover</button>';
            cols += '</td>';

            newRow.append(cols);

            $("#viagem-table").append(newRow);

            $('input[name="dataviagem"]').daterangepicker({
                "locale": {
                    "format": "MM/DD/YYYY h:mm",
                    "separator": " - ",
                    "applyLabel": "Confirmar",
                    "cancelLabel": "Limpar",
                    "fromLabel": "Saída",
                    "toLabel": "Chegada",
                    "customRangeLabel": "Custom",
                    "daysOfWeek": [
                        "Dom",
                        "Seg",
                        "Ter",
                        "Qua",
                        "Qui",
                        "Sex",
                        "Sab"
                    ],
                    "monthNames": [
                        "Janeiro",
                        "Fevereiro",
                        "Março",
                        "Abril",
                        "Maio",
                        "Junho",
                        "Julho",
                        "Agosto",
                        "Setembro",
                        "Outubro",
                        "Novembro",
                        "Dezembro"
                    ],
                    "firstDay": 1
                },
                "opens": "left"
            }, function(start, end, label) {
                console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
            });

            $(document).ready(function() {
                $(":input").inputmask();
            });
            return false;
        };
    })(jQuery);
</script>