<!DOCTYPE html>
<html>
<head>
   <title> carnurant</title>
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
   <form class="needs-validation" novalidate action="carburant.php" method="POST" enctype="application/x-www-form-urlencoded" >
     <table>
	 <tr>
 <td> &nbsp <button class="btn btn-success" type="submit" name="Essence"><strong style="padding-left:110px;padding-right:110px;color:black">Essence
</button></td>
 <td> &nbsp <button class="btn btn-warning" type="submit" name="Diesel"><strong style="padding-left:110px;padding-right:110px;color:black">Diesel
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
    if(isset($_POST['Essence'])){
    	 $requete = $db->query('SELECT * FROM vehicules WHERE carburant="Essence" ');
         echo"<div class=\"container\" style=\"padding-left:250px;width:70%;\">";
         while($table=$requete->fetch()){
    	 echo"<ul style=\"list-style-type: square;\"><li >".$table["marque"]."</li></ul>";
    	 }echo"</div>";
    }
    if(isset($_POST['Diesel'])){
       $requete = $db->query('SELECT * FROM vehicules WHERE carburant="Diesel" ');
         echo"<div class=\"container\" style=\"padding-left:550px;width:70%;\">";
         while($table=$requete->fetch()){
       echo"<ul style=\"list-style-type: square;\"><li >".$table["marque"]."</li></ul>";
       }echo"</div>";
    }
               ?>