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
                <a class="nav-link" href="vehicules.php">Vehicules<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.php">Services</a>
              </li>

            </ul>

          </div>
        </div>
      </nav>
	  <br/> <br/><br/>
      <!-- Navbar -->
	     <section class="bg-grey" style="height:80%;">
               <div class="container-fluid" style="width: 80%;">
                   <div class="row">
                       <div class="col-md-12 col-lg-12 m-auto">
<br/><br/>
	<form name="f" class="needs-validation" novalidate  action= "registration.php" method="POST" enctype="application/x-www-form-urlencoded">
  <div class="form-row">

    <div class="col-md-4 mb-3">
      <label for="validationCustom06">Civilité</label>

      <select class="custom-select" id="validationCustom06" required name="civilité">
        <option selected disabled value=""></option>

                                                <option value="Mr." >Monsieur</option>
                                                <option value="Mme" >Mme</option>
                                                <option value="Mlle" >Mlle</option>
      </select>
      <div class="invalid-feedback">

      </div>

      <div class="valid-feedback">

      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Nom</label>
      <input type="text" class="form-control" id="validationCustom02"  required name="nom" >
      <div class="valid-feedback">

      </div>
    </div>
	<div class="col-md-4 mb-3">
      <label for="validationCustom02">Prénom</label>
      <input type="text" class="form-control" id="validationCustom02"  required name="prénom" >
      <div class="valid-feedback">

      </div>
    </div>
  </div>
  <br/><br/>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Email</label>
      <input type="email" class="form-control" id="inputEmail3" required name="email">
      <div class="invalid-feedback">

      </div>
    </div>

        <div class="col-md-3 mb-3">
      <label for="validationCustom04">Mot de passe</label>
      <input type="password" class="form-control" id="validationCustom04"  required name="mdp">
      <div class="valid-feedback">

      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Numéro de téléphone <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3.925 1.745a.636.636 0 0 0-.951-.059l-.97.97c-.453.453-.62 1.095-.421 1.658A16.47 16.47 0 0 0 5.49 10.51a16.471 16.471 0 0 0 6.196 3.907c.563.198 1.205.032 1.658-.421l.97-.97a.636.636 0 0 0-.06-.951l-2.162-1.682a.636.636 0 0 0-.544-.115l-2.052.513a1.636 1.636 0 0 1-1.554-.43L5.64 8.058a1.636 1.636 0 0 1-.43-1.554l.513-2.052a.636.636 0 0 0-.115-.544L3.925 1.745zM2.267.98a1.636 1.636 0 0 1 2.448.153l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
</svg></label>
      <input type="number" class="form-control" id="validationCustom05" required name="numéro">
      <div class="invalid-feedback">

      </div>
    </div>
	</div><br/><br/>
	      <div class="form-row">
   <div class="col-md-6 mb-3">
      <label for="validationCustom07"style="color:black;">Date de naissance</label>
      <input type="date"  class="form-control" id="validationCustom07"  required name="date">
      <div class="valid-feedback">
	  </div>
	  </div>
	  <div class="col-md-6 mb-3">
      <label for="validationCustom07"style="color:black;">Permis de conduire delivré le</label>
      <input type="date"  class="form-control" id="validationCustom07"  required name="permis" >
      <div class="valid-feedback">
	  </div>
	  </div>
	  </div>

      <br/><br/>
      <div style="margin-left:890px;padding-right: 60px;
     padding-left: 60px;">
      <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-bookmark-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
     <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
     <path fill-rule="evenodd" d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
   </svg>  <button  class="btn btn-dark" type="submit"  name="inscrire">S'inscrire</button></div>
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


</div>
</div>
</div>
</section>

</body>
</html>
