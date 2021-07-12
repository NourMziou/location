<!DOCTYPE html>
<html lang="en">
<head>
  <title>liste facture</title>
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

  <div class="container" style="padding-top:100px; align:center;width:70%; ">
  <?php
   try
     {
          $db = new PDO('mysql:host=localhost;dbname=Voiture;charset=utf8','root','');
     }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
    $tab=$db->query('SELECT * FROM facture where payement=\'payé\'');
  	echo"<table style=\"width:100%;border: 3px solid #555353;\" border=\"1\" align=\"center\">";
  	echo"<tr> <td style=\"border: 3px solid #555353;\" align=\"center\"><strong>Nom</strong></td>
         <td style=\"border: 3px solid #555353;\" align=\"center\"><strong>Prénom</strong></td>
         <td style=\"border: 3px solid #555353;\" align=\"center\"><strong>Voiture</strong></td>
         <td style=\"border: 3px solid #555353;\" align=\"center\"><strong>Prix total</strong></td>
         <td style=\"border: 3px solid #555353;\" align=\"center\"><strong>Payement</strong></td>
         </tr>";
  	   while($table=$tab->fetch()){
  		   echo"<tr><td style=\"border: 3px solid #555353;\" align=\"center\">".$table["nom"].
         "</td><td style=\"border: 3px solid #555353;\" align=\"center\">".$table["prenom"].
         "</td><td style=\"border: 3px solid #555353;\" align=\"center\">"
  		   .$table["marque"]."</td><td style=\"border: 3px solid #555353;\" align=\"center\">".$table["prix_total"].
         "</td><td style=\"border: 3px solid #555353;\" align=\"center\">".$table["payement"]."</td>";}

  ?>
</div>
</body>
</html>