<?php 

try {
	require('pdo_connection_string.php');

$stmt=$pdo->prepare("UPDATE tabela SET name=? WHERE id=?");

$name='muris';
$id=5;


$stmt->bindValue(1,$name, PDO::PARAM_STR);
$stmt->bindValue(2,$id, PDO::PARAM_INT);


$stmt->execute();

echo "Succesfully updated number of records: ".$stmt->rowCount();





} catch (Exception $e) {
	echo "Error inserting new data!".$e->getMessage();
	
}







 ?>