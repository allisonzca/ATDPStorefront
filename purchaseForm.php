<!DOCTYPE html>
<?php require_once 'itemPrinter.php' ?>

<html>
<head>
	<title>Enter ur info</title>
</head>
<body>
<?php 
echo printHead();
?>

<form method="post" action="success.php"> 
	<!--Address Stuff-->
	<h3>Address: </h3>
		<input type="number" name="address" class="sBoxes" placeholder="Address" required>
		<input type="text" name="street" class="sBoxes" placeholder="Street" required>
		<input type="text" name="city" class="sBoxes" placeholder="City" required>
		<select name="state" class="sBoxes" required>
			<option label=" "></option>
		<?php
			$state = array("AL", "AK", "AS", "AZ", "AR", "CA", "CO", "CT", "DE", "DC", "FL", "GA", "GU", "HI", "ID", "IL", "IN", "IA", "KS", "KY", "LA", "ME", "MD", "MH", "MA", "MI", "FM", "MN", "MS", "MO", "MT", "NE", "NV", "NH", "NJ", "NM", "NY", "NC", "ND", "MP", "OH", "OK", "OR", "PW", "PA", "PR", "RI", "SC", "SD", "TN", "TX", "UT", "VT", "VA", "VI", "WA", "WV", "WI", "WY");
			for ($sint = 0; $sint < count($state); $sint++){
			echo"<option value=\"$state[$sint]\">$state[$sint]</option>";}
		?>
		</select>
		<input type="number" name="zip" class="sBoxes" placeholder="Zip Code" required>
	</div>
	<!--Credit Card-->
	<h3>Credit Card: <h3>
		<input type="number" name="credit" placeholder ="Credit Card Number" maxlength="16" required>
	<!--Confirm Purchase-->
		<input type="submit" name="button" value="Confirm Purchase" id="submit">
</form>

<?php 
echo printFoot();
?>
</body>
</html>
