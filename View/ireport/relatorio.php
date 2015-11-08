<?php
//include 'Controller/CentroDeCustoController.class.php';
//include 'Controller/RelatorioController.class.php';
//include 'Controller/ViagemController.class.php';
//include 'Controller/FundoFixoController.class.php';
//include 'Controller/OutrasSolicitacoesController.class.php';
?>
<div class="x_content">

    <form class="form-horizontal form-label-left" novalidate method="POST" action="http://localhost/kaizen_2/index.php?content=relatorio">
        <span class="section">Relatório</span>

        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="departamento">Departamento <span class="required">*</span>
            </label>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <select id="departamento" name="departamento" class="select2_single form-control" tabindex="-1"required="required">
                    <option disabled selected>Escolha o centro de custo</option>
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
        <div class="ln_solid"></div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
                <button id="send" type="submit" class="btn btn-success" onclick="Buscar(this)">Pesquisar</button>
            </div>
        </div>
    </form>

    <div class="x_content">
        <canvas id="canvas_bar"></canvas>
    </div>
</div>
<script>
<?php
$reportFixo = new FundoFixoController();
$where = $_POST["departamento"];
$row = $reportFixo->reportFundoFixo("presidencia");
?>
    var dData = function () {
        return <?php echo $row; ?>;
//        return Math.round(Math.random() * 90) + 10
    };
    var barChartData = {
        labels: ["Viagem", "Fundo Fixo", "Outras"],
        datasets: [
            {
                fillColor: "#26B99A", //rgba(220,220,220,0.5)
                strokeColor: "#26B99A", //rgba(220,220,220,0.8)
                highlightFill: "#36CAAB", //rgba(220,220,220,0.75)
                highlightStroke: "#36CAAB", //rgba(220,220,220,1)
                data: ["1", dData(), "8"]
            },
        ],
    }

    $(document).ready(function () {
        new Chart($("#canvas_bar").get(0).getContext("2d")).Bar(barChartData, {
            tooltipFillColor: "rgba(51, 51, 51, 0.55)",
            responsive: true,
            barDatasetSpacing: 6,
            barValueSpacing: 5
        });
    });
</script>