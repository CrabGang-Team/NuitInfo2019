<?php 

try {
	$db = new PDO("mysql:host=localhost;dbname=mrat;charset=UTF8", "root", "mysql");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo 'Échec lors de la connexion : ' . $e->getMessage();
}
?>