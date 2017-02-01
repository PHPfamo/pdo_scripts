<?php 

$username='root';
$password='';
$dsn='mysql:host=localhost;dbname=muris;charset=utf8';

try {

	$pdo= new PDO($dsn, $username, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	

} catch (Exception $e) {
	echo "Connection failed".$e->getMessage();
	
}




 ?>