<?php
$receiverMail	= "info@therapion.com";

$name		= ltrim(rtrim(strip_tags(stripslashes($_POST['name']))));
$email		= ltrim(rtrim(strip_tags(stripslashes($_POST['email']))));
$location	= ltrim(rtrim(strip_tags(stripslashes($_POST['location']))));
$question		= ltrim(rtrim(strip_tags($_POST['question'])));

$ip		= getenv("REMOTE_ADDR");
$msgformat	= "From: $name ($ip)\nEmail: $email\nLocation: $location\n\nQuestion:\n$question"; $thankspage = "./itservizioclientigrazie.php";

// VALIDATION
if(empty($name) || empty($email) ||  empty($question)) {
	echo "<h3>Assicurarsi che tutti i campi siano compilati.</h3><p>Ritornare al formulario.</p>";
}
elseif(!ereg("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) {
	echo "<h3>Problema con indirizzo e-mail.</h3><p>Ritornare al formulario.</p>";
}
else {
	mail($receiverMail,"IT: SERVIZIO CLIENTI: $location",  $msgformat, "From: $name <$email>");
	//return thank you page
Header("Location: $thankspage");
}
;
?>
