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

function get_url_by_psicologo_name($name) {
    return str_replace(array(' ', '.'), array('-', ''), $name);
}