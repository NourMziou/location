
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Administration</title>
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
<div class="container" style="padding-top:100px; align:center;width:60%; ">
 
  <div class="card" style="background-color: transparent;">
    <div class="card-body">
	  <div class="container" >
      <h3 ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" 
						   fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 
							13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 
							10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8
							7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            </svg> connexion</h3>

      </div>
	  <form class="needs-validation" novalidate action="index1.php" method="post" enctype="application/x-www-form-urlencoded" >
	  
      <div style="padding-left:30px;">
      <label for="validationCustom01"style="color:black;"><strong> Nom :</strong></label>

      <input type="text" name="nom" class="form-control" id="validationCustom01"  required ></div>
      
      <div class="valid-feedback">

    </div>
    
    
        <div  style="padding-left:30px;">
        <label for="validationCustom01"style="color:black;" name="mdp" ><strong> Mot de passe :</strong></label>

        <input type="password" name="mdp" class="form-control" id="validationCustom01"  required></div>
        
        <div class="valid-feedback">

      </div>
     


     

         <div style="padding-left:250px;">
           <br/>

            <button class="btn btn-dark" type="submit" name="connecter"><strong style="padding-left:100px;padding-right:100px;">Se connecter</strong></button>


         </div>
		 
  </form>
	  
	  
	
    </div>
  </div>
</div>
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
</body>
</html>





 