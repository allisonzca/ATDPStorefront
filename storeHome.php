<?php
require_once 'itemPrinter.php';
require_once 'databaseKeys.php';
date_default_timezone_set('America/Los_Angeles');

try{
	$dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

	if (!isset($_GET['category'])) {
		$sth = $dbh->prepare("SELECT * FROM items");
	    $sth->execute();
	    $items = $sth->fetchAll();
	}
	else{
		$sth = $dbh->prepare("SELECT * FROM items WHERE type=:type");
	    $sth->bindValue(':type', $_GET['category']);
	    $sth->execute();
	    $items = $sth->fetchAll();
	}

}
catch(PDOException $e){
	echo "Error";
}
?>

<!DOCTYPE html>
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
<main>

<?php 
echo printHead();

echo "<table>";
	$id = 1;
	for($row = 0; $row < count($items)/3; $row++){
		echo "<tr>";
		for($col = 0; $col < 3; $col++){
			echo "<a href=\"item.php?itemID={$id}\">
				<td>newItem($items[$id]['image'], $items[$id]['name'], $items[$id]['price'])</td>
				</a>";
			$id++;
		}
		echo "</tr>";
	}
echo "</table>";
?>


</main>
<?php 
echo printFoot();
?>

</body>
</html>


<!-- <?php
session_start();
require 'databaseKeys.php';
try {
	$dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
	$th = $dbh->prepare("SELECT id, email FROM customers WHERE email = :email");
    $th->bindValue(':email', $_POST['user_email']);
    $th->execute();
    $login = $th->fetch(); 
    if (isset($_POST["user_email"])) {
    	if ($_POST["user_email"] == $login['email']) {
    		echo "correct";
    		$_SESSION['userID'] = $login['id'];
    	}
    	else {
    		var_dump($login);
    		header('Location: login.php');
			exit;
    	}
    }
    else {
    	if ($_SESSION['userID'] == $login['id']) {
    		echo "correct!";
    	}
    	else {
    		header('Location: login.php');
			exit;
    	}
    }
    if (isset($_SESSION['userID']) == false) {
	if (isset($_POST['id']) == false ) {
		header('Location: login.php');
		exit;
		} 
	else {
		$id = $_POST['id'];
		$_SESSION['userID'] = $id;
		}
	}
else {
		$id = $_SESSION['userID'];
	}
}
catch (PDOException $e) {
	echo $e->getMessage();
}
?>
<?php
require_once 'itemPrinter.php';
require_once 'databaseKeys.php';

try{
	$dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

	if (!isset($_GET['category'])) {
		$sth = $dbh->prepare("SELECT * FROM items");
	    $sth->execute();
	    $items = $sth->fetchAll();
	}
	else{
		$sth = $dbh->prepare("SELECT * FROM items WHERE type=:type");
	    $sth->bindValue(':type', $_GET['category']);
	    $sth->execute();
	    $items = $sth->fetchAll();
	}

}
catch(PDOException $e){
	echo "Error";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
<main>
<a href="logout.php">click 2 sign out</a>
<?php 
echo printHead();

echo "<table>";
	$index = 0;
	for($row = 0; $row < count($items)/3; $row++){
		echo "<tr>";
		for($col = 0; $col < 3; $col++){
			echo "<td>";
				echo "<a href=\"item.php?itemID={$items[$index]['id']}\">";
					echo "<img src=\"{$items[$index]['image']}\" alt=\"Item image\" class=\"item-img\">";
					echo "<p class=\"item-name\">{$items[$index]['name']}</p>";
					echo "<p class=\"item-price\">{$items[$index]['price']}</p>";
				echo "</a>";
			echo "</td>";
			$index++;
		}
		echo "</tr>";
	}
echo "</table>";
/*
if(isset($_GET['user_email'])){
	try {
    $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

    $sth = $dbh->prepare("SELECT * FROM customers WHERE email= :email");
    $sth->bindValue(':email', $_GET['user_email']);
    $sth->execute();
    $user = $sth->fetch();
	}
	catch (PDOException $e) {
	    echo "Error";
	}

	$_SESSION['user'] = $user;
	$_SESSION['userID'] = $user['id'];
}
if (!$user){
	header("Location: login.php?emailerror=1"); //redirect in order to sign in and assign a session
    exit;
}

if (!isset($_SESSION['user'])){
	header("Location: login.php?redirect=1"); //redirect in order to sign in and assign a session
    exit;
}
?>

*/

/*<?php
require_once 'itemPrinter.php';
require_once 'databaseKeys.php';

try{
	$dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

	if (!isset($_GET['category'])) {
		$sth = $dbh->prepare("SELECT * FROM items");
	    $sth->execute();
	    $items = $sth->fetchAll();
	}
	else{
		$sth = $dbh->prepare("SELECT * FROM items WHERE type=:type");
	    $sth->bindValue(':type', $_GET['category']);
	    $sth->execute();
	    $items = $sth->fetchAll();
	}

}
catch(PDOException $e){
	echo "Error";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
<main>

<?php 
echo printHead();

echo "<table>";
	$index = 0;
	for($row = 0; $row < count($items)/3; $row++){
		echo "<tr>";
		for($col = 0; $col < 3; $col++){
			echo "<td>";
				echo "<a href=\"item.php?itemID={$items[$index]['id']}\">";
					echo "<img src=\"{$items[$index]['image']}\" alt=\"Item image\" class=\"item-img\">";
					echo "<p class=\"item-name\">{$items[$index]['name']}</p>";
					echo "<p class=\"item-price\">{$items[$index]['price']}</p>";
				echo "</a>";
			echo "</td>";
			$index++;
		}
		echo "</tr>";
	}
echo "</table>";
?>


</main>
<?php 
echo printFoot();
?>

</body>

</html>*/
?>


</main>
<?php 
echo printFoot();
?>

</body>
</html>
 -->
