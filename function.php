<?php

function get_psicologo_id_by_name($name,$charset='utf-8') {
    $configs=get_credentials();
	$db_settings=$configs['db_settings'];

    // remove - from $name
    $psicologo = explode('-', $name);
    $name = $psicologo[0] . ' ' . $psicologo[1];

	$conn = new mysqli($db_settings['host'], $db_settings['username'], $db_settings['password'], $db_settings['db_name']);
	$conn->set_charset($charset);
	$sql = "SELECT id as id_psicologo FROM psicologo WHERE nombres_apellidos LIKE '%{$name}%'";
	$result = $conn->query($sql);
    $assoc = $result->fetch_assoc();
	return (int)$assoc['id_psicologo'];
}

function str_clean($String) {
    $String = str_replace(array('á','à','â','ã','ª','ä','å'),"a",$String);
    $String = str_replace(array('Á','À','Â','Ã','Ä'),"A",$String);
    $String = str_replace(array('Í','Ì','Î','Ï'),"I",$String);
    $String = str_replace(array('í','ì','î','ï'),"i",$String);
    $String = str_replace(array('é','è','ê','ë'),"e",$String);
    $String = str_replace(array('É','È','Ê','Ë'),"E",$String);
    $String = str_replace(array('ó','ò','ô','õ','ö','º','ø'),"o",$String);
    $String = str_replace(array('Ó','Ò','Ô','Õ','Ö'),"O",$String);
    $String = str_replace(array('ú','ù','û','ü'),"u",$String);
    $String = str_replace(array('Ú','Ù','Û','Ü'),"U",$String);
    $String = str_replace(array('[','^','´','`','¨','~',']','.'),"",$String);
    $String = str_replace("ç","c",$String);
    $String = str_replace("Ç","C",$String);
    $String = str_replace("ñ","n",$String);
    $String = str_replace("Ñ","N",$String);
    $String = str_replace("Ý","Y",$String);
    $String = str_replace("ý","y",$String);
     
    $String = str_replace("&aacute;","a",$String);
    $String = str_replace("&Aacute;","A",$String);
    $String = str_replace("&eacute;","e",$String);
    $String = str_replace("&Eacute;","E",$String);
    $String = str_replace("&iacute;","i",$String);
    $String = str_replace("&Iacute;","I",$String);
    $String = str_replace("&oacute;","o",$String);
    $String = str_replace("&Oacute;","O",$String);
    $String = str_replace("&uacute;","u",$String);
    $String = str_replace("&Uacute;","U",$String);
    
    return $String;
}

function get_url_by_psicologo_name($name) {
    $url = '';
    $to_lower = utf8_encode(trim(strtolower($name)));
    $each = explode(' ', $to_lower);
    foreach ($each as $value)
        $url .= str_clean($value) . ' ';
    $url = trim($url);
    
    return str_replace(' ', '-', $url);
}

function get_psicologo_name_url($psicologo) {
    return get_url_by_psicologo_name($psicologo['nombres_apellidos']);
}

// if $_GET['id_psicologo'] isn't defined get the name $_GET['p']
if (!isset($_GET['id_psicologo']) && isset($_GET['p']))
    $_GET['id_psicologo'] = get_psicologo_id_by_name($_GET['p']);