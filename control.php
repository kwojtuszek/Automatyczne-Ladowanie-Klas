<?php
require_once 'init.php';

switch ($action) {
    default :
        $control = new app\controllers\CalcControl();
        $control -> generateView();
    break;
    case 'calcCalculate' :
        $control = new app\controllers\CalcControl();
        $control -> calculate();
    break;
}