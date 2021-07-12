<?php
session_start();
header("Location:index.php");
     try
     {
          $db = new PDO('mysql:host=localhost;dbname=Voiture;charset=utf8','root','');
     }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
   if(isset($_POST['date1']) && isset($_POST['date2']) && isset($_POST['heure1'])&& isset($_POST['heure2']) && isset($_POST['bouton']))
  {
    $requete = $db->prepare('INSERT INTO reservation (Date_de_prise,heure_de_prise,Date_de_restitution,heure_de_restitution)
     VALUES(:date11,:heure11,:date22,:heure22)');
    $requete->execute(array(
    'date11' => $_POST['date1'],
    'heure11' => $_POST['heure1'],
    'date22' => $_POST['date2'],
    'heure22' => $_POST['heure2']));
  }
?>

      