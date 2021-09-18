<?php
global $db;
try {
	$db = new PDO(
		'mysql:host=localhost;dbname=Jusroyal;charset=utf8',
		'root',
		'',
		array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
	);
} catch (Exception $ex) {
	die('Erreur de connexion : ' . $ex->getMessage());
}
?>