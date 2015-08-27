<?php
//exit("sgsgv");
require_once '../db_conn.php';
$psicologo=get_psicologo($_GET['id_psicologo']);
$receiverMail	= "info@therapion.com,".$psicologo['email'];
//exit($receiverMail);

$name		= ltrim(rtrim(strip_tags(stripslashes($_POST['name']))));
$email		= ltrim(rtrim(strip_tags(stripslashes($_POST['email']))));
$location	= ltrim(rtrim(strip_tags(stripslashes($_POST['location']))));
$question		= ltrim(rtrim(strip_tags($_POST['question'])));

$ip		= getenv("REMOTE_ADDR");
$msgformat	= "From: $name ($ip)\nEmail: $email\nLocation: $location\n\nQuestion:\n$question";
$thankspage="./paiements.php";

// VALIDATION
if(empty($name) || empty($email) || empty($location) ||  empty($question)) {
	echo "<h3>Les données manquantes</h3><p>S'il vous plaît retourner à la page précédente.</p>";
}
elseif(!ereg("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) {
	echo "<h3>Problème avec le email.</h3><p>S'il vous plaît retourner à la page précédente.</p>";
}
else {
        mail($receiverMail,$psicologo['nombres_apellidos'].": FR: COURRIER ELECTRONIQUE: $location",  $msgformat, "From: $name <$email>");
		//return thank you page
Header("Location: $thankspage");
}
;
?>