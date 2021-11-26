<?php
namespace controllers\index;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require __DIR__ . "/../models/indexModel.php";
use models\index\IndexModel;

Class IndexController{
    public function __invoke(Request $request, Response $response, $args){
        $ipAddress = $request->getAttribute('ip_address');
        $userAgent = $request->getHeaders()["User-Agent"][0];
        $model = new IndexModel();

        $select = $model->select($ipAddress);

        $indexResponse = [
            "Ip" => $ipAddress,
            "User-Agent" => $userAgent,
            "Visits" => $select
        ];

        $model->insert($ipAddress);

        $response->getBody()->write(json_encode($indexResponse));

        return $response->withHeader('Content-Type', 'application/json');
    }
}