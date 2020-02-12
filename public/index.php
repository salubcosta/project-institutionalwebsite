<?php
require __DIR__.'/../bootstrap.php';

$url = explode('/', $_GET['url']);
unset($url[0]);

$url = array_values($url);

$controller = (isset($url[0]) && !empty($url[0])) ? $url[0] : 'home';
$action = (isset($url[1]) && !empty($url[1])) ? $url[1] : 'index';

if(!class_exists('App\Controller\\'. ucfirst($controller).'Controller')) $controller = 'notfound';

$controller = 'App\Controller\\'. ucfirst($controller).'Controller';

$controller = new $controller;

if(!method_exists($controller, $action)) $action = 'index';

$params = array();

if(isset($url[2]))
{
    unset($url[0], $url[1]);
    $params = array_values($url);
}

print $controller->$action($params);