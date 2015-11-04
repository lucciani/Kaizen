<?php
session_start();
if (isset($_GET["Controller"])) {
    include "Controller/" . $_GET["Controller"] . "Controller.class.php";

    $class = $_GET["Controller"] . "Controller";

    eval("\$Controller = new $class();");
    if (isset($_GET["Action"])) {
        eval("\$Controller->\$_GET['Action']();");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include './View/section/header.php'; ?>
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="index.php" class="site_title"><i class="fa fa-bank"></i> <span>CashGcop</span></a>
                        </div>
                        <div class="clearfix"></div>
                        <br />
                        <!-- sidebar menu -->
                        <?php
                        include './View/menu/menusolicitante.php';
                        ?>
                        <!-- /sidebar menu -->
                    </div>
                </div>
                <!-- top navigation -->
                <?php
                include './View/section/navigation.php';
                ?>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
                    <?php
                    error_reporting(E_ERROR);
                    $menu = (isset($_GET['content'])) ? $_GET['content'] : '';
                    switch ($menu) {
                        case "home":
                            include 'View/solicitante/indexSolicitante.php';
                            ;
                            break;
                        case "solicitante":
                            include 'View/solicitante/cadastroSolicitante.php';
                            ;
                            break;
                        case "viagem":
                            include 'View/viagem/solicitacaoViagem.php';
                            ;
                            break;
                        case "fundoFixo":
                            include 'View/fixo/solicitacaoFundoFixo.php';
                            ;
                            break;
                        case "outros":
                            include 'View/outras/solicitacaoOutros.php';
                            ;
                            break;
                        case "consultar":
                            include 'View/content/consultarSolicitacao.php';
                            ;
                            break;
                        case "custo":
                            include 'View/custo/centrodecusto.php';
                            ;
                            break;
                        case "relatorio":
                            include 'View/ireport/relatorio.php';
                            ;
                            break;
                        case "prestacaoDeConta":
                            include 'View/prestacao/formularioPrestacaoConta.php';
                            ;
                            break;
                        case "sair":
                            echo '<script language = "JavaScript">
                            location.href = "login.php";
                            </script>';
                            break;
                        default:
                            include './pages/content/indexSolicitante.php';
                    }
                    ?>

                    <br />
                    <!-- footer content -->
                    <?php include 'View/section/footer.php'; ?>
                    <!-- /footer content -->
                </div>
                <!-- /page content -->

            </div>
        </div>
        <div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            </ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
        </div>
    </body>
</html>

