
<!DOCTYPE html>
<html lang="en">
<head>
  <title>liste réservation</title>
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
	$tab=$db->query('SELECT * FROM reservation');

  echo"<table style=\"width:100%;border: 3px solid #555353;\" border=\"1\" align=\"center\">";
	echo"<tr><td style=\"border: 3px solid #555353;\" align=\"center\"><strong>ID_reservation</strong></td>
       <td style=\"border: 3px solid #555353;\" align=\"center\"><strong>ID_client</strong></td>
	     <td style=\"border: 3px solid #555353;\" align=\"center\"><strong>Nom</strong></td>
       <td style=\"border: 3px solid #555353;\" align=\"center\"><strong>Prénom</strong></td>
       <td style=\"border: 3px solid #555353;\" align=\"center\"><strong>Date_de_prise</strong></td>
       <td style=\"border: 3px solid #555353;\" align=\"center\"><strong>Heure_de_prise</strong></td>
       <td style=\"border: 3px solid #555353;\" align=\"center\"><strong>Date_de_restitution</strong></td>
       <td style=\"border: 3px solid #555353;\" align=\"center\"><strong>Heure_de_restitution</strong></td>

       </tr>";
	     while($table=$tab->fetch()){
         $id=$table['ID_client'];
         $tab2=$db->prepare('SELECT nom,prenom FROM espace_client WHERE id=:i');
         	$tab2->execute(array('i' =>$id));
           while($table2=$tab2->fetch()){
             $nom=$table2['nom'];
             $prenom=$table2['prenom'];
             echo"<tr><td style=\"border: 3px solid #555353;\" align=\"center\">".$table["id_reservation"].
             "</td><td  align=\"center\" style=\"border: 3px solid #555353;\">"   .$id.
            "</td><td align=\"center\" style=\"border: 3px solid #555353;\">".$nom.
            "</td><td  align=\"center\" style=\"border: 3px solid #555353;\">".$prenom.
              "</td><td  align=\"center\" style=\"border: 3px solid #555353;\">".$table["Date_de_prise"].
                "</td><td  align=\"center\" style=\"border: 3px solid #555353;\">".$table["heure_de_prise"].
                  "</td><td  align=\"center\" style=\"border: 3px solid #555353;\">".$table["Date_de_restitution"].
            "</td><td  align=\"center\" style=\"border: 3px solid #555353;\">".$table["heure_de_restitution"].
            "</td></tr>";


}}
	echo"</table>";
?>
</div>
</body>
</html>
