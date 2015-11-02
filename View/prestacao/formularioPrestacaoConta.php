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
    <div class="table-responsive">
        <!-- Table-->
        <table id="despesa-table" class="table table-bordered">
            <thead>
                <tr>
                    <th>Solicitação</th>
                    <th>Departamento</th>
                    <th>Centro de custo</th>
                    <th>Conta</th>
                    <th>Nº Conta</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="6" style="text-align: left;">
                        <button class="btn btn-large btn-success" onclick="AddTableRow(this)" type="button">Adicionar Solicitação</button>
                    </td>
                </tr>
            </tfoot>
        </table>
        <!-- Fim Table-->
    </div>
</div>