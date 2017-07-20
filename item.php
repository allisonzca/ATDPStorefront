<?php
	require_once 'itemPrinter.php';
	require 'databaseKeys.php';

	try{
		$dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

	    $sth = $dbh->prepare("SELECT * FROM items WHERE id=:id");
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
<?php
	printHead();

	$url = $item['image'];
	$name = $item['name'];
	$price = $item['price'];
	$description = $item['description'];
	$id = $item['id'];
	echo "<h1 class=\"item-page-name\">{$name}</h1>";
	echo "<img href=\"{$image}\" class=\"item-page-image\">";
	echo "<h3>{$price}</h3>";
	echo "<p>{$description}</p>";
?>

	<form action="cart.php" method="post">
		<input type="hidden" name="item" value={$id}>
		<input type="submit" name="Add to cart">
	</form>
</body>
</html>
