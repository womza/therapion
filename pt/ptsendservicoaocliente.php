<?php
$receiverMail	= "info@therapion.com";

$name		= ltrim(rtrim(strip_tags(stripslashes($_POST['name']))));
$email		= ltrim(rtrim(strip_tags(stripslashes($_POST['email']))));
$location	= ltrim(rtrim(strip_tags(stripslashes($_POST['location']))));
$question		= ltrim(rtrim(strip_tags($_POST['question'])));

$ip		= getenv("REMOTE_ADDR");
$msgformat	= "From: $name ($ip)\nEmail: $email\nLocation: $location\n\nQuestion:\n$question"; $thankspage="./ptconfirmacaoservicoaocliente.php";

// VALIDATION
if(empty($name) || empty($email) ||  empty($question)) {
	echo "<h3>A falta de dados</h3><p>Por favor, retorne à página anterior para preencher todas as informações, obrigado.</p>";
}
elseif(!ereg("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) {
	echo "<h3>Erro no e-mail.</h3><p>Por favor, retorne à página anterior para verificar seu e-mail, obrigado.</p>";
}
else {
	mail($receiverMail,"PT: SERVIÇO AO CLIENTE: $location",  $msgformat, "From: $name <$email>");
	//return thank you page
Header("Location: $thankspage");
}
;
?>
