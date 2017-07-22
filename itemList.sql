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
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `price` decimal(4,2) NOT NULL,
  `desc` text NOT NULL,
  `type` text NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `items` 
	(`name`, `image`, `price`, `desc`, `type`)
VALUES
	('anxieTee', 'designs/anxietee.png', '10.99', 'starter pack', 'help'),
	('Catch these hands Tee', 'designs/handsTee.png', '9.99', 'sum handz', 'help'),
	('Flee Tee', 'designs/fleetee.png', '9.99', 'flee on ur tee', 'help'),
	('Pupper Tee', 'designs/puppertee.png', '2.99', 'precious floof on ur abdomen', 'wholesome'),
	('Eggo Tee', 'designs/eggotee.png', '2.99', 'now u never hav 2 leggo ur eggo', 'wholesome'),
	('Birb Tee', 'designs/birbtee.png', '10.99', 'singz sweeter than u', 'wholesome'),
	('Acorn tee', 'designs/acorntee.png', '9.99', 'nut', 'collegeboard'),
	('Good score Tee', 'designs/scoretee.png', '19.99', 'is only a 5', 'collegeboard'),
	('Josefin Slab Tee', 'designs/fonttee.png', '24.99', 'collegeboard\'s fave font', 'collegeboard');

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `phone` int NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `purchases` (
	`id` int NOT NULL AUTO_INCREMENT, 
	`customer_id` int,
	`item_id` int,
	`price` decimal(10,2),
	PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `cart` (
	`id` int NOT NULL AUTO_INCREMENT, 
	`customer_id` int,
	`item_id` int,
	PRIMARY KEY (`id`)
);



