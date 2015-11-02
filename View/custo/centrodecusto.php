<div class="x_content">
    <form class="form-horizontal form-label-left" novalidate method="POST" action="http://localhost/kaizen_2/index.php?Controller=CentroDeCusto&Action=salvar">
        <span class="section">Cadastro de Centro de Custo</span>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id">Centro de Custo <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="id" class="form-control col-md-7 col-xs-12" name="id" required="required" type="text">
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="descricao">Descricao <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="descricao" class="form-control col-md-7 col-xs-12" name="descricao" required="required" type="text">
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