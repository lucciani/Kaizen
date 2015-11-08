<div class="">
    <div class="row top_tiles">
        <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-automobile"></i>
                </div>
                <div class="count">
                    <?php
                    $numViagem = new ViagemController();
                    $qntViagem = $numViagem->countReg();
                    echo $qntViagem;
                    ?>
                </div>

                <h3>Viagem</h3>
            </div>
        </div>
        <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-ambulance"></i>
                </div>
                <div class="count"> 
                    <?php
                    $numFixo = new FundoFixoController();
                    $qntFixo = $numFixo->countReg();
                    echo $qntFixo;
                    ?>
                </div>

                <h3>Fundo fixo</h3>
            </div>
        </div>
        <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-sort-amount-desc"></i>
                </div>
                <div class="count">
                    <?php
                    $numOutras = new OutrasSolicitacoesController();
                    $qntOutras = $numOutras->countReg();
                    echo $qntOutras;
                    ?>
                </div>

                <h3>Outras</h3>
            </div>
        </div>
    </div>
</div>
