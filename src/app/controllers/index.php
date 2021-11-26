<?php
namespace controllers\index;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require __DIR__ . "/../models/indexModel.php";
use models\index\IndexModel;

class IndexController{
    public function __invoke(Request $request, Response $response, $args){
        $ipAddress = $request->getAttribute('ip_address');

        $response->getBody()->write("Eae");

        return $response;
    }
}