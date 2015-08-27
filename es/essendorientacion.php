<?php
$receiverMail	= "info@therapion.com";
$name		= ltrim(rtrim(strip_tags(stripslashes($_POST['name']))));
$email		= ltrim(rtrim(strip_tags(stripslashes($_POST['email']))));
$location	= ltrim(rtrim(strip_tags(stripslashes($_POST['location']))));
$question		= ltrim(rtrim(strip_tags($_POST['question'])));

$ip		= getenv("REMOTE_ADDR");
$msgformat	= "From: $name ($ip)\nEmail: $email\nLocation: $location\n\nQuestion:\n$question"; 
$thankspage="./esconfirmacionorientacion.php";

// VALIDATION
if(empty($name) || empty($email) ||  empty($question)) {
	echo "<h3>Falta de datos</h3><p>Por favor, regresa a la página anterior para llenar todos los datos, gracias.</p>";
}
elseif(!ereg("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) {
	echo "<h3>Error en el correo electrónico</h3><p>Por favor, regresa a la página anterior para verificar su correo electrónico, gracias.</p>";
}
else {
	mail($receiverMail,"ES: ORIENTACION: $location",  $msgformat, "From: $name <$email>");
	//return thank you page
Header("Location: $thankspage");
}
;
?>
