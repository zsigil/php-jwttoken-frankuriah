<?php

namespace app\Controllers;

use app\Models\GuestEntry;
use app\Requests\CustomRequestHandler;
use app\Response\CustomResponse;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\RequestInterface as Request;

class GuestEntryController
{
    protected $customResponse;
    protected $guestEntry;

    public function __construct()
    {
        $this->customResponse = new CustomResponse();
        $this->guestEntry = new GuestEntry();
    }

    public function createGuest(Request $request, Response $response){
        // $name = CustomRequestHandler::getParam($request, "name");
        // $responseMessage = $name;
        // return $this->customResponse->is200Response($response, $responseMessage);

        $this->guestEntry->create([
            "full_name"=>CustomRequestHandler::getParam($request, "full_name"),
            "email"=>CustomRequestHandler::getParam($request, "email"),
            "comment"=>CustomRequestHandler::getParam($request, "comment"),
        ]);

        $responseMessage = "Guest entry data created successfully";
        return $this->customResponse->is200Response($response, $responseMessage);
    }
}
?>