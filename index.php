<?php

defined('APPLICATION_PATH') ||
define('APPLICATION_PATH', realpath(dirname(__FILE__)));

set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH . '/library'),
    get_include_path(),
)));

// autoload
function __autoload($class) {
    include str_replace('_', '/', $class) . '.php';
}

// sessions
session_start();

// router
$accepted_requests = array(
    ''           => 'Actions_Home',
    'inicio'     => 'Actions_Home',
    'acceder'    => 'Actions_Login',
);

// view
$view = new View();
$view->setLayoutPath(APPLICATION_PATH . '/templates');
$view->setLayout('/layout.php');

if (!isset($_GET['page'])) {
    $controller = new Actions_Home($view, 'home');
} else {
    $request = $_GET['page'];
    if (array_key_exists($request, $accepted_requests)) {
        if (empty($request)) {
            $request = 'inicio';
        }
        $controller = new $accepted_requests[$request]($view, $request);
    } else {
        $controller = new Actions_404($view, '404');
    }
}

$controller->run();
$controller->layout();

echo $controller->view->render();
