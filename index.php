<?php

if ( isset( $_POST['date'] )) {

	$date1 = $_POST['date'];
	$date2 = date("Y-m-d");

	echo $date1, '<br>';

	$diff = abs(strtotime($date2) - strtotime($date1));
	$days = floor(($diff )/ (60*60*24));

	printf("%d days\n", $days);
} else  {
?>

<form method="POST" >
<input type="text" name="date" placeholder="Enter a date"/>
<input type="submit" name="submit">
</form>

<?php } ?>