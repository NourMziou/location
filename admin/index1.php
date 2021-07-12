<?php
$name=$_POST['nom'];
$mdp=$_POST['mdp'];
$name=stripcslashes($name);
$mdp=stripcslashes($mdp);
$db = mysqli_connect("localhost","root","","voiture");
$result = mysqli_query($db, "select * from utilisateurs where nom='$name' and mot_de_passe='$mdp'")
                or die("Faild to query database " .mysqli_error());
$row = mysqli_fetch_array($result);
if($row['nom'] == $name && $row['mot_de_passe'] == $mdp){
  header("location: choix.php");
}else {
    header("location: admin1.php");
}
?>