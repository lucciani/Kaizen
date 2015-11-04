<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'Controller/FundoFixoController.class.php';
        
        $fixo = new FundoFixoController();
        $fixo->getId($id);
        var_dump($fixo);
        ?>
    </body>
</html>
