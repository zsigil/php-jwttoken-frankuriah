<?php
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\App;
use app\Controllers\GuestEntryController;

return function(App $app){
    $app->post('/create-guest', [GuestEntryController::class, 'createGuest']);
};
?>