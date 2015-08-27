<?php
$receiverMail	= "info@therapion.com";

$name		= ltrim(rtrim(strip_tags(stripslashes($_POST['name']))));
$email		= ltrim(rtrim(strip_tags(stripslashes($_POST['email']))));
$location	= ltrim(rtrim(strip_tags(stripslashes($_POST['location']))));
$question		= ltrim(rtrim(strip_tags($_POST['question'])));

$ip		= getenv("REMOTE_ADDR");
$msgformat	= "From: $name ($ip)\nEmail: $email\nLocation: $location\n\nQuestion:\n$question"; $thankspage="./frserviceclientsmerci.php";

// VALIDATION
if(empty($name) || empty($email) ||  empty($question)) {
	echo "<h3>Les donn�es manquantes</h3><p>S'il vous pla�t retourner � la page pr�c�dente.</p>";
}
elseif(!ereg("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) {
	echo "<h3>Probl�me avec le email</h3><p>S'il vous pla�t retourner � la page pr�c�dente.</p>";
}
else {
	mail($receiverMail,"FR: SERVICE CLIENT: $location",  $msgformat, "From: $name <$email>");
	//return thank you page
Header("Location: $thankspage");
}
;
?>
