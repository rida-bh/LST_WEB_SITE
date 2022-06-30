<?php 
session_start();
require_once "bdd/bs.php";
try {
    $cne=$_POST["cne"];
    $pass=$_POST["password"];
    $_SESSION["cne_session"]=$cne;
    try {
        $sql="SELECT MOT_DE_PASSE FROM Etudiant where CNE='$cne'";
        $stmt=$isuc->bd->query($sql);
        $r=$stmt->fetch(PDO::FETCH_OBJ);
        if(password_verify($pass,$r->MOT_DE_PASSE)){
            header("location: base.php") ;
        }
        else{header("location: login-register.php?reponse=$pass");}
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    
} catch (PDOException $th) {
    echo $th->getMessage();
}


?>  