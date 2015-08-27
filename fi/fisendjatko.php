<?php
$receiverMail	= "info@therapion.com";

$toimija	= ltrim(rtrim(strip_tags(stripslashes($_POST['toimija']))));
$asiakas	= ltrim(rtrim(strip_tags(stripslashes($_POST['asiakas']))));
$konsunlaji	= ltrim(rtrim(strip_tags(stripslashes($_POST['konsunlaji']))));
$ajankohta	= ltrim(rtrim(strip_tags(stripslashes($_POST['ajankohta']))));
$lisatiedot	= ltrim(rtrim(strip_tags($_POST['lisatiedot'])));
$ip		= getenv("REMOTE_ADDR");

$msgformat	= "From: $toimija ($ip)\nToimija: $toimija\nAsiakas: $asiakas\nKonsunlaji: $konsunlaji\nAjankohta: $ajankohta\n\nLisatiedot:\n$lisatiedot";
$thankspage="./fivahvistusjatko.php";


// VALIDATION
if(empty($toimija) || empty($asiakas) ||  empty($konsunlaji) ||  empty($ajankohta) ) {
	echo "<h3>Lomake puutteellinen</h3><p>Ole hyvä ja palaa takaisin lomakkeeseen antamaan puuttuvat tiedot, kiitos.</p>";
}
else {
	mail($receiverMail,"JATKO: $toimija $asiakas $konsunlaji $ajankohta",  $msgformat, "From: $toimija <>");
	//return thank you page
Header("Location: $thankspage");
}
;
?>




