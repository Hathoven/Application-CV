<?php  
include('./cv.php');
// si je reçois un post du boutton addcv
if(isset($_POST['submit'])){
// j'exécute l'algorithme
    
// je dois ramener les valeurs des chaque inputs saisis
    
// je déclare une variable dans laquelle j'affecte la valeur du prénom
 
// la valeur entre crochet correspond à l'attribut name coté html
    $cv = new Cv();
    
  
    $cv->nom = $_POST['nom'];
    $cv->prenom = $_POST['prenom'];
    $cv->rue = $_POST['rue'];
    $cv->adresse = $_POST['adresse'];
    $cv->complement = $_POST['complement'];
    $cv->ville = $_POST['ville'];
    $cv->codepostal = $_POST['codepostal'];
    $cv->phoneid = $_POST['phoneid'];
    $cv->phone = $_POST['phone'];
    $cv->mail = $_POST['mail'];
    $cv->statut = $_POST['statut'];
    $cv->role = $_POST['role'];
    $cv->university = $_POST['university'];
    $cv->degree = $_POST['degree'];
    $cv->universitydate = $_POST['universitydate'];
    $cv->universitytwo = $_POST['universitytwo'];
    $cv->universitydatetwo = $_POST['universitydatetwo'];
    $cv->degreetwo = $_POST['degreetwo'];
    $cv->certificates = $_POST['certificates'];
    $cv->certificatestwo = $_POST['certificatestwo'];
    $cv->certificatestree = $_POST['certificatestree'];
    $cv->certificatesfour = $_POST['certificatesfour'];
    $cv->skills = $_POST['skills'];
    $cv->skillstwo = $_POST['skillstwo'];
    $cv->skillstree = $_POST['skillstree'];
    $cv->skillsfour = $_POST['skillsfour'];
    $cv->qualifications = $_POST['qualifications'];
    $cv->desqualifications = $_POST['desqualifications'];
    $cv->qualificationstwo = $_POST['qualificationstwo'];
    $cv->desqualificationstwo = $_POST['desqualificationstwo'];
    $cv->employer = $_POST['employer'];
    $cv->position = $_POST['position'];
    $cv->description = $_POST['description'];
    $cv->date = $_POST['date'];
    $cv->previous_emp = $_POST['previous-emp'];
    $cv->position_previous = $_POST['position-previous'];
    $cv->description_previous = $_POST['description-previous'];
    $cv->date_previous = $_POST['date-previous'];
    $cv->date_f_previous = $_POST['date-f-previous'];
    
       

    
        
    //paramètre base de données
    $servername='localhost';
    $username='root';
    $password='root';
    $dbname='cvmmi2020';
        
    // etablir la connexion avec la base de donnée
    $conn = new mysqli($servername,$username,$password,$dbname);
    
    //valider la connexion
    // si il ya un problème de connexion
    if($conn->connect_error){
        echo 'probleme de connexion a la base de donnes. <br/>';
    }
    else{
        echo 'connecté <br/>';
    }
    
//    //construit la requête - INSERT INTO > ajouter des données
    $sql="INSERT INTO cv(`nom`,`prenom`,`rue`,`adresse`,complement,ville,codepostal,phone,phoneid,mail,statut,role,university,degree,universitydate,universitytwo,degreetwo,universitydatetwo,certificates,certificatestwo,certificatestree,certificatesfour,skills,skillstwo,skillstree,skillsfour,qualifications,desqualifications,qualificationstwo,desqualificationstwo,employer,position,description,date,`previous-emp`,`position-previous`,`description-previous`,`date-previous`,`date-f-previous`) VALUES ('".$cv->nom."', '".$cv->prenom."', '".$cv->rue."', '".$cv->adresse."', '".$cv->complement."', '$cv->ville', '$cv->codepostal', '$cv->phone', '$cv->phoneid', '$cv->mail', '$cv->statut', '$cv->role', '$cv->university', '$cv->degree', '$cv->universitydate', '$cv->universitytwo', '$cv->degreetwo', '$cv->universitydatetwo', '$cv->certificates', '$cv->certificatestwo', '$cv->certificatestree', '$cv->certificatesfour', '$cv->skills', '$cv->skillstwo', '$cv->skillstree', '$cv->skillsfour', '$cv->qualifications', '$cv->desqualifications', '$cv->qualificationstwo', '$cv->desqualificationstwo', '$cv->employer', '$cv->position', '$cv->description', '$cv->date', '$cv->previous_emp', '$cv->position_previous', '$cv->description_previous', '$cv->date_previous', '$cv->date_f_previous')";
    
    echo $sql;
 
    
    //exécuter la requête
    // si la requête de mon exécution c'est bien passé
    if($conn->query($sql)===TRUE){
        
        header("location: interface-3.php?mail=$cv->mail");
        
    }
    else{
        echo $conn->error;
    }
//    
    $conn->close();
}




?>