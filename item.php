<?php
	require 'databaseKeys.php';

	try{
		$dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

	    $sth = $dbh->prepare("SELECT * FROM items WHERE id=':id'");
	    $sth->bindValue(':id', $_GET['itemID']);
	    $sth->execute();
	    $item = $sth->fetchAll();
	}
	catch(PDOException $e){
		echo "Error";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Item</title>
</head>
<body>

</body>
</html>