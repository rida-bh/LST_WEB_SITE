<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"> 
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ORGANISATION MODULAIRE DE LA FILIERE.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/DESCRIPTIF DE MODULE.css">
	<title>LST IRM-licence en Sciences et Techniques Informatique Réseau et Multimédia </title>
</head>
<body>
        <header id="home">
        	<nav>
                <div class="row">
                    <img src="images/fstm_logo.png" alt="FSTM logo" class="logo">
                    <ul class="main-nav js--main-nav">
                        <li><a href="#home">ACCEUIL</a>
                        <li><a href="#formation">FORMATION</a>
                        <li><a href="#programme">PROGRAMME</a>
                        <li><a href="#et-apres">ET APRES</a>
                        <li><a href="#contact">CONTACT</a>
                        <?php 
                        if (isset($_SESSION['cne_session'])) {
                            echo "<li><a href='profile.php'>PROFIL</a>";
                            echo "<li><a href='logout.php'>DECONNEXION</a>";
        
                        }
                        else {
                            
                            echo "<li><a href='login-register.php'>SE CONNECTER</a>";
                        }
                        ?>
                    </ul>
                </div>
            </nav>
            <div class="header-box">
	            <div class="header-text-box">
	                <h1>LST IRM</h1>
                    <h3>Licence Sciences et Techniques en Informatique Réseau et Multimédia</h3>
	                <h2>Le bon chemin vers la réussite</h2>
	            </div>
               <!-- Slideshow container -->
               <h2 class="news-heading">Actualités:</h2>
                    <div class="slideshow-container">
                        <!-- Full-width slides/quotes -->
                        <div class="mySlides">
                            <p>Master Sciences et Techniques : Résultats définitifs du concours d'accèes AU 2020-2021 .</p>
                            <p><a href="https://www.fstm.ac.ma/formation_initiale/mst.php">Savoir plus</a></p>
                         </div>
                        <div class="mySlides">
                        <p>Résultat final pour le recrutement d'un Professeur Assistant, spécialité Développement Web, Session 15-08-2021.
                        </p>
                        <p class="author"><a href="#">Résultat</a></p>
                      </div>
                    
                        <div class="mySlides">
                        <p>Inscription au Cycle Ingénieur d’Etat FST Mohammedia CNC-2020 et listes principales(AU : 2020-2021).
                         </p>
                         <p><a href="https://www.fstm.ac.ma/formation_initiale/ci.php">Savoir plus</a></p>
                        </div>
                        <!-- Next/prev buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <!-- Dots/bullets/indicators -->
                    <div class="dot-container">
                        <span class="dot" onclick="currentSlide(1)"></span> 
                        <span class="dot" onclick="currentSlide(2)"></span> 
                        <span class="dot" onclick="currentSlide(3)"></span> 
                    
                </div> 
             </div>                  
        </header>

                  
<section class="formation" id="formation">
    <div class="row">
        <h2 class="et-apres-heading">Objectif de  la formation</h2>

                    <p class="objectif-para">
                    	Le programme de la formation Licence en Sciences et Techniques IRM prépare à l’exercice du métier d’informaticien en techniques de développement et réseaux multimédia. 
Cette formation vise à fournir des connaissances en culture numérique qui implique l'usage des techniques de la société de l'information : l'informatique, le multimédia et l'internet, qui désormais irriguent tous les domaines économiques et sociaux. 
Les contenus des modules sont définis de sorte que les pré-requis nécessaires aux modules de chaque semestre soient acquis dans les modules des semestres qui les précèdent. Les contenus des modules qui relèvent d’un même champ disciplinaire sont ainsi organisés selon une progression graduelle.
Conformément aux grandes lignes tracées par le nouveau CNPN, le programme de la formation LST_IRM vise aussi à préparer les lauréats à l’accès à d’autres débouchés de formation en Masters de recherches afin d’accéder à un centre d’études doctorales. Ainsi que de développer, chez les étudiants, des connaissances professionnelles leurs permettant de réussir leurs tâches dans une entreprise.
iles,Programmation,Administration
                           Réseau...
                    </p>
    </div>
    <div class="row">
        <h2 class="et-apres-heading">Compétences à aquérir:</h2>
        <div class="competences">
