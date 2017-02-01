<?php 

try {
	require('pdo_connection_string.php');

$stmt=$pdo->prepare("DELETE FROM tabela WHERE name=?");

$name='muris';


$stmt->bindValue(1,$name, PDO::PARAM_STR);

$stmt->execute();

echo "Succesfully deleted number of records: ".$stmt->rowCount();





} catch (Exception $e) {
	echo "Error inserting new data!".$e->getMessage();
	
}







 ?>