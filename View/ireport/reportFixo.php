<?php

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
        $arrayFixo = $fundoFixo->reportFundoFixo();
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
        