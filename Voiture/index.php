<?php
include('login.php'); // Includes Login Script
/*if(isset($_SESSION['login_user'])){
header("location: véhicules.php"); // Redirecting To Profile Page
}*/
?>
<!DOCTYPE html>
<html>
<head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <link href="authentification.css" rel="stylesheet">

</head>
<body>

    <header>

      <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
				          <div class="navbar-brand" >
<img src="logo1.png" width="79" height="70" alt="" loading="lazy">
</div>
          <a class="navbar-brand" href="accueil.php"><strong>Accueil</strong></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
		  aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
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


      <div class="view" style="background-image: url('voiture1.jpg'); background-repeat: no-repeat; background-size: cover;
  background-position: center center;">
        <!-- Mask & flexbox options-->
        <div class="mask rgba-black-light align-items-center">
          <!-- Content -->
               <div class="container" style="padding-top:100px">
                 <!--Grid row-->
                 <div class="row mt-5">
                   <!--Grid column-->
                   <div class="col-md-6 col-xl-5 mb-4">
                     <!--Form-->
                     <div class="card wow fadeInRight" data-wow-delay="0.3s">
                       <div class="card-body">
                         <!--Header-->
                         <div class="text-center">
                           <h3><strong>connexion</strong> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person"
						   fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022
							13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8
							10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8
							7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            </svg></h3>

                           <hr/>
                         </div>


                        <form class="needs-validation" novalidate action="" method="post"
						enctype="application/x-www-form-urlencoded" >
  <div class="form-row">
      <div class="col-md-11 mb-3" style="padding-left:30px;">
      <label for="validationCustom01"style="color:black;"><strong> Email :</strong></label>

      <input type="email" name="email" class="form-control" id="validationCustom01"  required ></div>
      <div class="col-md-1 mb-3">
      <div class="valid-feedback">

    </div>
    </div>
    <div class="form-row">
        <div class="col-md-11 mb-3" style="padding-left:30px;">
        <label for="validationCustom01"style="color:black;" name="mdp" ><strong> Mot de passe :</strong></label>

        <input type="password" name="mdp" class="form-control" id="validationCustom01"  required></div>
        <div class="col-md-1 mb-3">
        <div class="valid-feedback">

      </div>
     </div>


     <div class="form-row">

         <div class="col-md-12 mb-3"style="padding-left:150px;">
           <br/>

            <button class="btn btn-danger" type="submit" name="seconnecter"><strong style="color:black;">Se connecter</strong></button>


         </div>
		 <strong style="color:red"><?php echo $error; ?></strong>
  </form>


      <div class="col-md-12 mb-3" style="padding-left:20px;">
      <hr/>

    <div class="inline-ul text-center">
      <a class="p-2 m-2 tw-ic" href="formulaire.php"><strong style="color:black">S'inscrire?   <svg width="1em" height="1em"
	  viewBox="0 0 16 16" class="bi bi-person-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
         <path fill-rule="evenodd" d="M11 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM1.022 13h9.956a.274.274 0 0
		 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83
		 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM6 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0
		 1 6 0zm4.5 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
         <path fill-rule="evenodd" d="M13 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/>
         </svg>
      </strong> </a>
   </div>
   </div>
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








 ?>