<p>Cette formation, à travers l’ensemble d’acquis techniques et comportementaux, vise les quatre compétences suivantes :</p>
<ul>
<li><h5 class="titre">Les compétences Techniques : </h5>permettent de développer des connaissances opérationnelles ou acquis techniques pouvant être appliquées dans des situations de travail.</li>
<li><h5 class="titre"><strong>Les compétences scientifiques : </strong></h5>permettent de développer des connaissances scientifiques chez l’étudiant afin de poursuivre ses études en Master et s’inscrire dans un cursus de thèse.</li>
<li><h5 class="titre">Compétences professionnelles :</h5> permettent de développer des connaissances professionnelles chez les étudiants afin de réussir leurs tâches ou activités dans une entreprise.</li>
<li><h5 class="titre">Les compétences transversales : </h5>ou compétences générales portent sur des tâches de savoir se comporter et savoir se conduire dans un contexte professionnel ou scientifique. </li>
</ul>

<h4>Les compétences à acquérir par type :</h4>
<ul>
<h5 class="titre">Compétences techniques :</h5>
<li>Codage numérique des objets multimédia.</li>
<li>Conception d’applications multimédia.</li>
<li>Développement des applications multimédia sur plusieurs plateformes (mobile, web,…).</li>
<li>Administration et gestion des bases de données multimédia.</li>
<li>Configuration et gestion des nouveaux réseaux NGN (voix/vidéo sur IP).</li>
</ul>
<h5 class="titre">Compétences scientifiques :</h5>
<ul>
<li>Traitement numérique des données multimédia.</li>
<li>Résolution et analyse de situations à l’aide de méthodes mathématiques.</li>
<li>Critique des méthodologies scientifiques.</li>
<li>Interprétation des résultats obtenus.</li>
</ul>
<h5 class="titre">Compétences professionnelles :</h5>
<ul>
<li>Efficacité dans l’exercice d’une profession.</li>
<li>Intégration dans une équipe de travail.</li>
<li>Evolution et approfondissement des savoirs professionnels.</li>
<li>Mobilité professionnelle.</li>
</ul>
<h5 class="titre">Compétences transversales :</h5>
<ul>
    <li>Planifier le travail et gérer le temps.</li>
    <li>Communiquer dans un contexte de travail.</li>
    <li>Assurer la production et la gestion de documents.</li>
    <li>Utiliser des moyens de recherche d’emploi.</li>
</ul>
</div>
    </div>
    <div class="row">
        <h2 class="et-apres-heading">Débouchés de la formation</h2>
        <p>D’une part, le lauréat de la LST_IRM peut intervenir généralement pour le compte de 
            sociétés de services et d’ingénierie informatiques et dans de nombreux domaines
             applicatifs (industrie, gestion, loisirs…), et exercer diverses fonctions, 
            selon ses aptitudes et motivations autant que :</p>
        <ul>
            <li>Informaticien en Techniques de Développement Multimédia</li>
            <li>Informaticien en Réseau et Télécom Multimédia</li>
        </ul>
        <p>
            D’autre part, le lauréat de LST_IRM peut s’inscrire dans un cursus 
            de formation doctorale en poursuivant ses études en master fondamental
             ou de recherche dans le même établissement ou un autre externe. Et accéder
             finalement à un Centre des Etudes Doctorale CED pour préparer sa thèse.
        </p>
    </div>
    <div class="row">
        <h2 class="et-apres-heading">MODALITÉS D’ADMISSION AU SEMESTRE 5 DANS LE CADRE DES PASSERELLES</h2>
        <p>
            Pour être admis au programme de Licence Sciences et Techniques Informatiques, Réseaux et Multimédia, il faut satisfaire aux conditions suivantes :</br>
<ul>
<li><strong>Niveau requis :</strong>Titulaire d'un DEUST MIP ou DEUG SMI.</li>
<li><strong>pré-requis pédagogiques :</strong></li>
    <ul>
