<?php
require_once '../db_conn.php';
$psicologo=get_psicologo($_GET['id_psicologo']);
$receiverMail	= "info@therapion.com,".$psicologo['email'];

$name		= ltrim(rtrim(strip_tags(stripslashes($_POST['name']))));
$email		= ltrim(rtrim(strip_tags(stripslashes($_POST['email'])))); 
$phone          = ltrim(rtrim(strip_tags(stripslashes($_POST['phone']))));
$question	= ltrim(rtrim(strip_tags($_POST['question'])));
$ip		= getenv("REMOTE_ADDR");

$msgformat	= "From: $name ($ip)\nEmail: $email\nPhone: $phone\n\nQuestion:\n$question";
$thankspage="./maksut.php";

// VALIDATION
if(empty($name) || empty($email) || empty($phone) ||  empty($question)) {
	echo "<h3>Puuttuvia tietoja</h3><p>Ole hyvä ja palaa lomakkeeseen.</p>";
}
elseif(!ereg("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) {
	echo "<h3>Virheellinen sähköposti</h3><p>Ole hyvä ja palaa lomakkeeseen.</p>";
}
else {
	mail($receiverMail,$psicologo['nombres_apellidos'].": FI: PUHELU",  $msgformat, "From: $name <$email>");
	//return thank you page
Header("Location: $thankspage");
}
;
?>