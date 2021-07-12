<!DOCTYPE html>
<html>
<head>
   <title> disponibilité</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso8859-1" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body style="background-color:#BDBDAE;">
  <header>
      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" style="background-color:#555353;">
        <div class="container">    <div class="navbar-brand" >
      <img src="logo2.png" width="79" height="60" alt="" loading="lazy">
    </div>
          <a class="navbar-brand" href="admin.php"><strong>Admin</strong></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
		  aria-controls="navbarSupportedContent-7"
		  aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="choix.php"><strong>Choix</strong><span class="sr-only">(current)</span></a>
              </li>

            </ul>
          </div>
        </div>
      </nav><br/><br/><br/><br/><br/><br/>
	      <div class="container" style="padding-top:100px; align:center;width:70%; ">
    <div class="card" style="background-color: transparent;">
      <div class="card-body">
 
<?php
     try
     {
          $db = new PDO('mysql:host=localhost;dbname=Voiture;charset=utf8','root','');
     }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
         echo"<div class=\"container\" style=\"width:35%;float:left\">";
		 echo"<h5>liste noir des clients selon la</br>
		  date de réccupération de voiture : </h5></br>";
    	 $requete = $db->query('SELECT nom,prenom FROM compte_rendu WHERE annomalie="retard" ');
       
         while($table=$requete->fetch()){
    	 echo"<ul style=\"list-style-type: square;\"><li >".$table["nom"]." ".$table["prenom"]."</li></ul>";
    	 }echo"</div>";
         echo"<div class=\"container\" style=\"width:35%;float:right\">";
		  echo"<h5>liste noir des clients selon </br>
		  l'état de voiture : </h5></br>";
         $requete = $db->query('SELECT nom,prenom FROM compte_rendu WHERE annomalie="Mauvaise état"');
         
         while($table=$requete->fetch()){
    	 echo"<ul style=\"list-style-type: square;\"><li >".$table["nom"]." ".$table["prenom"]."</li></ul>";
    	 }echo"</div>";
    
?>