<li> Programme du DEUST MIP.</li>
<li> Programme du DEUG SMI.</li></ul>
<li><strong>Procédure de sélection :</strong></li>
<li><strong>Sélection sur dossier :</strong>
La sélection des candidats se fait à leur demande sur la base de leurs dossiers scolaires. Les dossiers sont examinés par la commission de recrutement de l’établissement qui, après étude de dossier peut décider d’autoriser le candidat à s’inscrire.
</li>
</ul>
        </p>
    </div>
    <div class="row">
        <h2 class="et-apres-heading">ARTICULATION DE LA FILIERE AVEC LES FORMATIONS DISPENSÉES AU NIVEAU DE L’UNIVERSITÉ </h2>
        <div class="articul">
        <p>La filière LST_IRM prépare les élèves à l’intégration d’une filière de spécialité du cycle 
            ingénieur ou de masters à la FSTM ou dans
            une autre école d’ingénieurs ou Faculté des Sciences au Maroc ou dans un pays étranger.</p>
            <h5 class="titre">Filière d’Ingénieurs à la FSTM :</h5>
            <ul>
                <li>ILIS (Département Informatique, Faculté des Sciences et Techniques de Mohammedia).</li>
                <li>GET (Département Génie Electrique, Faculté des Sciences et Techniques de Mohammedia).</li>
                <li>GMI (Département Mathématiques, Faculté des Sciences et Techniques de Mohammedia).</li>
            </ul>
            <h5 class="titre">Filière d’Ingénieurs des grandes écoles d’ingénieurs </h5>
            <h5 class="titre">Masters:</h5>
            <ul>
                <li>Traitement de l’Information (Faculté des Sciences Ben M’Sik).</li>
                <li>Celui en préparation en étroite collaboration entre les départements Informatique et Mathématiques de la Faculté des Sciences et Techniques de Mohammedia.</li>
                <li>D’autres Masters dans les domaines de l’Informatique et des Nouvelles Technologies de l’Information.</li>
            </ul>
        </div>
    </div>
    <h2 class="et-apres-heading" id="programme">ORGANISATION MODULAIRE DE LA FILIÈRE</h2>
    <div class="row" >
        <table class="mon_tableau">
            <thead>
                <tr>
                    <th rowspan="2">Semestre</th>
                    <th rowspan="2">Liste des Modules</th>
                    <th rowspan="2">VH Global du module</th>
                    <th rowspan="2">Département dont relève le module</th>
                    <th colspan="4" class="cord">Coordonnateur du module</th>
                </tr>
                <tr>
                    <th class="cord">Nom et prénom</th>
                    <th>Etablissement</th>
                    <th>Département</th>
                    <th>Spécialité</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="6" class="activecolomn s6_vh">s5</td>
                    <td>M25 : Traitement Numérique de l'Information Multimédia</td>
                    <td class="activecolomn">56 h</td>
                    <td>Département Informatique</td>
                    <td>ADIB Abdellah</td>
                    <td>Faculté Sciences et Techniques Mohammedia</td>
                    <td>Département Informatique</td>
                    <td>Informatique et Traitement de l’information</td>
                </tr>
                <tr>
                    <td>M26 : Technologie Web pour le Multimédia</td>
                    <td class="activecolomn">56 h</td>
                    <td>Département Informatique</td>
                    <td>MOUMKINE Noureddine</td>
                    <td>Faculté Sciences et Techniques Mohammedia</td>
                    <td>Département Informatique</td>
                    <td>Informatique</td>
                </tr>
                <tr>
                    <td>M27 : Théorie de l’Information</td>
                    <td class="activecolomn">56 h</td>
                    <td>Département Informatique</td>
                    <td>KHADIR Omar</td>
                    <td>Faculté Sciences et Techniques Mohammedia</td>
                    <td>Département Mathématiques</td>
                    <td>Mathématiques</td>
                </tr>
                <tr>
                    <td>M28 : Base de données Multimédia</td>
                    <td class="activecolomn">56 h</td>
                    <td>Département Informatique</td>
                    <td>KHALIL Mohammed</td>
                    <td>Faculté Sciences et Techniques Mohammedia</td>
                    <td>Département Informatique</td>
                    <td>Informatique</td>
                </tr>
                <tr>
                    <td>M29 : Conduite de projets Multimédias</td>
                    <td class="activecolomn">56 h</td>
                    <td>Département Informatique</td>
                    <td>CHANTIT Salima</td>
                    <td>Faculté Sciences et Techniques Mohammedia</td>
                    <td>Département Informatique</td>
                    <td>Informatique</td>
                </tr>
                <tr>
                    <td>M30 : Architecture et programmation réseaux</td>
                    <td class="activecolomn">56 h</td>
                    <td>Département Informatique</td>
                    <td>MOUMKINE Noureddine</td>
                    <td>Faculté Sciences et Techniques Mohammedia</td>
                    <td>Département Informatique</td>
                    <td>Informatique</td>
                </tr>
                <tr>
                    <td colspan="2" class="activecolomn">VH global du semestre 5</td>
                    <td class="activecolomn">336 h</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td rowspan="4" class="activecolomn s6_vh">s6</td>
                    <td>M31 : Transmission de données multimédia</td>
                    <td class="activecolomn">56 h</td>
                    <td>Département Informatique</td>
                    <td>ADIB Abdellah</td>
                    <td>Faculté Sciences et Techniques Mohammedia</td>
                    <td>Département Informatique</td>
                    <td>Informatique et Traitement de l’information</td>
                </tr>
                <tr>
                    <td>M32 : Multimédia sur IP et Qualité de services</td>
                    <td class="activecolomn">56 h</td>
                    <td>Département Informatique</td>
                    <td>LEGHIRS Cherkaoui</td>
                    <td>Faculté Sciences et Techniques Mohammedia</td>
                    <td>Département Informatique</td>
                    <td>Informatique</td>
                </tr>
                <tr>
                    <td>M33 : Programmation Multimédia Mobile</td>
                    <td class="activecolomn">56 h</td>
                    <td>Département Informatique</td>
                    <td>NOUA Mohamed Amine</td>
                    <td>Faculté Sciences et Techniques Mohammedia</td>
                    <td>Département Informatique</td>
                    <td>Informatique</td>
                </tr>
                <tr>
                    <td>PFE</td>
                    <td class="activecolomn">168h</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2" class="activecolomn">VH global du semestre 6</td>
                    <td class="activecolomn">336 h</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>   
