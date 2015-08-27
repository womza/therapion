<?php
require_once '../db_conn.php';
$psicologo=get_psicologo($_GET['id_psicologo'],'utf8');
$receiverMail	= "info@therapion.com,".$psicologo['email'];

$name		= ltrim(rtrim(strip_tags(stripslashes($_POST['name']))));
$email		= ltrim(rtrim(strip_tags(stripslashes($_POST['email']))));
$location	= ltrim(rtrim(strip_tags(stripslashes($_POST['location']))));
$program		= ltrim(rtrim(strip_tags(stripslashes($_POST['program']))));
$username		= ltrim(rtrim(strip_tags(stripslashes($_POST['username']))));
$question		= ltrim(rtrim(strip_tags($_POST['question'])));
$ip		= getenv("REMOTE_ADDR");

$msgformat	= "From: $name ($ip)\nEmail: $email\nLocation: $location\nProgram: $program\nUsername: $username\n\nQuestion:\n$question";
$thankspage="./oplata.php";

// VALIDATION
if(empty($name) || empty($email) ||  empty($location) ||  empty($program) ||  empty($username) ||  empty($question)) {echo "<h3>Missing data</h3><p>Please return to the form.</p>";
}
elseif(!ereg("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) {
	echo "<h3>Problem with the e-mail address.</h3><p>Please return to the form.</p>";
}
else {
	mail($receiverMail,$psicologo['nombres_apellidos'].": VIDEOCONFERENCE: RU: $location",  $msgformat, "From: $name <$email>");
	//return thank you page
Header("Location: $thankspage");
}
;
?>