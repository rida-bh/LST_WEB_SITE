<?php
$host="localhost:8889";
$db="lst irm";
$charset="utf8mb4";
$pass="root";
$user="root";
$dns="mysql:host=$host;dbname=$db;charset=$charset";

try{
 $pdo=new PDO($dns,$user,$pass);
 $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    throw new PDOException($e->getMessage());
}
require_once 'isuc.php';
$isuc=new isuc($pdo);
?>