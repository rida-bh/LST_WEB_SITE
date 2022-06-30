<?php 
session_start();
require_once 'bdd/bs.php';
$cne=$_POST['cne-su'];
$mdp=$_POST['password-su'];
$_SESSION["cne_session"]=$cne;
$v=$isuc->insert_s($cne,$mdp);
 if($v){

    header("location: formulaire.php") ;
 }
 else{
     echo v;
 } 
?>