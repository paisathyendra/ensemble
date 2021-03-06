<?php

$injector = new \Auryn\Injector;

$injector->alias('Http\Request', 'Http\HttpRequest');
$injector->share('Http\HttpRequest');
$injector->define('Http\HttpRequest', [
    ':get' => $_GET,
    ':post' => $_POST,
    ':cookies' => $_COOKIE,
    ':files' => $_FILES,
    ':server' => $_SERVER,
]);

$injector->alias('Http\Response', 'Http\HttpResponse');
$injector->share('Http\HttpResponse');

$injector->share('PDO');
$injector->define('PDO', [
    ':dsn'      => 'mysql:host=localhost;dbname=ensemble',
    ':username' => 'root',
    ':password' => '',
]);

$injector->make('\Ensemble\Controllers\OrderController');

return $injector;

?>