</section>
<h2 class="et-apres-heading">Descriptifs des modules</h2>
<section class="programme">
    <div class="les_modules">
        <div class="Descriptif_de_module">
            <figure class="image_module">
                <img src="images/TNIM.jpg" alt="TNIM">
                <p class="tag">Traitement Numérique de l'Information Multimédia</p>
            </figure>
            <div class="textcontenu">
                <div class="objectif_module">
                <h1>OBJECTIFS DU MODULE</h1>
                <h2>Traitement Numérique de l'Information Multimédia</h2>
                <p>Ce module introduit les notions de bases en multimédia avec un point de vue traitement du signal ; 
                en vue de la compréhension de la problématique scientifique et informatique liée aux applications 
                de traitement de l'information multimédia.
                Il présente les fondements scientifiques et technologiques indispensables pour le traitement
                numérique de l'information multimédia, en particulier l'image et le son. 
                Les outils, algébriques, géométriques, de traitement du signal, seront appliqués lors de séances de 
                travaux pratiques permettant ainsi d’illustrer les mécanismes principaux sur lesquels s'appuient 
                l'analyse, le traitement d'images et de sons.</p>
                </div>
                <button onclick="replace_element(0,0)" class="PRE-REQUIS PEDAGOGIQUES">PRE-REQUIS PEDAGOGIQUES</button>
            </div>
        </div>
        <div class="Descriptif_de_module">
            <figure class="image_module">
                <img src="images/TDW.jpg" alt="TNIM">
                <p class="tag">Technologie Web pour le Multimédia</p>
            </figure>
            <div class="textcontenu">
                <div class="objectif_module">
                <h1>OBJECTIFS DU MODULE</h1>
                <h2>Technologie Web pour le Multimédia</h2>
                <p>L’objectif du module est de faire acquérir les connaissances et les techniques nécessaires pour 
                    le développement d’applications multimédia sur le web. En fait, La conception et la création de
                    pages web conviviales incluant des objets multimédia à l’aide des technologies Html5 et CSS3. 
                    Ensuite, L'insertion de script clients à l’aide de JavaScript et JQuery. Enfin, l’utilisation 
                    d’un langage de développement web dynamique pour manipuler des données stockées au sein d’un 
                    SGBDR.</p>
                </div>
                <button onclick="replace_element(1,1)" class="PRE-REQUIS PEDAGOGIQUES">PRE-REQUIS PEDAGOGIQUES</button>
            </div>
        </div>
        <div class="Descriptif_de_module">
            <figure class="image_module">
                <img src="images/TI.jpg" alt="TNIM">
                <p class="tag">Théorie de l’Information</p>
            </figure>
            <div class="textcontenu">
                <div class="objectif_module">
                <h1>OBJECTIFS DU MODULE</h1>
                <h2>Théorie de l’Information</h2>
                <p>La théorie de l'information, sans précision, est le nom usuel désignant la théorie de l'information de Shannon, qui est une théorie probabiliste permettant de quantifier le contenu moyen en information d'un ensemble de messages, dont le codage informatique satisfait une distribution statistique précise. Ce domaine trouve son origine scientifique avec Claude Shannon qui en est le père fondateur avec son article A Mathematical Theory of Communication publié en 1948.
                    Parmi les branches importantes de la théorie de l'information de Shannon, on peut citer :</p>
                    <ul>
                    <li>le codage de l'information ;</li>
                    <li>la mesure quantitative de redondance d'un texte ;</li>
                    <li>la compression de données ;</li> 
                    <li>la cryptographie.</li> 
                    </ul>
                <p>Dans un sens plus général, une théorie de l'information est une théorie visant à quantifier et qualifier la notion de contenu en information présent dans un ensemble de données. À ce titre, il existe une autre théorie de l'information : la théorie algorithmique de l'information, créée par Kolmogorov, Solomonoff et Chaitin au début des années 1960.
                </p>
                </div>
                <button onclick="replace_element(2,0)" class="PRE-REQUIS PEDAGOGIQUES">PRE-REQUIS PEDAGOGIQUES</button>
            </div>
        </div>
        <div class="Descriptif_de_module">
            <figure class="image_module">
                <img src="images/BDM.jpg" alt="TNIM">
                <p class="tag">Base de Données Multimédia</p>
            </figure>
            <div class="textcontenu">
                <div class="objectif_module">
                <h1>OBJECTIFS DU MODULE</h1>
                <h2>Base de Données Multimédia</h2>
                <p>L’objectif de ce module vise à ce que l’étudiant doit premièrement connaître les techniques de 
                    stockage et de recherche d’objets multimédia dans un système de gestion de base de données. 
                    Ensuite il doit être capable de créer une base de données multimédia et d'en extraire les 
                    données. Pour les travaux pratiques, le SGBDR choisi est Oracle multimédia.</p>
                </div>
                <button onclick="replace_element(3,2)" class="PRE-REQUIS PEDAGOGIQUES">PRE-REQUIS PEDAGOGIQUES</button>
            </div>
        </div>
        <div class="Descriptif_de_module">
            <figure class="image_module">
                <img src="images/CPM.jpg" alt="CPM">
                <p class="tag">Conduite de projets Multimédias</p>
            </figure>
            <div class="textcontenu">
                <div class="objectif_module">
                <h1>OBJECTIFS DU MODULE</h1>
                <h2>Conduite de projets Multimédias</h2>
                <p>
                    -	Acquérir et développer les connaissances et compétences requises pour conduire et gérer un projet multimédia en respectant un cahier de charges.
                    -	Se familiariser avec les méthodologies et les pratiques permettant de mener à bien un projet multimédia de qualité dans le temps et le budget impartis.
                    -	Maîtriser les outils de gestion de projets multimédias.
                </p>
                </div>
                <button onclick="replace_element(4,3)" class="PRE-REQUIS PEDAGOGIQUES">PRE-REQUIS PEDAGOGIQUES</button>
            </div>
        </div>
    </div>
    
        <div class="Descriptif_de_module">
            <figure class="image_module">
                <img src="images/APR.jpg" alt="APR">
                <p class="tag">Architecture et programmation réseaux</p>
            </figure>
            <div class="textcontenu">
                <div class="objectif_module">
                <h1>OBJECTIFS DU MODULE</h1>
                <h2>Architecture et programmation réseaux</h2>
                <p>Le but de ce cours est d'offrir pour l’étudiant une introduction aux 
                    réseaux informatiques, principalement les réseaux TCP/IP et le modèle OSI.
                     Et par la suite l’étudiant doit maitriser les concepts des algorithmes de routage sur IP. 
                     Parallèlement au cours, les TD et TP permettront de se familiariser avec les problèmes
                     d’implémentation de protocoles ainsi que la mise en pratique des concepts étudiés.</p>
                </div>
                <button onclick="replace_element(5,4)" class="PRE-REQUIS PEDAGOGIQUES">PRE-REQUIS PEDAGOGIQUES</button>
                </div>
        </div>  
        <div class="Descriptif_de_module">
            <figure class="image_module">
                <img src="images/TM.jpg" alt="TM">
                <p class="tag">Transmission de données multimédia</p>
            </figure>
            <div class="textcontenu">
                <div class="objectif_module">
                <h1>OBJECTIFS DU MODULE</h1>
                <h2>Transmission de données multimédia</h2>
                <p>Les enseignements dans ce module s'appuient sur des disciplines
                     larges et complémentaires, qui permettent à l'étudiant d'acquérir les bases 
                     théoriques et appliquées adaptées à la transmission et l'échange de données multimédias 
                     et les exigences des applications multimédias dans 
                    les réseaux de télécommunications. À la fin du cours, l'étudiant sera en mesure de :
                    <ul>
                        <li>Comprendre la transmission et l'échange de données multimédia ; </li>
                        <li>Comprendre les technologies de compression d'image, de vidéo, d'audio et de parole,</li>
                        <li>Comprendre les mécanismes assurant la qualité de service pour les applications multimédias</li>
                    </ul>
                </p>
                </div>
                <button onclick="replace_element(6,5)" class="PRE-REQUIS PEDAGOGIQUES">PRE-REQUIS PEDAGOGIQUES</button>
            </div>
        </div>
        <div class="Descriptif_de_module">
            <figure class="image_module">
                <img src="images/sec.jpg" alt="sec">
                <p class="tag">Multimédia sur IP et Qualité de services</p>
            </figure>
            <div class="textcontenu">
                <div class="objectif_module">
                <h1>OBJECTIFS DU MODULE</h1>
                <h2>Multimédia sur IP et Qualité de services</h2>
                <p>Le but de ce cours est de présenter à l’étudiant les différents protocoles de transport 
                    et de gestion des multimédias sur IP ainsi que les concepts de la qualité de services et 
                    voir l’impact des flux multimédias sur la QoS. Et par la suite l’étudiant doit maitriser les 
                    concepts utilisés pour le transfert du multimédia sur IP. Parallèlement au cours, les TD et TP 
                    permettront de se familiariser avec les problèmes
                     d’implémentation de protocoles ainsi que la mise en pratique des concepts étudiés.</p>
                </div>
                <button onclick="replace_element(7,6)" class="PRE-REQUIS PEDAGOGIQUES">PRE-REQUIS PEDAGOGIQUES</button>
            </div>
        </div>
        <div class="Descriptif_de_module">
            <figure class="image_module">
                <img src="images/PMM.jpg" alt="PMM">
                <p class="tag">Programmation Multimédia Mobile</p>
            </figure>
            <div class="textcontenu">
                <div class="objectif_module">
                <h1>OBJECTIFS DU MODULE</h1>
                <h2>Programmation Multimédia Mobile</h2>
                <p>L’objectif du module est de faire acquérir les connaissances et les techniques 
                    nécessaires pour le développement d’applications multimédia sur une plateforme mobile.
                     Le type d’application traitée est celui manipulant des objets multimédia. 
                    La technologie mobile utilisée est celle liée à la plateforme Java Android.</p>
                </div>
                <button onclick="replace_element(8,7)" class="PRE-REQUIS PEDAGOGIQUES">PRE-REQUIS PEDAGOGIQUES</button>
            </div>
        </div>
        <div class="Descriptif_de_module">
            <figure class="image_module">
                <img src="images/PFE.jpg" alt="PFE">
                <p class="tag">Projet de fin d'études</p>
            </figure>
            <div class="textcontenu">
                <div class="objectif_module">
                <h1>OBJECTIFS DU MODULE</h1>
                <h2>Projet de fin d'études</h2>
                <p>Le projet de fin d'études a un double but, il doit d'une part permettre à l’étudiant d'acquérir une expérience de gestion de projet par la pratique, et d'autre part lui offrir l'occasion de se constituer une carte de visite.
                </br>Le travail à effectuer répond à un besoin industriel exprimé par un professionnel qui assure un co-tutorat avec un enseignant universitaire ou bien correspond aux attentes d’une thématique, en développement dans le laboratoire attaché au département informatique, et qui sera encadré par un enseignant du département. 
                    </p>
                </div>
                <button onclick="replace_element(9,8)" class="PRE-REQUIS PEDAGOGIQUES">Détails</button>
            </div>
        </div>
        </div>
        
        
