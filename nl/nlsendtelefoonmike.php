<?php
$receiverMail	= "mike@therapion.com,info@therapion.com";

$name		= ltrim(rtrim(strip_tags(stripslashes($_POST['name']))));
$email		= ltrim(rtrim(strip_tags(stripslashes($_POST['email']))));
$location	= ltrim(rtrim(strip_tags(stripslashes($_POST['location']))));
$phone          = ltrim(rtrim(strip_tags(stripslashes($_POST['phone']))));
$question	= ltrim(rtrim(strip_tags($_POST['question'])));
$ip		= getenv("REMOTE_ADDR");

$msgformat	= "From: $name ($ip)\nEmail: $email\nLocation: $location\nPhone: $phone\n\nQuestion:\n$question";
$thankspage="./betalingen.php";

// VALIDATION
if(empty($name) || empty($email) ||  empty($location) ||  empty($phone) ||  empty($question)) {
echo "<h3>Missing information</h3><p>Return to the form please.</p>";
}
elseif(!ereg("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) {
	echo "<h3>Problem with the email.</h3><p>Return to the form please.</p>";
}
else {
	mail($receiverMail,"NL: MIKE: TELEFOON: $location",  $msgformat, "From: $name <$email>");
	//return thank you page
Header("Location: $thankspage");
}
;
?>