<?php
$receiverMail	= "info@therapion.com";

$name		= ltrim(rtrim(strip_tags(stripslashes($_POST['name']))));
$email		= ltrim(rtrim(strip_tags(stripslashes($_POST['email']))));
$location	= ltrim(rtrim(strip_tags(stripslashes($_POST['location']))));
$question		= ltrim(rtrim(strip_tags($_POST['question'])));

$ip		= getenv("REMOTE_ADDR");
$msgformat	= "From: $name ($ip)\nEmail: $email\nLocation: $location\n\nQuestion:\n$question";
$thankspage="./nobekreftelsekundeservice.php";

// VALIDATION
if(empty($name) || empty($email) || empty($location) ||  empty($question)) {
	echo "<h3>Manglende informasjon.</h3><p>Vennligst gå tilbake.</p>";
}
elseif(!ereg("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) {
	echo "<h3>Problem med e-post.</h3><p>Vennligst gå tilbake.</p>";
}
else {
	mail($receiverMail,"NO: KUNDESERVICE: $location",  $msgformat, "From: $name <$email>");
	//return thank you page
Header("Location: $thankspage");
}
;
?>