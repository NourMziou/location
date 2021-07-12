<!DOCTYPE html>
<html lang="en">
<head>
  <title>suivi</title>
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
  </nav><br/><br/><br/>
  <div class="container" style="padding-top:100px; align:center;width:60%; ">
   <form class="needs-validation" novalidate action="suivi.php" method="POST" enctype="application/x-www-form-urlencoded" >
  <div class="card" style="background-color: transparent;">
    <div class="card-body">
	  <div class="container" >
	  <table><tr><td>
      <h3 ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-return-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"/>
</svg> Payement en agence &nbsp &nbsp &nbsp &nbsp </h3>  </td>
<td><strong><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
</svg>  ID du facture :&nbsp </strong></td><td><input type="number" name="id" class="form-control" id="validationCustom01"  required  >   <div class="valid-feedback">
    </div></td></tr></table>
      </div>
	  <div style="padding-left:250px;">
           <br/>
   <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-bookmark-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
  <path fill-rule="evenodd" d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
</svg> <button class="btn btn-dark" type="submit" name="enregistrer"><strong style="padding-left:100px;padding-right:100px;">enregistrer
</svg></button>
         </div></div></div>

       
  </form>
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
<?php
   try
   {
        $db = new PDO('mysql:host=localhost;dbname=Voiture;charset=utf8','root','');
   }
  catch (Exception $e)
  {
      die('Erreur : ' . $e->getMessage());
  }
  if(isset($_POST['enregistrer'])){
    $requete = $db->prepare('UPDATE facture SET payement=\'payé\' WHERE  id=:nnn ');
  $requete->execute(array('nnn' =>$_POST['id']));
 }
?>
