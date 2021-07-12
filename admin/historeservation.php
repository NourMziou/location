
<!DOCTYPE html>
<html lang="en">
<head>
  <title>historeique</title>
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
	  <a class="navbar-brand" href="choix.php"><strong>Choix</strong></a>
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
  <div class="container" style="padding-top:100px; align:center;width:75%; ">
   <form class="needs-validation" novalidate action="<?=$_SERVER['PHP_SELF']?>" method="POST" enctype="application/x-www-form-urlencoded" >
  <div class="card" style="background-color: transparent;">
    <div class="card-body">
	  <div class="container" >
	  <table><tr><td>
      <h3 ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-return-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"/>
</svg> Historique des réservations d'un client &nbsp &nbsp &nbsp &nbsp </h3>  </td>
<td><strong><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
</svg>  ID du client :&nbsp </strong></td><td><input type="number" name="id" class="form-control" id="validationCustom01"  required  value="<?php if(isset($_POST['id'])){echo$_POST['id'];}?>">   <div class="valid-feedback">
    </div></td></tr></table>
      
	  
       <div style="padding-left:250px;">
           <br/>
   <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
</svg> &nbsp <button class="btn btn-dark" type="submit" name="rechercher"><strong style="padding-left:100px;padding-right:100px;">rechercher
</button>
         </div>
	  </div></div></div>
	  </form>
	  
<?php
try
     {
          $db = new PDO('mysql:host=localhost;dbname=Voiture;charset=utf8','root','');
     }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
    if(isset($_POST['rechercher'])){	
	$rep=$db->prepare('SELECT nom,prenom FROM espace_client WHERE id=:i');
	$rep->execute(array('i' =>$_POST['id']));
			   while($ent=$rep->fetch()) {
                  $name=$ent['nom'];
                  $lastname=$ent['prenom'];	
  				  
  
	echo"<div><h4>".$name." ".$lastname."</h4></div>";
		            }	
	echo"</br>";
$tab=$db->prepare('SELECT * FROM reservation WHERE ID_client=:i');
	$tab->execute(array('i' =>$_POST['id']));
	echo"<table style=\"width:70%;border: 3px solid #555353;\" border=\"3\" align=\"center\">";
	echo"<tr><td style=\"border: 3px solid #555353;\" align=\"center\"><strong>ID</strong></td>
       <td style=\"border: 3px solid #555353;\" align=\"center\"><strong>Date de prise</strong></td>
	    <td style=\"border: 3px solid #555353;\" align=\"center\"><strong>Date de restitution</strong></td>
		 <td style=\"border: 3px solid #555353;\" align=\"center\"><strong>Heure de prise</strong></td>
		  <td style=\"border: 3px solid #555353;\" align=\"center\"><strong>Heure de restitution</strong></td></tr>";
		
	     while($table=$tab->fetch()){
		 echo"<tr><td style=\"border: 3px solid #555353;\" align=\"center\">".$table["id_reservation"]."</td><td  align=\"center\" style=\"border: 3px solid #555353;\">".$table["Date_de_prise"].
		 "</td><td align=\"center\" style=\"border: 3px solid #555353;\">".$table["heure_de_prise"]."</td><td  align=\"center\" style=\"border: 3px solid #555353;\">".$table["Date_de_restitution"].
		 "</td><td  align=\"center\" style=\"border: 3px solid #555353;\">".$table["heure_de_restitution"]."</td></tr>";}
		 
    echo"</table>";

					
	}
?>  
  
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
