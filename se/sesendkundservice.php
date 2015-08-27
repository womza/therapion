<?php
$receiverMail	= "info@therapion.com";

$name		= ltrim(rtrim(strip_tags(stripslashes($_POST['name']))));
$email		= ltrim(rtrim(strip_tags(stripslashes($_POST['email']))));
$location	= ltrim(rtrim(strip_tags(stripslashes($_POST['location']))));
$question		= ltrim(rtrim(strip_tags($_POST['question'])));

$ip		= getenv("REMOTE_ADDR");
$msgformat	= "From: $name ($ip)\nEmail: $email\nLocation: $location\n\nQuestion:\n$question";
$thankspage="./sebekraftelsekundservice.php";

// VALIDATION
if(empty($name) || empty($email) || empty($location) ||  empty($question)) {
	echo "<h3>Saknande uppgifter</h3><p>Var vänlig och gå tillbaka för att fylla i formulären</p>";
}
elseif(!ereg("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) {
	echo "<h3>Fel i din e-postadress</h3><p>Var vänlig och gå tillbaka för att checka den</p>";
}
else {
	mail($receiverMail,"SE: KUNDSERVICE: $location",  $msgformat, "From: $name <$email>");
	//return thank you page
Header("Location: $thankspage");
}
;
?>