<?php
require_once '../db_conn.php';
$psicologo=get_psicologo($_GET['id_psicologo']);
$receiverMail	= "info@therapion.com,".$psicologo['email'];

$name		= ltrim(rtrim(strip_tags(stripslashes($_POST['name']))));
$email		= ltrim(rtrim(strip_tags(stripslashes($_POST['email']))));
$location	= ltrim(rtrim(strip_tags(stripslashes($_POST['location']))));
$program		= ltrim(rtrim(strip_tags(stripslashes($_POST['program']))));
$username		= ltrim(rtrim(strip_tags(stripslashes($_POST['username']))));
$question		= ltrim(rtrim(strip_tags($_POST['question'])));
$ip		= getenv("REMOTE_ADDR");

$msgformat	= "From: $name ($ip)\nEmail: $email\nLocation: $location\nProgram: $program\nUsername: $username\n\nQuestion:\n$question";
$thankspage="./paiements.php";

// VALIDATION
if(empty($name) || empty($email) ||  empty($location) ||  empty($program) ||  empty($username) ||  empty($question)) {echo "<h3>Les donn�es manquantes</h3><p>S'il vous pla�t retourner � la page pr�c�dente.</p>";
}
elseif(!ereg("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) {
	echo "<h3>Probl�me avec le email</h3><p>S'il vous pla�t retourner � la page pr�c�dente.</p>";
}
else {
	mail($receiverMail,$psicologo['nombres_apellidos'].": FR: VIDEOCONFERENCE: $location",  $msgformat, "From: $name <$email>");
	//return thank you page
Header("Location: $thankspage");
}
;
?>