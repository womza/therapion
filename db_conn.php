<?php
function get_credentials()
{
	$configs=array('site_root'=>'https://www.therapion.local',
				 'db_settings'=>array('host'=>'localhost',
					   				  'db_name'=>'therapio_therapion',
					   				  'username'=>'root',
					   				  'password'=>''));
	return $configs;
}
function get_psicologos($columna, $id_equipo,$charset='utf-8')
{
	$configs=get_credentials();
	$db_settings=$configs['db_settings'];

	$conn = new mysqli($db_settings['host'], $db_settings['username'], $db_settings['password'], $db_settings['db_name']);
	$conn->set_charset($charset);
	$sql = "SELECT psicologo.id as id_psicologo, nombres_apellidos,foto,psicologo.titulo,psicologo.educacion,psicologo.informacion_adicional,temas_consulta,therapy_programs, about FROM psicologo, equipo, idioma WHERE equipo.id = psicologo.id_equipo AND idioma.id = equipo.id_idioma AND equipo.id={$id_equipo} AND psicologo.columna='{$columna}'";
	//echo $sql;
	$result = $conn->query($sql);
	//echo print_r($result);
	return $result;
}
function get_psicologo($id_psicologo,$charset='utf-8')
{
	$configs=get_credentials();
	$db_settings=$configs['db_settings'];

	$conn = new mysqli($db_settings['host'], $db_settings['username'], $db_settings['password'], $db_settings['db_name']);
	$conn->set_charset($charset);
	$sql = "SELECT psicologo.id as id_psicologo, nombres_apellidos,foto,psicologo.titulo,temas_consulta,therapy_programs, about, email FROM psicologo WHERE psicologo.id={$id_psicologo}";
	$result = $conn->query($sql);
	return $result->fetch_assoc();
}
function get_psicologo_metodos($id_psicologo)
{
	$configs=get_credentials();
	$db_settings=$configs['db_settings'];

	$conn = new mysqli($db_settings['host'], $db_settings['username'], $db_settings['password'], $db_settings['db_name']);
	mysqli_set_charset($conn,'utf-8');
	$sql = "SELECT metodo_consulta.titulo FROM psicologo, metodo_consulta, psicologo_metodo_consulta WHERE psicologo.id={$id_psicologo} AND psicologo.id=psicologo_metodo_consulta.id_psicologo AND metodo_consulta.id=psicologo_metodo_consulta.id_metodo_consulta ORDER BY metodo_consulta.orden";
	$result = $conn->query($sql);
	return $result;
}
function get_equipo($id_equipo)
{
	$configs=get_credentials();
	$db_settings=$configs['db_settings'];

	$conn = new mysqli($db_settings['host'], $db_settings['username'], $db_settings['password'], $db_settings['db_name']);
	mysqli_set_charset($conn,'utf-8');
	$sql = "SELECT equipo.customer_service FROM equipo WHERE equipo.id={$id_equipo}";
	$result = $conn->query($sql);
	return $result->fetch_assoc();
}


include $_SERVER['DOCUMENT_ROOT'] . '/function.php';
/* Define BASE_URL */
define('BASE_URL', get_credentials()['site_root']);