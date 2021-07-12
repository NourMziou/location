<!DOCTYPE html>
<html>
<head>
   <title> disponibilité</title>
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
      </nav><br/><br/><br/><br/><br/><br/>
      	<div class="container" style="padding-top:100px;width:70%; " align="center">
   <form class="needs-validation" novalidate action="dispo.php" method="POST" enctype="application/x-www-form-urlencoded" >
     <table>
	 <tr>

 <td> &nbsp <button class="btn btn-success" type="submit" name="dispo"><strong style="padding-left:110px;padding-right:110px;color:black">voiture disponible
</button></td>
 <td> &nbsp <button class="btn btn-warning" type="submit" name="nondispo"><strong style="padding-left:80px;padding-right:80px;color:black">voiture non disponible
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
    if(isset($_POST['dispo'])){
    	 $requete = $db->query('SELECT * FROM vehicules WHERE etat="oui" ');
         echo"<div class=\"container\" style=\"padding-left:200px;width:70%;\">";
         while($table=$requete->fetch()){
    	 echo"<ul style=\"list-style-type: square;\"><li >".$table["marque"]."</li></ul>";
    	 }echo"</div>";
    }
    if(isset($_POST['nondispo'])){
       $requete = $db->query('SELECT * FROM vehicules WHERE etat="non" ');
         echo"<div class=\"container\" style=\"padding-left:600px;width:70%;\">";
         while($table=$requete->fetch()){
       echo"<ul style=\"list-style-type: square;\"><li >".$table["marque"]."</li></ul>";
       }echo"</div>";
    }
  ?>
  </body>
</html>