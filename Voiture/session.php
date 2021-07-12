<?php
// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "voiture");
session_start();// Starting Session
// Storing Session
$user_check = $_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$query = "SELECT * from ESPACE_CLIENT where Email = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['nom'];
$prenom_session = $row['prenom'];
$date_session=$row['Date_de_naissance'];
$numero_session=$row['Numero'];
$permis_session=$row['Date_permis'];

$query1 = "SELECT * FROM reservation WHERE id_reservation=(SELECT max(id_reservation) FROM reservation)";
$ses_sql1 = mysqli_query($conn, $query1);
$row = mysqli_fetch_assoc($ses_sql1);
$prise_session = $row['Date_de_prise'];
$restitution_session = $row['Date_de_restitution'];
$hprise_session = $row['heure_de_prise'];
$hrestitution_session = $row['heure_de_restitution'];
	  

   try
     {
          $db = new PDO('mysql:host=localhost;dbname=Voiture;charset=utf8','root','');
     }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }		
	if(isset($_POST['voiture'])){
		switch($_POST['voiture']) {
	case "SKODA FABIA":
	$nb_modifs=$db->exec('UPDATE vehicules SET etat=\'non\' WHERE marque="SKODA FABIA"');
	$md = $db->exec('UPDATE reservation SET ID_véhicule=\'1\' WHERE id_reservation=(SELECT max(id_reservation) FROM reservation)');
			$rep=$db->query('SELECT * FROM vehicules');
			   while($ent=$rep->fetch()){
                    if($ent['marque']=='SKODA FABIA'){
						$marque=$ent['marque'];
		                $prix=$ent['prix_location'];
		                $photo=$ent['photo'];
			            $cat=$ent['catégorie'];
		                $etat=$ent['etat'];}}
            
		
		break;
	case "TOYOTA YARIS":
            	$nb_modifs=$db->exec('UPDATE vehicules SET etat=\'non\' WHERE marque="TOYOTA YARIS"');
				$md = $db->exec('UPDATE reservation SET ID_véhicule=\'2\' WHERE id_reservation=(SELECT max(id_reservation) FROM reservation)');
			$rep=$db->query('SELECT * FROM vehicules');
			
			   while($ent=$rep->fetch()){
                    if($ent['marque']=='TOYOTA YARIS'){
						
		$marque=$ent['marque'];
		                $prix=$ent['prix_location'];
		                $photo=$ent['photo'];
			            $cat=$ent['catégorie'];
						$etat=$ent['etat'];}}
		break;
		case "VOLKSWAGEN POLO SEDAN":
            	$nb_modifs=$db->exec('UPDATE vehicules SET etat=\'non\' WHERE marque="VOLKSWAGEN POLO SEDAN"');
				$md = $db->exec('UPDATE reservation SET ID_véhicule=\'3\' WHERE id_reservation=(SELECT max(id_reservation) FROM reservation)');
			$rep=$db->query('SELECT * FROM vehicules');
			
			   while($ent=$rep->fetch()){
                    if($ent['marque']=='VOLKSWAGEN POLO SEDAN'){
						
		$marque=$ent['marque'];
		                $prix=$ent['prix_location'];
		                $photo=$ent['photo'];
			            $cat=$ent['catégorie'];
						$etat=$ent['etat'];}}
		break;
	
	case "FIAT 500": 
	        $nb_modifs=$db->exec('UPDATE vehicules SET etat=\'non\' WHERE marque="FIAT 500"');
		    $md = $db->exec('UPDATE reservation SET ID_véhicule=\'4\' WHERE id_reservation=(SELECT max(id_reservation) FROM reservation)');	
			$rep=$db->query('SELECT * FROM vehicules');
			   while($ent=$rep->fetch()){
                    if($ent['marque']=='FIAT 500'){
						
		$marque=$ent['marque'];
		                $prix=$ent['prix_location'];
		                $photo=$ent['photo'];
			            $cat=$ent['catégorie'];
						$etat=$ent['etat'];}}
						
		break;
	case "FORD FOCUS": 
	        $nb_modifs=$db->exec('UPDATE vehicules SET etat=\'non\' WHERE marque="FORD FOCUS"');
			$md = $db->exec('UPDATE reservation SET ID_véhicule=\'5\' WHERE id_reservation=(SELECT max(id_reservation) FROM reservation)');
			$rep=$db->query('SELECT * FROM vehicules');
			   while($ent=$rep->fetch()){
                    if($ent['marque']=='FORD FOCUS'){
						
		$marque=$ent['marque'];
		                $prix=$ent['prix_location'];
		                $photo=$ent['photo'];
			            $cat=$ent['catégorie'];
						$etat=$ent['etat'];}}
		break;
	case "SEAT LEON": 
	        $nb_modifs=$db->exec('UPDATE vehicules SET etat=\'non\' WHERE marque="SEAT LEON"');
			$md = $db->exec('UPDATE reservation SET ID_véhicule=\'6\' WHERE id_reservation=(SELECT max(id_reservation) FROM reservation)');
			$rep=$db->query('SELECT * FROM vehicules');
			   while($ent=$rep->fetch()){
                    if($ent['marque']=='SEAT LEON'){
						
		$marque=$ent['marque'];
		                $prix=$ent['prix_location'];
		                $photo=$ent['photo'];
			            $cat=$ent['catégorie'];
						$etat=$ent['etat'];}}
		break;
	case "VOLKSWAGEN GOLF 7": 
	        $nb_modifs=$db->exec('UPDATE vehicules SET etat=\'non\' WHERE marque="VOLKSWAGEN GOLF 7"');
			$md = $db->exec('UPDATE reservation SET ID_véhicule=\'7\' WHERE id_reservation=(SELECT max(id_reservation) FROM reservation)');
			$rep=$db->query('SELECT * FROM vehicules');
			   while($ent=$rep->fetch()){
                    if($ent['marque']=='VOLKSWAGEN GOLF 7'){
						
		$marque=$ent['marque'];
		                $prix=$ent['prix_location'];
		                $photo=$ent['photo'];
			            $cat=$ent['catégorie'];
						$etat=$ent['etat'];}}
		break;
	case "SUZUKI VITARA": 
	        $nb_modifs=$db->exec('UPDATE vehicules SET etat=\'non\' WHERE marque="SUZUKI VITARA"');
			$md = $db->exec('UPDATE reservation SET ID_véhicule=\'8\' WHERE id_reservation=(SELECT max(id_reservation) FROM reservation)');
			$rep=$db->query('SELECT * FROM vehicules');
			   while($ent=$rep->fetch()){
                    if($ent['marque']=='SUZUKI VITARA'){
						
		$marque=$ent['marque'];
		                $prix=$ent['prix_location'];
		                $photo=$ent['photo'];
			            $cat=$ent['catégorie'];
						$etat=$ent['etat'];}}
		break;
	case "MERCEDES CLASSE C": 
	        $nb_modifs=$db->exec('UPDATE vehicules SET etat=\'non\' WHERE marque="MERCEDES CLASSE C"');
			$md = $db->exec('UPDATE reservation SET ID_véhicule=\'9\' WHERE id_reservation=(SELECT max(id_reservation) FROM reservation)');
			$rep=$db->query('SELECT * FROM vehicules');
			   while($ent=$rep->fetch()){
                    if($ent['marque']=='MERCEDES CLASSE C'){
						
		$marque=$ent['marque'];
		                $prix=$ent['prix_location'];
		                $photo=$ent['photo'];
			            $cat=$ent['catégorie'];
						$etat=$ent['etat'];}}
		break;
	case "AUDI A4": 
	        $nb_modifs=$db->exec('UPDATE vehicules SET etat=\'non\' WHERE marque="AUDI A4"');
			$md = $db->exec('UPDATE reservation SET ID_véhicule=\'10\' WHERE id_reservation=(SELECT max(id_reservation) FROM reservation)');
			$rep=$db->query('SELECT * FROM vehicules');
			   while($ent=$rep->fetch()){
                    if($ent['marque']=='AUDI A4'){
						
		$marque=$ent['marque'];
		                $prix=$ent['prix_location'];
		                $photo=$ent['photo'];
			            $cat=$ent['catégorie'];
						$etat=$ent['etat'];}}
		break;
	case "PEUGEOT 5008":
            $nb_modifs=$db->exec('UPDATE vehicules SET etat=\'non\' WHERE marque="PEUGEOT 5008"');	
			$md = $db->exec('UPDATE reservation SET ID_véhicule=\'11\' WHERE id_reservation=(SELECT max(id_reservation) FROM reservation)');
			$rep=$db->query('SELECT * FROM vehicules');
			   while($ent=$rep->fetch()){
                    if($ent['marque']=='PEUGEOT 5008'){
						
		$marque=$ent['marque'];
		                $prix=$ent['prix_location'];
		                $photo=$ent['photo'];
			            $cat=$ent['catégorie'];
						$etat=$ent['etat'];}}
		break;
	case "RANGE ROVER VELAR": 
	        $nb_modifs=$db->exec('UPDATE vehicules SET etat=\'non\' WHERE marque="RANGE ROVER VELAR"');
			$md = $db->exec('UPDATE reservation SET ID_véhicule=\'12\' WHERE id_reservation=(SELECT max(id_reservation) FROM reservation)');
			$rep=$db->query('SELECT * FROM vehicules');
			   while($ent=$rep->fetch()){
                    if($ent['marque']=='RANGE ROVER VELAR'){
						
		$marque=$ent['marque'];
		                $prix=$ent['prix_location'];
		                $photo=$ent['photo'];
			            $cat=$ent['catégorie'];
						$etat=$ent['etat'];}}
		break;}
	}
		

$requete = $db->prepare('SELECT * FROM espace_client WHERE Email=:n');
  $requete->execute(array('n' =>$user_check));
	
	while($ent=$requete->fetch()){
	$id=$ent['id'];
	
    $requete = $db->prepare('UPDATE reservation SET ID_client=:n WHERE id_reservation=(SELECT max(id_reservation) FROM reservation)');
    $requete->execute(array('n' =>$id));
 
	}	
	
	?>

