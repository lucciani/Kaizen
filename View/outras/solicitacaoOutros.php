<?php
include 'Controller/CentroDeCustoController.class.php';
include 'Controller/EmpresaController.class.php';
include 'Controller/ColaboradorController.class.php';
?>
<div class="x_content">
    <form class="form-horizontal form-label-left" novalidate method="POST" action="http://localhost/kaizen_2/index.php?Controller=OutrasSolicitacoes&Action=salvar">
        <span class="section">Outras solicitações</span>

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
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="natureza">Natureza <span class="required">*</span>
            </label>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <select id="natureza" name="natureza" class="select2_single form-control" tabindex="-1"required="required">
                    <option > </option>
                    <option value="AK">CCI</option>
                    <option value="HI">EDD</option>
                    <option value="CA">Fundação</option>
                    <option value="NV">OPOVO</option>
                    <option value="OR">SPR</option>
                </select>
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="diretor">Diretor <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="diretor" name="diretor" data-validate-linked="diretor" required="required" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="colaborador">Valor <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="valor" name="valor" data-validate-linked="valor" required="required" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="datareceber">Limite para recebimento <span class="required">*</span>
            </label>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <input type="text" id="datalimite" name="datareceber" data-validate-linked="datareceber" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="motivooutros">Motivo <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea id="motivooutros" required="required" name="motivooutros" class="form-control col-md-7 col-xs-12"></textarea>
            </div>
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
                <button id="send" type="submit" class="btn btn-success">Salvar</button>
            </div>
        </div>
    </form>
</div>