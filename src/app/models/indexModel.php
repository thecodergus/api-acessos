<?php
namespace models\index;

Class IndexModel {
    function __construct(){
        $this->bd = require __DIR__ . "/../config/connectDB.php";
    }

    public function insert($ip){
        $insetIpQuery = "INSERT INTO `access` (`IpAddress`, `accesscol1`) VALUES (?, ?)";
        $insertIpValues = [
            "INET_ATON(" . $ip . ")",
            "NOW()"
        ];
    }

    public function select(){
        $querySelect = "SELECT * FROM access";
        $resultSelect = $this->bd->prepare()->execute();
        
        return $resultSelect->fetchAll();
    }
}