
<!DOCTYPE html>

<html>
<head>
   <title> formulaire</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso8859-1" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
 <body>
  <header>
      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" style="background-color:#555353;">
        <div class="container">
          <div class="navbar-brand" >
<img src="logo2.png" width="79" height="40" alt="" loading="lazy">
</div>
          <a class="navbar-brand" href="accueil.php"><strong>Accueil</strong></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
		  aria-controls="navbarSupportedContent-7"
		  aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="vehicules.php">Vehicules<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.php">Services</a>
              </li>

            </ul>

          </div>
        </div>
      </nav>
      <section class="bg-grey">
      <div> <img src="logo1.png" style="margin-left: 450px;
         margin-top: 100px;"  width="350" height="350" alt="" loading="lazy"/></div>
<div class="card w-75" style="margin-left: 144px;">

  <div class="card-body shadow transparent">
    <h5 class="card-title">Compte est crée</h5>
    <p class="card-text">Vous devez se connecter d'abord</p>
    <a href="index.php" style="margin-left: 744px;" class="btn btn-outline-danger">se connecter</a>
  </div>

</div>
</section>
 <?php

      try
      {
           $db = new PDO('mysql:host=localhost;dbname=Voiture;charset=utf8','root','');
      }
     catch (Exception $e)
     {
         die('Erreur : ' . $e->getMessage());
     }
	  if(!empty($_POST['nom']) && !empty($_POST['prénom']) && !empty($_POST['email'])&& !empty($_POST['date']) && !empty($_POST['mdp']) &&!empty($_POST['numéro']) && !empty($_POST['permis']) && !empty($_POST['civilité']) && isset($_POST['inscrire']))
	 {


		$requete = $db->prepare('INSERT INTO ESPACE_CLIENT (Nom,Prenom,Civilité,Email,Mot_de_passe,Numero,Date_de_naissance
		,Date_permis)
		 VALUES(:nom,:prenom,:titre,:email,:mdp,:telephone,:date_naissance,:permis)');
		$requete->execute(array('nom' => $_POST['nom'],
		'prenom' => $_POST['prénom'],
		'titre' => $_POST['civilité'],
		'email' => $_POST['email'],
		'mdp' => $_POST['mdp'],
		'telephone' => $_POST['numéro'],
		'date_naissance' => $_POST['date'],
		'permis' => $_POST['permis']));



	 }





?>
