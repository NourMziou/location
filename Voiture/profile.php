<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php");}


?>
<!DOCTYPE html>
<html>
<head>

<link href="style.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  
</head>
<body style="width: 1150px;
    margin-left: 191px;">
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

<table>
  
    <tr>
      <th colspan="4" class="table-secondary" >INFORMATION PERSONNELLE</th>
      </tr>
    <tr>
      <td style="padding-right: 203px;">Nom : <?php echo $login_session; ?></td>
      <td style="padding-right: 103px;">Prénom : <?php echo $prenom_session; ?></td>
      <td style="padding-right: 223px;">Date de naissance : <?php echo $date_session; ?></td>
    </tr>
    <tr>
	
      <td>Email : <?php echo $user_check; ?></td>
      <td>Numéro : <?php echo $numero_session;?></td>
      <td>Date de permis : <?php echo $permis_session;?> </td>
    </tr>
     <tr>
      <th colspan="4" class="table-secondary" >RECAP DEVIS</th>
      </tr>
    <tr>
     <td> <strong>Date de prise : </strong><?php echo $prise_session."    &nbsp ".$hprise_session."h"; ?></td></tr>
     <tr> <td><strong>Date de restitution : </strong><?php echo $restitution_session."  &nbsp   ".$hrestitution_session."h";?></td></tr>
    <tr> <td style="color: #0771c4;
    font-size: 20px;" class="font-weight-bold"><?php echo $marque;?> </td></tr>
     <tr><td><strong>Catégorie : </strong><?php echo $cat;?> </td></tr>
	  <tr>  <td><strong>Prix par jour :</strong> <?php echo $prix."dt" ;?> </td></tr>
	  <tr>  <td><strong>Nombres de jours :</strong>  <?php
$origin = date_create($prise_session);
$target = date_create($restitution_session);
$interval = date_diff($origin, $target);
$jours= $interval->format('%a');

echo $jours  ;?> jours </td></tr>
<tr>  <td><strong>Prix de location : </strong><?php
		$totale=$prix*(int)$jours;
		echo $totale  ;?> dt</td></tr>
	   <tr>  <td><strong>Ville de prise :</strong> Tunis  </td></tr>
	    <tr>  <td><strong>Ville de restitution :</strong> Tunis  </td></tr>
		
		<tr>
      <th colspan="4" class="table-secondary" >METHODE DE PAYEMENT</th>
	  
      </tr>
	  <tr><td></td></tr>
		
		 <th colspan="4"  ><h5>Données relatives a votre carte bancaire</h5></th>
		 </table>
		 <div>
		 <form name="f" class="needs-validation" novalidate  action= "facture.php" method="POST" enctype="application/x-www-form-urlencoded">
		 <table>
		  <tr>
     <td> <label for="validationCustom02">N° de la carte bancaire	&nbsp </label></td>
      <td> <input  type="number" class="form-control" id="validationCustom02"  required name="carte" ></td>
       <div class="invalid-feedback">
      </div>
      <div class="valid-feedback">
      </div> 
	  </tr>
  <tr>
     <td > <label for="validationCustom02">Date d'expiration	&nbsp</label></td>
      <td> <input type="date" for="la-date"  class="form-control" id="validationCustom01"  required name ="expiration"></td>
       <div class="invalid-feedback">
      </div>
      <div class="valid-feedback">
      </div> 
	  </tr>
	 <tr>
     <td> <label for="validationCustom02">Cryptogramme(CVC2)	&nbsp</label></td>
      <td> <input  type="password" class="form-control" id="validationCustom02"  required name="crypt" ></td>
       <div class="invalid-feedback">
      </div>
      <div class="valid-feedback">
      </div> 
	  </tr>
	 <tr><td></td></tr>
	 </table>
	  <div style="padding-left:40px";> <button name="ligne" class="btn btn-outline-dark" style="padding-left:45px;padding-right:55px;"type="submit" >Payer en ligne </button>
	  </div>
	   
	  </form> 
	  </div>
	<form name="f"   action= "facture.php" method="POST" enctype="application/x-www-form-urlencoded">
	  </br>
	 
	  <div style="padding-left:40px";>
	  <button  class="btn btn-outline-dark" type="submit" name="agence" style="padding-left:45px;padding-right:40px;">
	  Payer en agence </button>
	  </div>

  </form>	
	    
	 

<div style="width: 250px;margin-left: 620px;margin-top: -455px;"><img src="<?php echo $photo ?>" class="img-fluid"></div>

     
	  
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();</script>

</body>
</html>
 

 

 
 
 
 
 
 
 