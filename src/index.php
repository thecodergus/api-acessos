<?php
include_once "./geIp.php";

echo "Ola Mundo"; 
echo "Ola Mundo"; 
echo "<h1>" . get_client_ip()."<h1>";

echo "<h1>".$_SERVER['REMOTE_ADDR']."</h1>";
echo "<h1>".$_SERVER['REMOTE_HOST']."</h1>";
echo "<h1>".$_SERVER['HTTP_X_FORWARDED_FOR']."</h1>";
echo "<h1>".$_SERVER['HTTP_CLIENT_IP']."</h1>";
echo "<h1>".$_SERVER['HTTP_USER_AGENT']."</h1>";

?>