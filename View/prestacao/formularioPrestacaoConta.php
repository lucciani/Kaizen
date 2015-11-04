<?php
include 'Controller/CentroDeCustoController.class.php';
include 'Controller/EmpresaController.class.php';
$centroCusto = new CentroDeCustoController();
$array = $centroCusto->listar();
$empresa = new EmpresaController();
$arrayEm = $empresa->listar();
?>
<div class="x_content">
    <form class="form-horizontal form-label-left" novalidate method="POST" action="">
        <span class="section">Formulário prestação de conta</span>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="vlOrcado">Valor Orçado <span class="required">*</span>
            </label>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <input id="vlOrcado" class="form-control col-md-7 col-xs-12" name="vlOrcado" required="required" type="text">
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="vlEstornado">Valor Estornado <span class="required">*</span>
            </label>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <input id="vlEstornado" class="form-control col-md-7 col-xs-12" name="vlEstornado" required="required" type="text">
            </div>
        </div>

        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="motivo">Motivo <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea id="motivo" required="required" name="motivo" class="form-control col-md-7 col-xs-12"></textarea>
            </div>
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
            <div class="col-md-3 col-md-offset-3">
                <button id="send" type="submit" class="btn btn-success">Salvar</button>
                <button id="send" type="submit" class="btn btn-success">Gerar PDF</button>
            </div>
        </div>
    </form>
    <span class="section">Prestação de conta</span>
    <div class="container">
        <div class="table-responsive">

            <!-- Table-->
            <table id="despesa-table" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Empresa</th>
                        <th>Solicitação</th>
                        <th>Centro de Custo</th>
                        <th>Número da Conta</th>
                        <th>Valor</th>
                        <th class="actions">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="8" style="text-align: left;">
                            <button class="btn btn-large btn-success" onclick="AddTableRow(this)" type="button">Adicionar Despesa</button>
                        </td>
                    </tr>
                </tfoot>
            </table>
            <!-- Fim Table-->
        </div>
    </div>
</div>
<script type="text/javascript">

    function id(el) {
        return document.getElementById(el);
    }
    function total(un, qnt) {
        return parseFloat(un.replace(',', '.'), 10) * parseFloat(qnt.replace(',', '.'), 10);
    }
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

            cols += '<td><select id="empresa" name="empresa" class="select2_single form-control" tabindex="-1"><option disabled selected>Selecione a empresa</option><?php foreach ($arrayEm as $key => $valueEm) {
                                        echo '<option>' . $valueEm['descricao'] . '</option>';
                                    }?></select></td>';

            cols += '<td><input type="text" name="solicitacao[]" class="form-control col-md-7 col-xs-12"></td>';

            cols += '<td><select id="departamento" name="departamento" class="select2_single form-control" tabindex="-1"><option disabled selected>Selecione o centro de custo</option><?php foreach ($array as $key => $value) {
                                        echo '<option>'.$value['id'].'  -  ' . $value['descricao'] . '</option>';
                                    }?></select></td>';

            cols += '<td><select id="conta" name="conta" class="select2_single form-control" tabindex="-1"><option disabled selected>Selecione a natureza</option></select></td>';

            cols += '<td><input type="text" name="valor" class="totalDia form-control col-md-7 col-xs-12"></td>';

            cols += '<td class="actions">';
            cols += '<button class="btn btn-large btn-danger" onclick="RemoveTableRow(this)" type="button">Remover</button>';
            cols += '</td>';

            newRow.append(cols);

            $("#despesa-table").append(newRow);

            $(".valor_unitario").on('keyup', function () {
                var index = $("#despesa-table tbody tr").index($(this).parent().parent()) + 1;
                var qnt = $("#despesa-table tbody tr:nth-child(" + index + ") .qnt").val();
                var result = total($(this).val(), qnt);
                $("#despesa-table tbody tr:nth-child(" + index + ") .totalDia").val(String(result.toFixed(2)).formatMoney());
            });

            $(".qnt").on('keyup', function () {
                var index = $("#despesa-table tbody tr").index($(this).parent().parent()) + 1;
                var unitario = $("#despesa-table tbody tr:nth-child(" + index + ") .valor_unitario").val();
                var result = total($(this).val(), unitario);
                $("#despesa-table tbody tr:nth-child(" + index + ") .totalDia").val(String(result.toFixed(2)).formatMoney());
            });

            String.prototype.formatMoney = function () {
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