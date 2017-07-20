/* 
tables we need: (everything has its own id btw)
itemList | a list of all the items with (name, imgurl, price, desc)
cart | all the items in the cart (add itemList stuff into here)
wishList | idk if ya wanna do this but if you do you neeeeed
	users | list of all the users with passwords n emails and info and all that good stuff, and a 
			wish list
purchase | idk mayb if youd like to track all the purchases made,, put total price here, put an array of items purchased,, user id?

*/

CREATE TABLE IF NOT EXISTS `items` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `name` varchar NOT NULL,
  `image` varchar NOT NULL,
  `price` decimal(4,2) NOT NULL,
  `desc` varchar NOT NULL,
  `type` varchar NOT NULL,
  PRIMARY KEY (`ID`)
);

INSERT INTO `items` 
	(`name`, `image`, `price`, `desc`, `type`)
VALUES
	('anxieTee', 'images/handsTee.png', '10.99', 'starter pack', 'help'),
	('Catch these hands Tee', 'images/handsTee.png', '9.99', 'sum handz', 'help'),
	('Flee Tee', 'images/handsTee.png', '9.99', 'flee on ur tee', 'help'),
	('Pupper Tee', 'images/handsTee.png', '2.99', 'precious floof on ur abdomen', 'wholesome'),
	('Eggo Tee', 'images/handsTee.png', '2.99', 'now u never hav 2 leggo ur eggo', 'wholesome'),
	('Birb Tee', 'images/handsTee.png', '10.99', 'singz sweeter than u', 'wholesome'),
	('Acorn tee', 'images/handsTee.png', '9.99', 'nut', 'collegeboard')
	('Good score Tee', 'images/handsTee.png', '19.99', 'is only a 5', 'collegeboard');
	('Josefin Slab Tee', 'images/handsTee.png', '24.99', 'collegeboard\'s fave font', 'collegeboard'); 



CREATE TABLE IF NOT EXISTS `customers` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `name` varchar NOT NULL,
  `address` varchar NOT NULL,
  `phone` int NOT NULL,
  `email` varchar NOT NULL,
  PRIMARY KEY (`ID`)
);

CREATE TABLE IF NOT EXISTS `purchases` (
	`ID` int NOT NULL AUTO_INCREMENT, 
	`customer_id` varchar,
	`item_id` int,
	`price_id` decimal(100,2),
	PRIMARY KEY (`ID`)
);

CREATE TABLE IF NOT EXISTS `cart` (
	`ID` int NOT NULL AUTO_INCREMENT, 
	`customer_id` varchar,
	`item_id` int,
	PRIMARY KEY (`ID`)
);


