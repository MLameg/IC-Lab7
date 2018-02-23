<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
	
	
	<?php

		
		//MONTHS January-December
		$months = array("January","February","March","April",
			"May","June","July","August","September","October",
			"November","December");
		echo '<form><select name="month">';
		for ($i = 0; $i <= 11; $i++) {
			echo "<option value=\"$months[$i]\">$months[$i]</option>";
		}
		echo '</select>';
	
		//DAYS 1-31
		echo '<select name="day">';
		for ($day = 1; $day <= 31; $day++) {
			echo "<option value=\"$day\">$day</option>";
		}
		echo '</select>';
		
		//YEARS 2000-2016
		echo '<select name="year">';
		for ($year = 2000; $year <= 2016; $year++) {
			echo "<option value=\"$year\">$year</option>";
		}
		echo '</select>';
		
		
		echo '<br><input type="submit" ></form>';
		

		
		
			

			
			
	?>
	</body>
</html>