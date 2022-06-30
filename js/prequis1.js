const desct_modules=[
    "<ul>Les modules requis pour suivre ce module :<li>Bases informatiques et mathématiques de niveau DEUST MIP/SMI (FST/FS)</li></ul>",
    "<ul>Les modules requis pour suivre ce module :<li>Algorithmique et programmation 1 (tronc commun MIP)</li><li>Algorithmique et Programmation 2 (tronc commun MIP)</li><li>Systèmes d’Information et Base de données (tronc commun MIP)</li><li>Traitement Numérique de l'Information Multimédia – TNIM</li></ul>",
    "<ul>Les modules requis pour suivre ce module :<li>Systèmes d’Information et Base de données (tronc commun MIP)</li><li>Traitement numérique de l'information multimédia - TNIM</li><li>Programmation multimédia mobile – PMM</li></ul>",
    "<ul>Les modules requis pour suivre ce module :<li>Algorithmique et programmation</li><li>Traitement numérique de l'information multimédia - TNIM</li><li>Technologie web pour le multimédia</li></ul>",
    "<h4>Les modules requis pour suivre ce module :</h4><ul><li>Bases mathématiques et informatique DEUST MIP et/ou DEUG SMI</li><li>Traitement numérique de l'information multimédia - TNIM</li></ul>",
    "<h4>Les modules requis pour suivre ce module :</h4><ul><li>Traitement numérique de l'information multimédia</li><li>Architecture et programmation réseau</li></ul>",
    "<h4>Les modules requis pour suivre ce module :</h4><ul><li>Systèmes d’Information et Base de données (tronc commun MIP</li><li>Traitement numérique de l'information multimédia - TNIM</li><li>Programmation multimédia mobile – PMM</li></ul>",
    "<h4>Les modules requis pour suivre ce module :</h4><ul><li>Algorithmique et programmation 1 (tronc commun MIP)</li><li>Algorithmique et Programmation 2 (tronc commun MIP)</li><li>Systèmes d’Information et Base de données (tronc commun MIP)</li><li>Traitement Numérique de l'Information Multimédia - TNIM</li></ul>",
    "<h4>Durée du PFE:</h4><p>La moitié du semestre S6 de la filière LST_IRM est consacrée entièrement au projet de fin d’études. </p><h4>Lieu:</h4><p>Le projet peut être réalisé dans l’établissement d’attache de la filière ou dans une entreprise privée, publique ou semi-public, dans une administration etc..</p><h4>Encadrement du PFE:</h4><p>Chaque stagiaire est encadré dans l’institution d’accueil par un professionnel qui assure un co-tutorat, et dans la Faculté par un enseignant du département informatique qui assure son encadrement, à qui il adresse un compte rendu hebdomadaire d'avancement de son travail. </p><h4>Modalités de validation:</h4><p>Le module PFE est validé si l’étudiant obtient une note finale, après soutenance, supérieure ou égale à 12/20.</p><h4>Modalités d'évaluation:</h4><p>Le projet de fin d'études est validé par la rédaction d'un mémoire et d'une soutenance devant un jury composé d'enseignants universitaires et/ou d'industriels. </p>"
    /* ******************** ajouter les prequis **************      */
];
function create_element(n){
    let division=document.createElement('div');
    let header_2=document.createElement('h1');
    let paragraph=document.createElement('p');
    header_2.textContent="PRE-REQUIS PEDAGOGIQUES";
    paragraph.innerHTML=desct_modules[n];
    division.appendChild(header_2);
    division.appendChild(paragraph);
    division.classList.add("PRE-REQUIS_PEDAGOGIQUES");
/*     header_2.classList.add("connaisances-heading");
    paragraph.classList.add("savoir-plus-para"); */
    return division;
}

function replace_element(i,n){
    let new_element=create_element(n);
    let divi=document.getElementsByClassName('textcontenu')[i];
    let button=divi.lastElementChild;
    console.log(divi);
    console.log(button);
    divi.removeChild(button);
    divi.appendChild(new_element);
}