<?php
class isuc{
    public $bd;
    function __construct($mydb){
        $this->bd=$mydb;
    }
    public function insert_s($cne,$mot_de_passe){
        try {
            $hashed_password = password_hash($mot_de_passe, PASSWORD_DEFAULT);
            $sql="INSERT INTO Etudiant(CNE,MOT_DE_PASSE) Values (:nom_utili,:mot_d_pass)";
            $pdosql=$this->bd->prepare($sql);
            $pdosql->bindValue(':nom_utili',$cne);
            $pdosql->bindValue(':mot_d_pass',$hashed_password);
            $pdosql->execute();
            return 1;
        } catch (PDOException $th) {
            return $th->getMessage();
        }
    }
    public function insert_c($cne,$tab){
        try {
            $sql="INSERT INTO `Etudiant`(`CIN`, `NOM`, `PRENOM`, `DATE_DE_NAISSANCE`, `NOTE_BAC`, `S1`, `S2`, `S3`, `S4`, `ATTESTATION_REUSSITE`, `RELEVE`, `BAC`, `CIN_PHOTO`, `ADRESSE`,`Email`,`phone`,``) Values (";
            foreach($tab as $key=>$valeur){
                $sql.=$key.",";
            }
            $sql=$sql.")"."where CNE=$cne";
            $pdosql=$this->bd->prepare($sql);
            foreach($tab as $key=>$valeur){
                $pdosql->bindValue($key,$valeur);
            }
            $pdosql->execute();
            return 1;
            
        } catch (PDOException $th) {
            return $th->getMessage();
        }
    } 

    public function verifier($cne,$mot_passe)
    {
        try {
        $sql="SELECT MOT_DE_PASSE FROM Etudiant where (CNE=:cne)";
        $stmt=$this->bd->prepare($sql);
        $stmt->bindparam(':cne',$cne);
        $result=$stmt->execute();
        $r=$result->fetch(PDO::FETCH_OBJ);
        if($r->MOT_DE_PASSE==$mot_passe){return 1;}
        else{return 0;}
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
        

    }
    public function show($cne){
        $sql="SELECT * FROM Etudiant where CNE='$cne'";
        $result=$this->bd->query($sql);
        return $result->fetch(PDO::FETCH_ASSOC);
    }
    public function delete($id){
        try {
            $sql="Delete FROM personne WHERE id=:id";
            $stmt=$this->bd->prepare($sql);
            $stmt->bindparam(':id',$id);
            $stmt->execute();
            return true;
        }catch (PDOException $th) {
            echo $th->getMessage();
            return false;
        }}
}

?>