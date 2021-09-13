<?php
use DI\Container;
use DI\Bridge\Slim\Bridge as SlimAppFactory;

require_once __DIR__.'/../vendor/autoload.php';

$container = new Container();
$app = SlimAppFactory::create($container);

$app->run();
?>