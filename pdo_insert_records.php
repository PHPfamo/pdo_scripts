<?php 

try {
	require('pdo_connection_string.php');

$stmt=$pdo->prepare("INSERT INTO tabela (id, name, lname, city) VALUES (null,?,?,?)");

$name='murga';
$lname='murgić';
$city='tuzla';

$stmt->bindValue(1,$name, PDO::PARAM_STR);
$stmt->bindValue(2,$lname, PDO::PARAM_STR);
$stmt->bindValue(3,$city, PDO::PARAM_STR);

$stmt->execute();

echo "Succesfully inserted number of records: ".$stmt->rowCount();





} catch (Exception $e) {
	echo "Error inserting new data!".$e->getMessage();
	
}


 ?>