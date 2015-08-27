<?php
require_once '../db_conn.php';
$psicologo=get_psicologo($_GET['id_psicologo']);
$receiverMail	= "info@therapion.com,".$psicologo['email'];

$name		= ltrim(rtrim(strip_tags(stripslashes($_POST['name']))));
$email		= ltrim(rtrim(strip_tags(stripslashes($_POST['email']))));
$location	= ltrim(rtrim(strip_tags(stripslashes($_POST['location']))));
$phone          = ltrim(rtrim(strip_tags(stripslashes($_POST['phone']))));
$question	= ltrim(rtrim(strip_tags($_POST['question'])));
$ip		= getenv("REMOTE_ADDR");

$msgformat	= "From: $name ($ip)\nEmail: $email\nLocation: $location\nPhone: $phone\n\nQuestion:\n$question";
$thankspage="./pagos.php";

// VALIDATION
if(empty($name) || empty($email) ||  empty($location) ||  empty($phone) ||  empty($question)) {echo "<h3>Falta de datos</h3><p>Por favor, regrese en la página anterior para llenar los datos.</p>";
}
elseif(!ereg("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) {
	echo "<h3>Por favor, verificese el correo electrónico.</h3><p>Por favor, regrese en la página anterior para corrigirlo.</p>";
}
else {
	mail($receiverMail,$psicologo['nombres_apellidos'].": ES: TELEFONO: $location",  $msgformat, "From: $name <$email>");
	//return thank you page
Header("Location: $thankspage");
}
;
?>