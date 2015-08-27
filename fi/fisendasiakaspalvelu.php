<?php
$receiverMail	= "info@therapion.com";

$name		= ltrim(rtrim(strip_tags(stripslashes($_POST['name']))));
$email		= ltrim(rtrim(strip_tags(stripslashes($_POST['email']))));
$question		= ltrim(rtrim(strip_tags($_POST['question'])));

$ip		= getenv("REMOTE_ADDR");
$msgformat	= "From: $name ($ip)\nEmail: $email\n\nQuestion:\n$question";
$thankspage="./fivahvistusasiakaspalvelu.php";

// VALIDATION
if(empty($name) || empty($email) ||  empty($question)) {
	echo "<h3>Puuttuvia tietoja</h3><p>Ole hyvä ja palaa lomakkeeseen.</p>";
}
elseif(!ereg("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) {
	echo "<h3>Virheellinen sähköposti</h3><p>Ole hyvä ja palaa lomakkeeseen.</p>";
}
else {
	mail($receiverMail,"FI: ASIAKASPALVELU",  $msgformat, "From: $name <$email>");
	//return thank you page
Header("Location: $thankspage");
}
;
?>