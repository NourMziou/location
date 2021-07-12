<!DOCTYPE html>
<html>
<head>
   <title> compte rendu</title>
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
      </nav>
	  <br/> <br/><br/>
    <div class="container" style="padding-top:100px; align:center;width:70%; ">
     <form class="needs-validation" novalidate action="rendu.php" method="POST" enctype="application/x-www-form-urlencoded" >
    <div class="card" style="background-color: transparent;">
      <div class="card-body">
      <div class="container" >

        <h2 ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
</svg>&nbsp &nbsp Compte-rendu : &nbsp &nbsp &nbsp &nbsp </h2> </br>
 <table><tr><td>
<strong><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0
     1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
  </svg>  ID du réservation : &nbsp  </strong></td><td> </td>
  <td><strong><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0
     1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
  </svg>  ID du client : &nbsp </strong></td></tr><tr><td><input type="number" name="idr" class="form-control" id="validationCustom01"  required  > <div class="valid-feedback">
      </div></td><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td><td><input type="number" name="id" class="form-control" id="validationCustom01"  required  >   <div class="valid-feedback">
      </div></td></tr>  </table><br/><br/>
      <table>
<tr><td>  <label for="validationCustom01"style="color:black;"><strong> Nom :</strong></label>
  <input style="width:280px;"type="text" class="form-control" id="validationCustom02"  required name="nom" >
  <div class="valid-feedback">
<td>&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </td>
  </div></td>
  <td> <label for="validationCustom01"style="color:black;"><strong> Prénom :</strong></label>
    <input style="width:280px;" type="text" class="form-control" id="validationCustom02"  required name="prenom" >
    <div class="valid-feedback">
    </div></td></tr>
    <tr><td><br/><br/></td></tr>
    <tr><td>  <label for="validationCustom01"style="color:black;"><strong> Date prévu de restitution :</strong></label>
      <input style="width:280px;"type="date" class="form-control" id="validationCustom02"  required name="Datep" >
      <div class="valid-feedback">
    <td>&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
      </div></td>
      <td> <label for="validationCustom01"style="color:black;"><strong> Date réelle de restitution :</strong></label>
        <input style="width:280px;" type="date" class="form-control" id="validationCustom02"  required name="Dater" >
        <div class="valid-feedback">
        </div></td>
</table>
<br/><br/>
<div style="padding-left:0px;">
<label for="validationCustom01"style="color:black;"><strong> Etat du voiture :</strong></label>
<select class="custom-select" id="validationCustom06" required name="etat">
  <option selected disabled value="">--</option>
                                          <option value="Bonne état" >Bonne état</option>
                                          <option value="Mauvaise état" >Mauvaise état</option>
</select>
<div class="valid-feedback">
</div>
        </div>
        <br/><br/>
        <div style="padding-left:0px;">
&nbsp&nbsp
     <div style="padding-left:250px;">
             <br/>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-bookmark-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
    <path fill-rule="evenodd" d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
  </svg> <button class="btn btn-dark" type="submit" name="remis"><strong style="padding-left:100px;
  padding-right:100px;">Remis
  </svg></button>
</div>
      </div>
    </div>
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
//selon etat de voiture
if(isset($_POST["remis"])&& ($_POST["etat"]=="Mauvaise état")){

	     $req = $db->prepare('INSERT INTO compte_rendu (nom,prenom,annomalie)VALUES(:nom,:prenom,:ann)');
	     $req->execute(array('nom' =>$_POST["nom"],'prenom' =>$_POST["prenom"],'ann'=>$_POST["etat"]));}


//selon la date de réccupération de la voiture
if(isset($_POST["remis"])&&  ($_POST["Dater"]!= $_POST["Datep"])){
		     $requete = $db->prepare('INSERT INTO compte_rendu (nom,prenom,annomalie)VALUES(:nom,:prenom,:ann)');
	     $requete->execute(array('nom' =>$_POST["nom"],'prenom' =>$_POST["prenom"],'ann'=>"retard"));}



  $re = $db->prepare('SELECT * FROM reservation WHERE id_reservation=:a ');
    $re->execute(array('a' =>$_POST["idr"]));

 while($table=$re->fetch()){
$id=$table["ID_véhicule"];
$md = $db->prepare('UPDATE vehicules SET etat=\'oui\' WHERE id_vehicule=:n');
 $md->execute(array('n' =>$id));	}
	?>
