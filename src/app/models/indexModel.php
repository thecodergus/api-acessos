<?php
namespace models\index;

use PDO;
use PDOException;

Class IndexModel {
    function __construct(){
        require __DIR__ . "/../config/configDB.php";
        try{
            $this->connection = new PDO("mysql:host=" . $host . ";dbname=" . $db_name . ";charset=utf8", "" . $user . "", "" . $password . "");
        }catch(PDOException $e){
            die($e);
        }
    }

    public function insert($ip){
        $insetIpQuery = "INSERT INTO `access` (`IpAddress`, `accesscol1`) VALUES (INET_ATON('" . $ip . "'), NOW())";

        return $this->connection->query($insetIpQuery);
    }

    public function select($ip){
        $querySelect = "SELECT accesscol1 AS Data FROM access WHERE IpAddress = INET_ATON('" . $ip . "')";

        $responseBD = $this->connection->query($querySelect)->fetchAll();

        $result = Array();
        foreach($responseBD as $r){
            $result[] = $r['Data'];
        }

        return $result;
    }

    public function closeConnection(){
        $this->connection = null;
    }
}