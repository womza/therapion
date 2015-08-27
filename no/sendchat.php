<?php
//exit("sgsgv");
require_once '../db_conn.php';
$psicologo=get_psicologo($_GET['id_psicologo']);
$receiverMail	= "info@therapion.com,".$psicologo['email'];
//exit($receiverMail);

$name		= ltrim(rtrim(strip_tags(stripslashes($_POST['name']))));
$email		= ltrim(rtrim(strip_tags(stripslashes($_POST['email']))));
$location	= ltrim(rtrim(strip_tags(stripslashes($_POST['location']))));

$question	= ltrim(rtrim(strip_tags($_POST['question'])));
$program  	= ltrim(rtrim(strip_tags(stripslashes($_POST['program']))));
$username	= ltrim(rtrim(strip_tags(stripslashes($_POST['username']))));
$ip		= getenv("REMOTE_ADDR");

$msgformat	= "From: $name ($ip)\nEmail: $email\nLocation: $location\nProgram: $program\nUsername: $username\n\nQuestion:\n$question";
$thankspage="./betalinger.php";


// VALIDATION
if(empty($name) || empty($email) || empty($location) ||  empty($program) ||  empty($username) ||  empty($question)) {
	echo "<h3>Manglende informasjon.</h3><p>Vennligst gå tilbake.</p>";
}
elseif(!ereg("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) {
	echo "<h3>Problem med e-post.</h3><p>Vennligst gå tilbake.</p>";
}
else {
	mail($receiverMail,$psicologo['nombres_apellidos'].": NO: CHAT: $location",  $msgformat, "From: $name <$email>");
	//return thank you page
Header("Location: $thankspage");
}
;
?>