</section>
        <section class="section-et-apres" id="et-apres">
            <div class="row">
                  <h2 class="et-apres-heading">Et après..</h2>
                  <div class="et-apres-para">
                
                    <p>Une fois leur licence en poche, les choix qui s’offrent aux étudiants sont multiples. 
                        Il est en effet possible, au lendemain de leur licence, d’entrer directement dans la vie active en tant que technicien de 
                        niveau supérieur (réseau ou web), ou assistant ingénieur dans les domaines du développement, de l’administration et la gestion 
                        des systèmes logiciels.</br>
                        Toutefois, la majorité des étudiants diplômés continue généralement les études. Ils peuvent alors 
                        intégrer de plein droit un master d’informatique (professionnel ou recherche), mais peuvent aussi se diriger vers 
                        un master pluridisciplinaire, ou encore vers une école d’ingénieurs. Les débouchés sont alors très nombreux et se trouvent 
                        essentiellement dans les domaines de la programmation de l’administration système et du développement. </p>
                
                        <h3>Secteurs d'activités :</h3>
                    <ul class="secteurs">
                        <li>intégration de services ou d'applications</li>
                        <li>développement d'applications et du génie logiciel</li>
                        <li>l'architecture de systèmes en réseaux</li>
                        <li>l'administration de systèmes et réseaux</li>
                        <li>systèmes d'information, bases de données, serveurs Web</li>
                        <li>sociétés de service informatique</li>
                        <li>Tout service informatique d’une entreprise ou d’un établissement public...</li>
                    </ul>
                    </div>
             </div>    
        </section> 

         <footer id="contact">
                <div class="moumkine">
                    <ul class="cordonnees">
                        <p>Responsable de la formation: 
                        <p> Pr N.Moumkine
                        <p>E-mail : noureddine.moumkine@fstm.ac.ma
                    </ul>
                </div>
                <div class="logo-footer">
                    <img src="images/fstm_logo.png" class="logo-foot"></img>
                </div>
            
            <div class="fstm">
                <ul class="cordonnees-fstm">
                    <li>Faculté des Sciences et Techniques de Mohammedia</br> BP 146 Mohammedia 28806 Maroc
                    <li>Tél 1 : +212523314708
                    <li>Tél 2 : +212666613325 
                    <li>Fax : +212523315353 
                    <li>E-mail : contact@fstm.ac.ma
                    <li>Site web : www.fstm.ac.ma
                </ul>
            </div>
        </footer>
        <script src="js/irm.js"></script>
        <script src="js/prequis.js"></script>
        <script>
            var slideIndex = 1;
            showSlides(slideIndex);
            
            function plusSlides(n) {
              showSlides(slideIndex += n);
            }
            
            function currentSlide(n) {
              showSlides(slideIndex = n);
            }
            
            function showSlides(n) {
              var i;
              var slides = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("dot");
              if (n > slides.length) {slideIndex = 1}    
              if (n < 1) {slideIndex = slides.length}
              for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";  
              }
              for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
            }
        </script>
            
            
        
</body>
</html>