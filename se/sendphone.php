<?php
require_once '../db_conn.php';
$psicologo=get_psicologo($_GET['id_psicologo']);
$receiverMail	= "info@therapion.com,".$psicologo['email'];

$name		= ltrim(rtrim(strip_tags(stripslashes($_POST['name']))));
$email		= ltrim(rtrim(strip_tags(stripslashes($_POST['email']))));
$location	= ltrim(rtrim(strip_tags(stripslashes($_POST['location']))));
$question	= ltrim(rtrim(strip_tags($_POST['question'])));
$phone  	= ltrim(rtrim(strip_tags(stripslashes($_POST['phone']))));
$ip		= getenv("REMOTE_ADDR");

$msgformat	= "From: $name ($ip)\nEmail: $email\nLocation: $location\nPhone: $phone\n\nQuestion:\n$question";
$thankspage="./betalningar.php";


// VALIDATION
if(empty($name) || empty($email) ||  empty($location) || empty($phone) ||  empty($question)) {
	echo "<h3>Saknande dator</h3><p>Var v�nligt och g� tillbaka f�r att fylla i formul�ren.</p>";
}
elseif(!ereg("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) {
	echo "<h3>Fel i din e-postadress</h3><p>Var v�nligt och g� tillbaka f�r att korrigera din e-postadress.</p>";
}
else {
	mail($receiverMail,$psicologo['nombres_apellidos'].": SE: TELEFON: $location",  $msgformat, "From: $name <$email>");
	//return thank you page
Header("Location: $thankspage");
}
;
?>