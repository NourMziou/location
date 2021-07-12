<?php

include('session.php');
 try
     {
          $db = new PDO('mysql:host=localhost;dbname=Voiture;charset=utf8','root','');
     }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
 $requete = $db->query('SELECT * FROM reservation WHERE id_reservation=(SELECT max(id_reservation) FROM reservation)');
   while ($entree = $requete->fetch()){
     $idv=$entree['ID_véhicule'];
     $tab2 = $db->prepare('SELECT * FROM vehicules WHERE id_vehicule=:i');
        	$tab2->execute(array('i' =>$idv));
       while ($table2 = $tab2->fetch()){
         $marque=$table2['marque'];
         $cat=$table2['catégorie'];
         $prix=$table2['prix_location'];

   }}
      try
     {
          $db = new PDO('mysql:host=localhost;dbname=Voiture;charset=utf8','root','');
     }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

  if(isset($_POST["ligne"])){
	   $abc="payé";
 $nb_modifs1=$db->exec('UPDATE reservation SET Payement=\'payé\' WHERE id_reservation=(SELECT max(id_reservation) FROM reservation)');
 }
   if(isset($_POST["agence"])){
	 $abc="pas_encore";
 $nb_modifs2=$db->exec('UPDATE reservation SET Payement=\'pas_encore\' WHERE id_reservation=(SELECT max(id_reservation) FROM reservation)');
 }

?>
<!DOCTYPE html>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link href="print.css" rel="stylesheet" media="print">
</head>
<body style="background-color:#BDBDAE;">
<header>
      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" style="background-color:#555353;">
        <div class="container">
				          <div class="navbar-brand" >
<img src="logo2.png" width="79" height="50" alt="" loading="lazy">
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
                <a class="nav-link" href="véhicules.php">Vehicules<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.php">Services</a>
              </li>

            </ul>

          </div>
        </div>
      </nav>
	  <br/> <br/>
	 <div class="container" style="padding-top:100px;align:center;width:70%;height:80%">
	   <div class="card shadow" >
            <div class="card-title container" style="padding-top:30px;" >
			<div class="container" >
			<div style="float:right;padding-right:100px"> <img style="border:solid 2px #555353"src="logo1.png" width="95" height="85" alt="" loading="lazy"></div>

			<div style="float:left;padding-top:20px"><h4>Facture</h4></div></div></div>
			<div class="card-body">
	  <div class="container" >
	  <hr style="height: 2px;width:90%;
        background-color: #555353;">
<table>


    <tr>
      <td >Nom : <?php echo $login_session; ?></td>
	  <td> &nbsp </td>
      <td >Prénom : <?php echo $prenom_session; ?></td>
	  <td> &nbsp </td>
      <td >Date de naissance : <?php echo $date_session; ?></td>
    </tr>
    <tr>

      <td >Email : <?php echo $user_check; ?></td>
	   <td> &nbsp &nbsp &nbsp </td>
      <td>Numéro : <?php echo $numero_session;?></td>
	  <td> &nbsp &nbsp &nbsp </td>
      <td>Date de permis : <?php echo $permis_session;?> </td>
    </tr>
	</table>
	  <hr style="height: 2px;width:90%;
        background-color: #555353;">
	<table>

    <tr>
     <td> Date de prise :</td><td  style="padding-left: 50px;"> <?php echo $prise_session."  &nbsp  "  .$hprise_session."h"; ?></td></tr>
     <tr> <td>Date de restitution :</td><td style="padding-left: 50px;"> <?php echo $restitution_session."  &nbsp  ".$hrestitution_session."h";?></td></tr>
	   <tr>  <td>Ville de prise :</td><td style="padding-left: 50px;"> Tunis  </td></tr>
	    <tr>  <td>Ville de restitution :</td><td style="padding-left: 50px;"> Tunis  </td></tr>
		</table>
		  <hr style="height: 2px;width:90%;
        background-color: #555353;">

		</table>
		<table>
    <tr> <td> marque :</td>

     <td> <?php echo $marque;?> </td>
	 <td> &nbsp </td>
     <td>Catégorie : </td><td> &nbsp </td>
	 <td><?php echo $cat;?> </td></tr>
	  <tr>  <td>Prix par jour :</td> <td> <?php echo $prix."dt" ;?> </td><td> &nbsp &nbsp &nbsp </td>
	    <td>Nombres de jours :</td> <td> &nbsp &nbsp &nbsp </td> <td> <?php
$origin = date_create($prise_session);
$target = date_create($restitution_session);
$interval = date_diff($origin, $target);
$jours= $interval->format('%a');

echo $jours  ;?> jours </td></tr>
<tr>  <td>Prix de location : </td><td><?php
		$totale=$prix*(int)$jours;
		echo $totale  ;?> dt</td><td> &nbsp </td>
	 <td>Payement : </td><td> &nbsp </td><td><?php echo $abc ;?></td></tr>

	  </table></div></div>
	</div></div> </br>
	<div style="padding-left:40%;"><table>
	<tr><td>
	<button  onclick="window.print();" class="btn btn-danger" id="print-btn" style="padding-left:30px;padding-right:30px;" type="submit" ><strong style="color:white;">Print</strong></button>&nbsp</td>
	<td><button  class="btn btn-danger" type="submit"><a href="logout2.php"><strong style="color:white;">suivant<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-double-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
  <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
</svg></strong></a></button>	</td></tr></table>
	</div>
</body>
</html>

 <?php

 try
     {
          $db = new PDO('mysql:host=localhost;dbname=Voiture;charset=utf8','root','');
     }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

	   $reponse = $db->prepare('INSERT INTO facture (nom,prenom,marque,prix_total,payement)
		 VALUES(:nom,:prenom,:v,:p,:pay)');
		$reponse->execute(array('nom' => $login_session,
		'prenom' => $prenom_session,
		'v' => $marque,
		'p' => $totale,
		'pay' => $abc));
?>
