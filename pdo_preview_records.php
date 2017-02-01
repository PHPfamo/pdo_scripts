<?php 

try {
	
	require('pdo_connection_string.php');

	$stmt=$pdo->query("SELECT * FROM tabela");

	while ($row=$stmt->fetch()) {
		echo $row['id']." --- ".$row['name']." --- ".$row['lname']." --- ".$row['city']."<br>";
	}


} catch (Exception $e) {
	echo "Error retreiving data from database".$e->getMessage();
	
}






 ?>