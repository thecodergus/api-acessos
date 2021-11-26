<?php

return function(){
    $host = "mysql";
    $user = "root";
    $password = "root";
    $db_name = "api";

    try {
        $pdo = new PDO("mysql:host=" . $host . ";dbname=" . $db_name . ";charset=utf8", "" . $user . "", "" . $password . "");
    } catch (PDOException $e){
        $response = [
            "status" => "error",
            "message" => $e->getMessage()
        ];

        die(json_encode($response));
    } catch (ValueError $ve) {
        var_dump($ve->getMessage());
    }

    return $pdo;
};