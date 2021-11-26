<?php

use Slim\App;

require __DIR__ . "/../controllers/index.php";
use controllers\index\IndexController;


return function (App $app){
    $app->any('/', IndexController::class);
};