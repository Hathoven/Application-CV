<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resume CV Design</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>




<body>
   

   
   <?php
    include('./cv.php');
    

    //connection a la base de données 
    $servername = "localhost";
    $username="root";
    $password="root";
    $dbname="cvmmi2020";
    $conn = new mysqli($servername,$username,$password,$dbname);
    
    //verification de la connection 
    if($conn->connect_error){
      echo'Erreur de connexion à la base de données. <br/>';
    }
    else{
       
        
         $sql = "SELECT nom, prenom, rue, adresse, complement, ville, codepostal, phoneid, phone, mail, statut, role, university, degree, universitydate, universitytwo, degreetwo, universitydatetwo, certificates, certificatestwo, certificatestree, certificatesfour, skills, skillstwo, skillstree, skillsfour, qualifications, desqualifications, qualificationstwo, desqualificationstwo, employer, position, description, date, `previous-emp`, `position-previous`, `description-previous`, `date-previous`, `date-f-previous` FROM cv ORDER BY id asc"; //order by > apparition des données par ordre decroissant
          
    
   
    $query = $conn->query($sql);

    if ($query->num_rows >0){ // si il y a au moins un cv exécute le code

    
      while($row = $query->fetch_assoc() ){ // iteration de la liste sur chaque ligne 
        
//        echo 'html' > afficher un cv pour chaque ligne de la base de données 
//         .$row ['nom de la variable a recuperer'] - information dynamique
        $cv = new Cv();
          
    $cv->nom = $row['nom'];
    $cv->prenom = $row['prenom'];
    $cv->rue = $row['rue'];
    $cv->adresse = $row['adresse'];
    $cv->complement = $row['complement'];
    $cv->ville = $row['ville'];
    $cv->codepostal = $row['codepostal'];
    $cv->phoneid = $row['phoneid'];   
    $cv->phone = $row['phone'];
    $cv->mail = $row['mail'];
    $cv->statut = $row['statut'];
    $cv->role = $row['role'];      
    $cv->university = $row['university'];
    $cv->degree = $row['degree'];
    $cv->universitydate = $row['universitydate'];
    $cv->universitytwo = $row['universitytwo']; 
    $cv->universitydatetwo = $row['universitydatetwo'];       
    $cv->certificates = $row['certificates'];
    $cv->certificatestwo = $row['certificatestwo'];
    $cv->certificatestree = $row['certificatestree'];
    $cv->certificatesfour = $row['certificatesfour'];     
    $cv->skills = $row['skills'];   
    $cv->skillstwo = $row['skillstwo'];
    $cv->skillstree = $row['skillstree'];
    $cv->skillsfour = $row['skillsfour'];   
    $cv->qualifications = $row['qualifications'];
    $cv->desqualifications = $row['desqualifications'];
    $cv->qualificationstwo = $row['qualificationstwo'];
    $cv->desqualificationstwo = $row['desqualificationstwo']; 
    $cv->employer = $row['employer'];
    $cv->position = $row['position'];
    $cv->description = $row['description'];
    $cv->date = $row['date'];
    $cv->previous_emp = $row['previous-emp'];
    $cv->position_previous = $row['position-previous'];
    $cv->description_previous = $row['description-previous'];
    $cv->date_previous = $row['date-previous'];
    $cv->date_f_previous = $row['date-f-previous'];  
          
       echo'
<body>
	<div class="wrapper">
		<div class="resume">
			<div class="left">
				<div class="img_holder">
					<img class="rect" id="uploadimage" src="./user-no-image.png" >
				</div>
				<div class="contact_wrap pb">
					<div class="title">
						Contact
					</div>
					<div class="contact">
						<ul>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-mobile-alt" aria-hidden="true"></i></div>
									<div class="text">
									<span champ-phone=>'.$cv->phoneid.' '.$cv->phone.'</span>
									</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-envelope" aria-hidden="true"></i></div>
									<div class="text">
									<span champ-mail>'.$cv->mail.'</span>
									</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-map-signs" aria-hidden="true"></i></div>
									<div class="text">
									<span champ-adresse>'.$cv->adresse.' '.$cv->complement.' '.$cv->ville.' '.$cv->codepostal.'</span>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="skills_wrap pb">
					<div class="title">
						Skills
						
					</div>
					<div class="skills">
						<ul>
							<li>
								<div class="li_wrap">
									
									<div class="text">'.$cv->skills.'</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									
									<div class="text">'.$cv->skillstwo.'</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									
									<div class="text">'.$cv->skillstree.'</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									
									<div class="text">'.$cv->skillsfour.'</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				
				
				
				<div class="certificates_wrap pb">
					<div class="title">
					certificates
					<span champ-certificates></span>
                    
					</div>
					<div class="certificates">
						<ul>
							<li>
								<div class="li_wrap">
							
									<div class="text">'.$cv->certificates.'</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
							
									<div class="text">'.$cv->certificatestwo.'</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
								
									<div class="text">'.$cv->certificatestree.'</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
								
									<div class="text">'.$cv->certificatesfour.'</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				
				
				
				
			</div>
			<div class="right">
				<div class="header">
					<div class="name_role">
						<div class="name"> 
							
							<span champ-name>'.$cv->nom.' '.$cv->prenom.'</span>
						</div>
						
						
						<div class="role">
							
							<span champ-role>'.$cv->statut.'</span>
						</div>
						
						
					</div>
					<div class="about">
						
						<span champ-about>'.$cv->role.'</span>
					</div>
				</div>
				
				
				
				
				
				
				
				<div class="right_inner">
				
				
				
					<div class="exp">
						<div class="title">
							experience
						</div>
						<div class="exp_wrap">
						
							<ul>
								<li>
									<div class="li_wrap">
										<div class="date">
										 -
											<span class="champ-début1">'.$cv->date.'</span>
										</div>
										<div class="info">
											<p class="info_title">
                                                <span class="champ-current employer">'.$cv->employer.'</span>
											</p>
											<p class="info_com">
												
												<span class="champ-position">'.$cv->position.'</span>
												
											</p>
											<p class="info_cont">
												
												<span class="champ-description">'.$cv->description.'</span>
											</p>
										</div>
									</div>
								</li>
								
								<li>
									<div class="li_wrap">
										<div class="date">
										
											<span class="champ-datedébutfinprevious">'.$cv->date_previous.' '.$cv->date_f_previous.'</span>
										</div>
										<div class="info">
											<p class="info_title"><span class="champ-positionprevious">'.$cv->position_previous.'</span>
												
											</p>
											<p class="info_com">
												
												<span class="champ-employementprevious">'.$cv->previous_emp.'</span>
											</p>
											<p class="info_cont">
												
												<span class="champ-descriptionpreviousr">'.$cv->description_previous.'</span>
											</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					
					
					
					<div class="education">
						<div class="title">
							Education
						</div>
						<div class="education_wrap">
							<ul>
								<li>
									<div class="li_wrap">
										<div class="date">
											
											<span class="champ-universitydate">'.$cv->universitydate.'</span>
										</div>
										<div class="info">
											<p class="info_title">
												
												<span class="champ-degree">'.$cv->degree.'</span>
											</p>
											<p class="info_com">
												<span class="champ-university">'.$cv->university.'</span>
											</p>
											<p class="info_cont">
												
												<span class="champ-universitydescription"></span>
											</p>
										</div>
									</div>
								</li>
								<li>
									<div class="li_wrap">
										<div class="date">
											
											<span class="champ-universitydatetwo">'.$cv->universitydatetwo.'</span>
										</div>
										<div class="info">
											<p class="info_title">
											<span class="champ-degreetwo">'.$cv->degreetwo.'</span>
											
												
											</p>
											<p class="info_com">
												
												<span class="champ-universitytwo">'.$cv->universitytwo.'</span>
											</p>
											<p class="info_cont">
												
												<span class="champ-universitydescriptiontwo"></span>
											</p>
										</div>
									</div>
								</li>
								
							</ul>
						</div>
					</div>
					
					
							<div class="qualification">
						<div class="title">
							qualifications
						</div>
						<div class="education_wrap">
							<ul>
								<li>
									<div class="li_wrap">
										<div class="date">
											
										</div>
										<div class="info">
											<p class="info_title">
											
												<span class="champ-namequalification">'.$cv->qualifications.'</span>
											</p>
											<p class="info_com">
												
											</p>
											<p class="info_cont">
											
												<span class="champ-desqualifications">'.$cv->desqualifications.'</span>
											</p>
										</div>
									</div>
								</li>
								<li>
									<div class="li_wrap">
										<div class="date">
											
										</div>
										<div class="info">
											<p class="info_title">
												
											<span class="champ-namequalificationstwo">'.$cv->qualificationstwo.'</span>
												
												
											</p>
											<p class="info_com">
												
											</p>
											<p class="info_cont">
												
												<span class="champ-desqualificationstwo">'.$cv->desqualificationstwo.'</span>
											</p>
										</div>
									</div>
								</li>
								
							</ul>
						</div>
					</div>
					
					
					
				</div>
			</div>
		</div>
	</div>
  
        
        
      ';
    
          

      } 

    }

    else{
      echo "Pas de cv dans la liste";
    }
        
        
    }

    //requete sql - SELECT > recuperation des données 
   
      

?>

    
    
</body>
</html>