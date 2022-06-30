<?php 
session_start();
try{
require_once "bdd/bs.php";
require_once "upload_files.php";
if(isset($_SESSION["cne_session"])){
        $cnee=$_SESSION["cne_session"];
                $cin=$_POST['cin'];
                $nom=$_POST['nom'];
                $prenom=$_POST['prenom'];
                $date_de_naissance=$_POST['date-naissance'];
                $note_bac=$_POST['bac-note'];
                $email=$_POST['email'];
                $phone=$_POST['phone'];
                $s1=$_POST['s1-note'];
                $s2=$_POST['s1-note'];
                $s3=$_POST['s1-note'];
                $s4=$_POST['s1-note'];
                $adresse=$_POST['adresse'];
                $attestation=$target_file["attestation-pdf"];
                $profil=$target_file["profil"];
                $bac=$target_file["bac-pdf"];
                $releve=$target_file["releve-pdf"];
                $cin_photo=$target_file["carte-pdf"];
                try{
                $sql = "UPDATE Etudiant SET CIN='$cin',NOM='$nom',PRENOM='$prenom',DATE_DE_NAISSANCE='$date_de_naissance'
                ,NOTE_BAC=$note_bac,S1=$s1,S2=$s2,S3=$s3,S4=$s4,ADRESSE='$adresse',Email='$email',phone='$phone',ATTESTATION_REUSSITE='$attestation',
                RELEVE='$releve',BAC='$bac',CIN_PHOTO='$cin_photo',profile_image='$profil' WHERE CNE='$cnee'";
                // Prepare statement
                $stmt = $isuc->bd->prepare($sql);
                $stmt->execute();
                header("location: base.php");
                $isuc->bd=null;
                }
                 catch (PDOException $th) {
            return $th->getMessage();
        }
                
}
else {
     echo 'erreuuuur';
}
}
catch(PDOException $e){
echo 'ERROR: '.$e->getMessage();
}

?>