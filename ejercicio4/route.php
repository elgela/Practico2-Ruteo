<?php

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


// accion que viene por parametro
$action = 'home'; // por defecto

if (!empty($_GET['action'])) { // la reemplazamos si viene definida
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

// parsea la acción
$params = explode("/", $action);

// determina que camino seguir según la acción
switch($params[0]) {
    case 'usuarios':
        getUsuarios();
        break;
    case 'nuevoUsuario':
        newUsuario();
        break;
    case 'DNI':
        if (isset($params[1])) {
            getUsuarios($params[1]);
        } else {
            getUsuarios();
        }
        break;
        
}

function getUsuarios() {
    require_once 'header.php';
}

function newUsuario() {
    require_once 'header.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['nombre'];
        $dni = $_POST['dni'];
    }
}

