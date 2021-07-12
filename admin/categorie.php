<!DOCTYPE html>
<html lang="en">
<head>
  <title>catégories</title>
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
  
   <div class="container" style="padding-top:100px;width:70%; " align="center">
   <form class="needs-validation" novalidate action="categorie.php" method="POST" enctype="application/x-www-form-urlencoded" >
     <table>
	 <tr>

 <td> &nbsp <button class="btn btn-success" type="submit" name="économique"><strong style="padding-left:80px;padding-right:80px;color:black">économique
</button></td>
 <td> &nbsp <button class="btn btn-warning" type="submit" name="intermédiaire"><strong style="padding-left:70px;padding-right:70px;color:black">intermédiaire
</button></td>
 <td> &nbsp <button class="btn btn-danger" type="submit" name="luxe"><strong style="padding-left:100px;padding-right:100px;color:black">luxe
</button></td>
</tr>
</table>
</form>

</div>
</br></br>

<?php
 try
   {
        $db = new PDO('mysql:host=localhost;dbname=Voiture;charset=utf8','root','');
   }
  catch (Exception $e)
  {
      die('Erreur : ' . $e->getMessage());
  }
if(isset($_POST['économique'])){
	 $requete = $db->query('SELECT * FROM vehicules WHERE catégorie="économique" ');
     echo"<div class=\"container\" style=\"padding-left:150px;width:70%;\">";
     while($table=$requete->fetch()){
		 
	 echo"<ul style=\"list-style-type: square;\"><li >".$table["marque"]."</li></ul>";
	 }echo"</div>";
}

if(isset($_POST['intermédiaire'])){
	 $requete = $db->query('SELECT * FROM vehicules WHERE catégorie="intermédiaire" ');
     echo"<div class=\"container\" style=\"padding-left:450px;width:70%;\">";
     while($table=$requete->fetch()){
		 
	 echo"<ul style=\"list-style-type: square;\"><li >".$table["marque"]."</li></ul>";
	 }echo"</div>";
}

if(isset($_POST['luxe'])){
	 $requete = $db->query('SELECT * FROM vehicules WHERE catégorie="luxe" ');
     echo"<div class=\"container\" style=\"padding-left:720px;width:70%;\">";
     while($table=$requete->fetch()){
		 
	 echo"<ul style=\"list-style-type: square;\"><li >".$table["marque"]."</li></ul>";
	 }echo"</div>";
}




?>



</body>
</html>









