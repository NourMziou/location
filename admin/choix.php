<!DOCTYPE html>
<html lang="en">
<head>
  <title>choix</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body style="background-color:#BDBDAE;">
<header>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" style="background-color:#555353;">
    <div class="container">     <div class="navbar-brand" >
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
        </ul>
      </div>
    </div>
  </nav><br/><br/><br/>
  <main>
    <div class="container-fluid" style="padding-top:50px">
      <!--Grid row-->
        <!--Grid column-->
       <div class="row justify-content-center">
 <div class="col-md-4">
 <div class="card shadow" style="width: 25rem;">
<div class="card-body">
<h5 class="card-title text-center">Gestion des clients</h5>
<div class="card-text"><ul>


                                                <li><a href="nom.php">modifier le nom</a></li>
                                               <li><a href="prénom.php">modifier le prénom</a></li>
                                                <li><a href="civilité.php">modifier la civilité</a></li>
												<li><a href="daten.php">modifier la date de naissance</a></li>
												<li><a href="datep.php">modifier la date de permis</a></li>
												<li><a href="email.php">modifier l'email</a></li>
												<li><a href="numéro.php">modifier le numéro</a></li>

<li><a href="listeclients.php">liste des clients</a></li>
<li><a href="ficheclients.php">fiche des clients</a></li>
<li><a href="historeservation.php">historique des réservation d'un client</a></li>
<li><a href="supclient.php">suppression d'un client</a></li>
</ul>
</div>
</div>
</div>
</div>
 <div class="col-md-4">
       <div class="card shadow" style="width: 25rem;">
<div  class="card-body">
<h5 class="card-title text-center">Gestion des véhicules</h5>
<div class="card-text" ><ul>


                                                <li ><a href="categorie.php">gestion des catégories</a></li>
                                               <li><a href="dispo.php">recherche de disponibilité</a></li>
                                                <li><a href="alerte.php"> modification date-visite</a></li>
												<li><a href="alerte2.php"> modification date-assurance</a></li>
												<li><a href="carburant.php">gestion du carburant</a></li>


</ul>
</div>
</div>
</div>


</br>
 <div class="card shadow" style="width: 25rem;">
<div  class="card-body">

