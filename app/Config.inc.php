<?php
// AUTO LOAD DE CLASSES ####################

function __autoload($class) {

    $cDir = ['Conn', 'Controller', 'Model', 'Dao', 'ValueObject'];
    $iDir = null;

    foreach ($cDir as $dirName):
        if (!$iDir && file_exists(__DIR__ . "\\{$dirName}\\{$class}.class.php") && !is_dir(__DIR__ . "\\{$dirName}\\{$class}.class.php")):
            include_once (__DIR__ . "\\{$dirName}\\{$class}.class.php");
            $iDir = true;
        endif;
    endforeach;

    if (!$iDir):
        trigger_error("Não foi possível incluir {$class}.class.php", E_USER_ERROR);
        die;
    endif;
}
