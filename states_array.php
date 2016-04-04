<!DOCTYPE html>
<html>
<head>
	<title>States Array</title>
</head>
<body>
	<?php

	$states = array("CA", "WA", "VA", "UT", "AZ");

	echo "<h1>For loop form: </h1>";

	echo "<select name='for_loop_form' name='for_loop_form'>";

	for( $i = 0; $i < count($states); $i++){
		echo "<option value='$states[$i]'>$states[$i]</option>";
	}

	echo "</select>";

	echo "<h1>Foreach loop form: </h1>";

	echo "<select name='foreach_loop_form' name='foreach_loop_form'>";

	foreach ($states as $key => $value) {
	
		echo "<option value='$value'>$value</option>";
	}

	echo "</select>";

	array_push($states, "NJ", "NY", "DE");

	echo "<h1>Foreach loop form with 8 states: </h1>";

	echo "<select name='for_loop_form_8' name='for_loop_form_8'>";

	for( $i = 0; $i < count($states); $i++){
		echo "<option value='$states[$i]'>$states[$i]</option>";
	}

	echo "</select>";

	

	?>
</body>
</html>