<?php

namespace app\Controllers;

use app\Response\CustomResponse;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\RequestInterface as Request;

class GuestEntryController
{
    protected $customResponse;

    public function __construct()
    {
        $this->customResponse = new CustomResponse();
    }

    public function createGuest(Request $request, Response $response){
        $responseMessage = "This route works";
        return $this->customResponse->is200Response($response, $responseMessage);
    }
}
?>