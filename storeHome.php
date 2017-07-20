<!DOCTYPE html>
<?php
require_once 'itemPrinter.php';
require 'databaseKeys.php';

try{
	$dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

    $sth = $dbh->prepare("SELECT * FROM items");
    $sth->execute();
    $items = $sth->fetchAll();
}
catch(PDOException $e){
	echo "Error";
}
?>
<html>
<head>
	<title>Home</title>
</head>
<body>
<!-- 
store name: spicy tees for depraved teens 
Homepage: storeHome.php
all them functions: itemPrinter.php
Shopping Cart: storeCart.php
Enter ya info 2 buy stuff: purchaseForm.php
Wishlist(idk do you want one???): wishlist.php
Item Database: itemList.sql
thanks for shopping!! kinda page: success.php
ok im guessing theres gonna b some sort of login were gonna have 2 do where you can keep track of your cart n your purchases but we can do that later
best friend <333: storeStyle.css

-->
<table>
<?php
	$id = 1;
	for($row = 0; $row < count($items)/3; $row++){
		echo "<tr>";
		for($col = 0; $col < 3; col++){
			echo "<a href=\"item.php?itemID={$id}\">
				<td>newItem($items[$id]['image'], $items[$id]['name'], $items[$id]['price'])</td>
				</a>";
			$id++;
		}
		echo "</tr>"
	}
?>
</table>
<main>

<?php 
echo printHead();
// ok im too lazy to use shift to make a php tag so ill just write this here,, use newItem five million times
?>


</main>
<?php 
echo printFoot();
?>

</body>
</html>
