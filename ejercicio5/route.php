<?php
    require_once 'calcular.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'multiplicar':
        if (isset($params[1])) {
            showOperacion($params[1], $params[2], $params[0]);
        } else {
            showOperacion(null, null, $params[0]);
        }
        break;
    
    default:
        # code...
        break;
}
