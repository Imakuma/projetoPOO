<?php

$host = "mysql:host=localhost;dbname=sistemapoo;charset=utf8mb4;port=8889";
$dbUser = "root";
$dbPass = "root";

try{

    $con = new PDO($host,$dbUser, $dbPass);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

} catch(PDOException $e){

    echo "estamos em manutenção";

    echo "Connection failed: " . $e->getMessage();


}

?>