<?php
$server = "localhost:3306";
$dbName = "chat";
$user = "root";
$pass = "";

try {
    $db = new PDO("mysql:host=$server;dbname=$dbName", "$user", "$pass");
}catch (PDOException $exception){
    $exception->getMessage();
}