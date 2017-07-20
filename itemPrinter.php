<?php
 require_once 'databaseKeys.php'


function printHead() {
	// ok theres sum shirt here thats kinda a header but the position is fixed n i don't if it should b div or span or whatever
	echo "<h1>Spicey Teez for Depraved Teenz</h1>";
	echo "<nav> 
		<a href=\"\">Tees</a>
		<a href=\"\">Accessories</a>
		<a href=\"\">idk</a>
		<a href=\"\">idk</a>
		  </nav>";
}

function printFoot() {
	echo "<footer><a href=\"https://atdpsites.berkeley.edu/validate/\">Validate</a> <br>";
		echo "<a href=\"\">Index</a></footer> <br>";

}

function cartCalc() {
	//use sql im guessing to call all the prices in the cart table
}

function itemFrame($itemIMG_url, $itemDesc) {
/*stick the img url in there, then it puts the url in an img src="" thing and prints the basic html, and puts itemDesc in a p,, also stick printHead and printFoot in here too and link back to storeHome.php,,   
*/
}

function newItem($itemIMG_url, $itemName, $itemPrice, $itemDesc) {
	/* hi ok so this is gonna b complicated af so ill try to explain it hopefully
	0. so insert those arguments, just make the prices an integer who tf cares
	1. adds a new item that has a int price called $itemPrice, an string image url called $itemIMG_url, a string name called $itemName, and a string desc in $itemDesc in itemlist table in itemlist.sql
	2. use select in sql to put $itemIMG_url in an img src="" thing, put $itemPrice and $itemName in a p, also stick <a href=""> around another link to itemIMG_url so when u click the picture it links
	3. ok im pretty sure this has something to do with the comic thing we did so just try to copy that with the id=whateveridthatitemis shit so each item has its own page
	4. ok now ur gonna put a function in this function, aka itemFrame(), n for the arguments ur gonna stick $itemIMG_url in it and itemDesc
	*/

}

function dispInfo () {
	//theres a post form n ya throw up all the info they gave, pretty self explanatory
}

function printCart () {
	//spits out the cart items
}

?>