<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-form.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/verify_file.js"></script>
    <title>Document</title>
    
</head>
<body>
    <section class="section-form " id="candidature">
        <div class="row">
            <h2 class="form-heading">Heureux de vous acceuillir</h2>
        </div>
        <div class="row">
            <form method="POST" action="candidature.php" class="contact-form" enctype="multipart/form-data"> 
                <div class="row">
                    <div class="col span_1_of_3">
                        <label for="name">Nom : </label>
                    </div>
                    <div class="col span_2_of_3">
                        <input type="text" name="nom" id="name" placeholder="Votre nom : " required>
                    </div>
                </div>
                <div class="row">
                    <div class="col span_1_of_3">
                        <label for="prenom">Prénom : </label>
                    </div>
                    <div class="col span_2_of_3">
                        <input type="text" name="prenom" id="prenom" placeholder="Votre prénom : " required>
                    </div>
                </div>
                <div class="row">
                    <div class="col span_1_of_3">
                        <label for="cin">CIN</label>
                    </div>
                    <div class="col span_2_of_3">
                        <input type="text" name="cin" id="cin" placeholder="Votre CIN" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col span_1_of_3">
                        <label for="email">Email : </label>
                    </div>
                    <div class="col span_2_of_3">
                        <input type="email" name="email" id="email" placeholder="Votre Email :" required>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col span_1_of_3">
                        <label for="phone">Numéro de téléphone : </label>
                    </div>
                    <div class="col span_2_of_3">
                        <input type="text" name="phone" id="phone" placeholder="Votre numéro de téléphone" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col span_1_of_3">
                        <label for="date-naissance">Date de naissance : </label>
                    </div>
                    <div class="col span_2_of_3">
                        <input type="date" name="date-naissance" id="date-naissance" placeholder="Votre date de naissance : dd/mm/yyyy" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col span_1_of_3">
                        <label for="bac-note">Note du Bac : </label>
                    </div>
                    <div class="col span_2_of_3">
                        <input type="number" name="bac-note" id="bac-note" placeholder="" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col span_1_of_3">
                        <label for="bac-pdf">Déposer votre bac : </label>
                    </div>
                    <div class="col span_2_of_3">
                        <input type="file" name="bac-pdf" id="bac-pdf" placeholder="" onchange="ValidateSingleInput(this)"; >
                    </div>
                </div>
                <div class="row">
                    <div class="col span_1_of_3">
                        <label for="note-s">Les notes des semestres du DEUST : </label>
                    </div>
                    <div class="col span_2_of_3">
                        <div class="semestre">
                        <input type="number" name="s1-note" id="deust-note" placeholder="S1:" required>
                        <input type="number" name="s2-note" id="deust-note" placeholder="S2:" required>
                        <input type="number" name="s3-note" id="deust-note" placeholder="S3:" required>
                        <input type="number" name="s4-note" id="deust-note" placeholder="S4:" required>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col span_1_of_3">
                        <label for="attestation-pdf">Déposer votre attestation de réussite : </label>
                    </div>
                    <div class="col span_2_of_3">
                        <input type="file" name="attestation-pdf" id="attestation-pdf"  placeholder="" onchange="ValidateSingleInput(this)"; >
                    </div>
                </div>
                <div class="row">
                    <div class="col span_1_of_3">
                        <label for="releve-pdf">Déposer votre relevé de notes : </label>
                    </div>
                    <div class="col span_2_of_3">
                        <input type="file" name="releve-pdf" id="releve-pdf" placeholder="" onchange="ValidateSingleInput(this)"; >
                    </div>
                </div>
                <div class="row">
                    <div class="col span_1_of_3">
                        <label for="carte-pdf">Déposer votre Carte d'identité scannée : </label>
                    </div>
                    <div class="col span_2_of_3">
                        <input type="file" name="carte-pdf" id="carte-pdf" placeholder=""  onchange="ValidateSingleInput(this)"; >
                    </div>
                </div>
                <div class="row">
                    <div class="col span_1_of_3">
                        <label for="profil">Image pour profile :</label>
                    </div>
                    <div class="col span_2_of_3">
                        <input type="file" name="profil" id="profil" onchange="ValidateSingleInput(this)";>
                    </div>
                </div>
                <div class="row">
                    <div class="col span_1_of_3">
                        <label for="adresse">Adresse</label>
                    </div>
                    <div class="col span_2_of_3">
                        <textarea name="adresse" id="adresse" placeholder="Votre adresse"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col span_1_of_3">
                        <label>&nbsp;</label>
                    </div>
                    <div class="col span_2_of_3">
                        <input type="submit" value="Candidater">
                    </div>
                </div>
    
            </form>
        </div>
    </section>
</body>
</html>