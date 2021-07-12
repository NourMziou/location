<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso8859-1" />

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <link href="accueil.css" rel="stylesheet">

</head>
<body>

    <header>
      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
		          <div class="navbar-brand" >
<img src="logo1.png" width="79" height="70" alt="" loading="lazy">
</div>
          <a class="navbar-brand" href="accueil.php"><strong>Accueil</strong></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
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
      <!-- Navbar -->
      <!-- Full Page Intro -->
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
                           <h3><strong>Réservez votre voiture location de voiture en Tunisie! </strong></h3>

                           <hr/>
                         </div>

                         <!--Body-->
                        <form class="needs-validation" novalidate  action= "reservation.php" method="POST" enctype="application/x-www-form-urlencoded" >
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01"style="color:black;"><strong>Date de prise:</strong></label>
      <input type="date" for="la-date"  class="form-control" id="validationCustom01"  required name ="date1">
      <div class="valid-feedback">

      </div>
    </div>
    <div class="col-md-6 mb-3">
     <label for="validationCustom02" style="color:black;"><strong>Date de restitution:</strong></label>
      <input type="date" for="la-date"  class="form-control" id="validationCustom02"  required name ="date2">
      <div class="valid-feedback">

      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03"style="color:black;"><strong>heure de prise:</strong></label>
      <input type="time" class="form-control"  id="validationCustom03" required name ="heure1">
      <div class="invalid-feedback">

      </div>
    </div>
    <div class="col-md-6 mb-3">

      <label for="validationCustom04"style="color:black;"><strong>heure de restitution:</strong></label>
      <input type="time" class="form-control"  id="validationCustom04" required name ="heure2">
      <div class="invalid-feedback">

      </div>
    </div>
  </div>

  <div class="text-center mt-4">
            <button class="btn btn-danger" name="bouton" type="submit" ><strong style="color:black;">Devis & R&eacute;servation </strong></button>

                  </div>
</form>

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
})();
</script>


                     <!--/.Form-->
                   </div>

                 </div>

                  </form>
               </div>

             </div>
             <!-- Mask & flexbox options-->
           </div>
           <!-- Full Page Intro -->
         </header>
         <!-- Main navigation -->
         <!--Main Layout-->
         <main>
           <div class="container-fluid" style="padding-top:50px">
             <!--Grid row-->

               <!--Grid column-->
              <div class="row justify-content-center">
			  <div class="col-md-4">
			  <div class="card shadow" style="width: 25rem;">
			  <div class="inner">
			  <img src="im.png" class="card-img-top" alt="...">
			  </div>

  <div class="card-body text-center">
   <h5 class="card-title">La longue durée aux clients rationnels</h5>
    <p class="card-text">Le réseau ferroviaire tunisien est très bien développé, mais les plus petites villes ne sont pas toujours accessibles en train. L’avantage de louer une voiture est de pouvoir se rendre dans les régions les plus inaccessibles en toute autonomie, en suivant les routes départementales qui sont parfois pensées comme de vrais circuits de randonnée automobile, offrant des vues exceptionnelles.</p>

  </div>
</div>
</div>
			  <div class="col-md-4">
			  		  <div class="card shadow" style="width: 25rem;">
					  <div class="inner">
			   <img src="image.png" class="card-img-top" alt="...">
			  </div>

  <div class="card-body text-center">
  <h5 class="card-title">Nous sommes plus qu'un loueur de voitures..</h5>
    <p class="card-text">notre agence vous offre ce dont vous avez besoin pour vos visites en Tunisie et aux tarifs pas cher. Nous pouvons vous assurer que vous trouverez les meilleures offres. N’oubliez pas de gérer votre réservation en ligne..</p>

  </div>
</div>
			  </div>
			  <div class="col-md-4">
			  		  <div class="card shadow" style="width: 25rem;">
					  	  <div class="inner">
			  <img src="testour.jpg" class="card-img-top" alt="...">
			  </div>

  <div class="card-body text-center">
    <h5 class="card-title">Visiter la Tunisie!</h5>
    <p class="card-text">Le réseau ferroviaire français est très bien développé, mais les plus petites villes ne sont pas toujours accessibles en train. L’avantage de louer une voiture est de pouvoir se rendre dans les régions les plus inaccessibles en toute autonomie, en suivant les routes départementales qui sont parfois pensées comme de vrais circuits de randonnée automobile, offrant des vues exceptionnelles.</p>

  </div>
</div>
			  </div>
</div>




               <!--Grid column-->

             <!--Grid row-->
           </div>
         </main>
         <!--Main Layout-->

     </body>
 </html>
