<?php

$servername = "localhost";
$serveruser = "root";
$serverpass = "rock123";
$db = "chat";


$connection = new mysqli($servername, $serveruser, $serverpass, $db);

if ($connection->connect_error) {
    die("Connection failure: " 
        . $connection->connect_error);
}

echo 'connect ok'


?>