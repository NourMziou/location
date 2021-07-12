<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
if (isset($_POST['seconnecter'])) {
if (empty($_POST['email']) || empty($_POST['mdp'])) {
$error= "Username or Password is invalid";
}
else{
// Define $username and $password
$mail = $_POST['email'];
$password = $_POST['mdp'];
// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "voiture");
// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT Email, Mot_de_passe from ESPACE_CLIENT where Email=? AND Mot_de_passe=? LIMIT 1";
// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $mail, $password);
$stmt->execute();
$stmt->bind_result($mail, $password);
$stmt->store_result();
if($stmt->fetch()) {//fetching the contents of the row 
$_SESSION['login_user'] = $mail; 

// Initializing Session
header("location: véhicules.php"); // Redirecting To Profile Page
}else{$error= "Username or Password is invalid";}
mysqli_close($conn); // Closing Connection
}
}

?>