<div class="card-text" ><ul>

                                               <li><a href="rendu.php">compte rendu aprés location (formulaire d'inspection)</a></li> 
                                                <li ><a href="listenoir.php">liste noir des clients</a></li>



</ul>
</div>
</div>
</div>


















 </div>
 <div class="col-md-4">
       <div class="card shadow" style="width: 25rem;">

<div class="card-body">
<h5 class="card-title text-center">Gestion des reservations</h5>
<div class="card-text"><ul>

                                                 <li ><a href="gestreserv.php">planing des réservations  </a></li>
                                                <li ><a href="recherchereserv.php">rechercher une réservation  </a></li>
                                               <li><a href="updatedp.php">modification du date de prise</a></li>
                                                <li><a href="updatedr.php"> modification du date de restitution</a></li>
												<li><a href="updatehp.php">modification du dl'heure de prise</a></li>
												<li><a href="updatehr.php">modification du dl'heure de restitution</a></li>
                                               <li><a href="supreservation.php">supression d'une réservation</a></li>
											    <li><a href="paye.php">liste des facture</a></li>
												 <li><a href="impaye.php">liste des impayés</a></li>
											   <li><a href="suivi.php">suivi de payement en agence</a></li>

</ul>
</div>
</div>
</div>
 </div>
</div>

    </div>
  </main>
   <div class="container text-danger" style="align:center;width:45%;padding-top:120px; "><div style="width:85%" class="alert alert-danger">
  <strong>ATTENTION!!</strong>
</div>


<?php

try
     {
          $db = new PDO('mysql:host=localhost;dbname=Voiture;charset=utf8','root','');
     }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

			$rep1=$db->query('SELECT * FROM vehicules');
			   while($ent1=$rep1->fetch()){
                    if($ent1['marque']=='SKODA FABIA'){
						$visite=$ent1['date_visite'];
	                    $assurance=$ent1['date_assurance'];
$date1 = new DateTime();
$match_date1 = new DateTime($visite);
$interval1 = $date1->diff($match_date1);
$jrs1= $interval1->format('%R%a');
$date2 = new DateTime();
$match_date2 = new DateTime($assurance);
$interval2 = $date2->diff($match_date2);
$jrs2= $interval2->format('%R%a');

if(($jrs1 <=10)&& ($jrs1 >=0)){

echo  "
	   <div class=\"container\"><div style=\"padding-left:30px\"><table><tr><td > la voiture SKODA FABIA reste ".$jrs1." jours pour refaire la visite . </td></tr></br>" ;

			   }
if (($jrs2 <=10)&& ($jrs2 >=0)){




echo  "<tr><td style=\"color:red\"> la voiture SKODA FABIA reste ".$jrs2." jours pour refaire l'assurance . </td></tr></br>" ;

			   }

			}}
$rep2=$db->query('SELECT * FROM vehicules');
			   while($ent2=$rep2->fetch()){
                   if($ent2['marque']=='TOYOTA YARIS'){
						$visite2=$ent2['date_visite'];
	                    $assurance2=$ent2['date_assurance'];
$date3 = new DateTime();
$match_date3 = new DateTime($visite2);
$interval3 = $date3->diff($match_date3);
$jrs3= $interval3->format('%R%a');
$date4 = new DateTime();
$match_date4 = new DateTime($assurance2);
$interval4 = $date4->diff($match_date4);
$jrs4= $interval4->format('%R%a');


if(($jrs3 <=10)&& ($jrs3 >=0)){

echo

	  "<tr><td style=\"color:red\"> la voiture TOYOTA YARIS reste ".$jrs3." jours pour refaire la visite . </td></tr></br>" ;


			   }


if(($jrs4 <=10)&& ($jrs4 >=0)){

echo  "<tr><td style=\"color:red\"> la voiture TOYOTA YARIS reste ".$jrs4." jours pour refaire l'assurance . </td></tr></br>" ;

			   }

			   }}
			   $rep3=$db->query('SELECT * FROM vehicules');
			   while($ent3=$rep3->fetch()){
                  if ($ent3['marque']=='VOLKSWAGEN POLO SEDAN'){
						$visite3=$ent3['date_visite'];
	                    $assurance3=$ent3['date_assurance'];
$date5 = new DateTime();
$match_date5 = new DateTime($visite3);
$interval5 = $date5->diff($match_date5);
$jrs5= $interval5->format('%R%a');
$date6 = new DateTime();
$match_date6 = new DateTime($assurance3);
$interval6 = $date6->diff($match_date6);
$jrs6= $interval6->format('%R%a');


if(($jrs5 <=10)&& ($jrs5 >=0)){

echo

	  "<tr><td style=\"color:red\"> la voiture VOLKSWAGEN POLO SEDAN reste ".$jrs5." jours pour refaire la visite . </td></tr></br>" ;


			   }


if(($jrs6 <=10)&& ($jrs6 >=0)){

echo  "<tr><td style=\"color:red\"> la voiture VOLKSWAGEN POLO SEDAN reste ".$jrs6." jours pour refaire l'assurance . </td></tr></br>" ;

			   }

			   }}






  $rep5=$db->query('SELECT * FROM vehicules');
			   while($ent5=$rep5->fetch()){
                  if ($ent5['marque']=='FIAT 500'){
						$visite5=$ent5['date_visite'];
	                    $assurance5=$ent5['date_assurance'];
$date9 = new DateTime();
$match_date9 = new DateTime($visite5);
$interval9 = $date9->diff($match_date9);
$jrs9= $interval9->format('%R%a');
$date10 = new DateTime();
$match_date10 = new DateTime($assurance5);
$interval10 = $date10->diff($match_date10);
$jrs10= $interval10->format('%R%a');


if(($jrs9 <=10)&& ($jrs9 >=0)){

echo

	  "<tr><td style=\"color:red\"> la voiture FIAT 500 reste ".$jrs9." jours pour refaire la visite . </td></tr></br>" ;


			   }


if(($jrs10 <=10)&& ($jrs10 >=0)){

echo  "<tr><td style=\"color:red\"> la voiture FIAT 500 reste ".$jrs10." jours pour refaire l'assurance .  </td></tr></br>" ;

			   }

			   }}


 $rep6=$db->query('SELECT * FROM vehicules');
			   while($ent6=$rep6->fetch()){
                  if ($ent6['marque']=='FORD FOCUS'){
						$visite6=$ent6['date_visite'];
	                    $assurance6=$ent6['date_assurance'];
$date11 = new DateTime();
$match_date11 = new DateTime($visite6);
$interval11 = $date11->diff($match_date11);
$jrs11= $interval11->format('%R%a');
$date12 = new DateTime();
$match_date12 = new DateTime($assurance6);
$interval12 = $date12->diff($match_date12);
$jrs12= $interval12->format('%R%a');


if(($jrs11 <=10)&& ($jrs11 >=0)){

echo

	  "<tr><td style=\"color:red\"> la voiture FORD FOCUS reste ".$jrs11." jours pour refaire la visite . </td></tr></br>" ;


			   }


if(($jrs12 <=10)&& ($jrs12 >=0)){

echo  "<tr><td style=\"color:red\"> la voiture FORD FOCUS reste ".$jrs12." jours pour refaire l'assurance . </td></tr></br>" ;

			   }

			   }}


$rep7=$db->query('SELECT * FROM vehicules');
			   while($ent7=$rep7->fetch()){
                  if ($ent7['marque']=='SEAT LEON'){
						$visite7=$ent7['date_visite'];
	                    $assurance7=$ent7['date_assurance'];
$date13 = new DateTime();
$match_date13 = new DateTime($visite7);
$interval13 = $date13->diff($match_date13);
$jrs13= $interval13->format('%R%a');
$date14 = new DateTime();
$match_date14 = new DateTime($assurance7);
$interval14 = $date14->diff($match_date14);
$jrs14= $interval14->format('%R%a');


if(($jrs13 <=10)&& ($jrs13 >=0)){

echo

	  "<tr><td style=\"color:red\"> la voiture SEAT LEON reste ".$jrs13." jours pour refaire la visite . </td></tr></br>" ;


			   }


if(($jrs14 <=10)&& ($jrs14 >=0)){

echo  "<tr><td style=\"color:red\"> la voiture SEAT LEON reste ".$jrs14." jours pour refaire l'assurance . </td></tr></br>" ;

			   }

			   }}

$rep8=$db->query('SELECT * FROM vehicules');
			   while($ent8=$rep8->fetch()){
                  if ($ent8['marque']=='VOLKSWAGEN GOLF 7'){
						$visite8=$ent8['date_visite'];
	                    $assurance8=$ent8['date_assurance'];
$date15 = new DateTime();
$match_date15 = new DateTime($visite8);
$interval15 = $date15->diff($match_date15);
$jrs15= $interval15->format('%R%a');
$date16 = new DateTime();
$match_date16 = new DateTime($assurance8);
$interval16 = $date16->diff($match_date16);
$jrs16= $interval16->format('%R%a');


if(($jrs15 <=10)&& ($jrs15 >=0)){

echo

	  "<tr><td style=\"color:red\"> la voiture VOLKSWAGEN GOLF 7 reste ".$jrs15." jours pour refaire la visite . </td></tr></br>" ;


			   }


if(($jrs16 <=10)&& ($jrs16 >=0)){

echo  "<tr><td style=\"color:red\"> la voiture VOLKSWAGEN GOLF 7 reste ".$jrs16." jours pour refaire l'assurance . </td></tr></br>" ;

			   }

			   }}

$rep9=$db->query('SELECT * FROM vehicules');
			   while($ent9=$rep9->fetch()){
                  if ($ent9['marque']=='SUZUKI VITARA'){
						$visite9=$ent9['date_visite'];
	                    $assurance9=$ent9['date_assurance'];
$date17 = new DateTime();
$match_date17 = new DateTime($visite9);
$interval17 = $date17->diff($match_date17);
$jrs17= $interval17->format('%R%a');
$date18 = new DateTime();
$match_date18 = new DateTime($assurance9);
$interval18 = $date18->diff($match_date18);
$jrs18= $interval18->format('%R%a');


if(($jrs17 <=10)&& ($jrs17 >=0)){

echo

	  "<tr><td style=\"color:red\"> la voiture SUZUKI VITARAreste ".$jrs17." jours pour refaire la visite . </td></tr></br>" ;


			   }


if(($jrs18 <=10)&& ($jrs18 >=0)){

echo  "<tr><td style=\"color:red\"> la voiture SUZUKI VITARA reste ".$jrs18." jours pour refaire l'assurance . </td></tr></br>" ;

			   }

			   }}




$rep10=$db->query('SELECT * FROM vehicules');
			   while($ent10=$rep10->fetch()){
                  if ($ent10['marque']=='MERCEDES CLASSE C'){
						$visite10=$ent10['date_visite'];
	                    $assurance10=$ent10['date_assurance'];
$date19 = new DateTime();
$match_date19 = new DateTime($visite10);
$interval19 = $date19->diff($match_date19);
$jrs19= $interval19->format('%R%a');
$date20 = new DateTime();
$match_date20 = new DateTime($assurance10);
$interval20 = $date20->diff($match_date20);
$jrs20= $interval20->format('%R%a');


if(($jrs19 <=10)&& ($jrs19 >=0)){

echo

	  "<tr><td style=\"color:red\"> la voiture MERCEDES CLASSE C reste ".$jrs19." jours pour refaire la visite . </td></tr></br>" ;


			   }


if(($jrs20 <=10)&& ($jrs20 >=0)){

echo  "<tr><td style=\"color:red\"> la voiture MERCEDES CLASSE C reste ".$jrs20." jours pour refaire l'assurance . </td></tr></br>" ;

			   }

			   }}
$rep11=$db->query('SELECT * FROM vehicules');
			   while($ent11=$rep11->fetch()){
                  if ($ent11['marque']=='AUDI A4'){
						$visite11=$ent11['date_visite'];
	                    $assurance11=$ent11['date_assurance'];
$date21 = new DateTime();
$match_date21 = new DateTime($visite11);
$interval21 = $date21->diff($match_date21);
$jrs21= $interval21->format('%R%a');
$date22 = new DateTime();
$match_date22 = new DateTime($assurance11);
$interval22 = $date22->diff($match_date22);
$jrs22= $interval22->format('%R%a');


if(($jrs21 <=10)&& ($jrs21 >=0)){

echo

	  "<tr><td style=\"color:red\"> la voiture AUDI A4 reste ".$jrs21." jours pour refaire la visite . </td></tr></br>" ;


			   }


if(($jrs22 <=10)&& ($jrs22 >=0)){

echo  "<tr><td style=\"color:red\"> la voiture AUDI A4 reste ".$jrs22." jours pour refaire l'assurance . </td></tr></br>" ;

			   }

			   }}
	$rep12=$db->query('SELECT * FROM vehicules');
			   while($ent12=$rep12->fetch()){
                  if ($ent12['marque']=='PEUGEOT 5008'){
						$visite12=$ent12['date_visite'];
	                    $assurance12=$ent12['date_assurance'];
$date23 = new DateTime();
$match_date23 = new DateTime($visite12);
$interval23 = $date23->diff($match_date21);
$jrs23= $interval23->format('%R%a');
$date24 = new DateTime();
$match_date24 = new DateTime($assurance12);
$interval24 = $date24->diff($match_date24);
$jrs24= $interval24->format('%R%a');


if(($jrs23 <=10)&& ($jrs23 >=0)){

echo

	  "<tr><td style=\"color:red\"> la voiture PEUGEOT 5008 reste ".$jrs23." jours pour refaire la visite . </td></tr></br>" ;


			   }


if(($jrs24 <=10)&& ($jrs24 >=0)){

echo  "<tr><td style=\"color:red\"> la voiture PEUGEOT 5008 reste ".$jrs24." jours pour refaire l'assurance . </td></tr></br>" ;

			   }

			   }}

		$rep13=$db->query('SELECT * FROM vehicules');
			   while($ent13=$rep13->fetch()){
                  if ($ent13['marque']=='RANGE ROVER VELAR'){
						$visite13=$ent13['date_visite'];
	                    $assurance13=$ent13['date_assurance'];
$date25 = new DateTime();
$match_date25 = new DateTime($visite13);
$interval25 = $date25->diff($match_date25);
$jrs25= $interval25->format('%R%a');
$date26 = new DateTime();
$match_date26 = new DateTime($assurance13);
$interval26 = $date26->diff($match_date26);
$jrs26= $interval26->format('%R%a');


if(($jrs25 <=10)&& ($jrs25 >=0)){

echo

	  "<tr><td style=\"color:red\"> la voiture RANGE ROVER VELAR reste ".$jrs25." jours pour refaire la visite . </td><tr></br>" ;


			   }


if(($jrs26 <=10)&& ($jrs26 >=0)){

echo  "<tr><td style=\"color:red\"> la voiture RANGE ROVER VELAR reste ".$jrs26." jours pour refaire l'assurance . </td></tr></br></table></div></div></div>" ;

			   }

			   }}
?>


</div>
</br>
</body>
</html>
