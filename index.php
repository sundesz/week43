<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Week 43 Amazon task</title>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
	</head>
	<body>

<?php
	if ( isset( $_POST['date'] )) {

		$date1 = date ( "Y-m-d", strtotime($_POST['date']) );
		$date2 = date("Y-m-d");

		echo "Date you select: " , $date1, '<br>';

		$diff = abs(strtotime($date2) - strtotime($date1));
		$days = floor(($diff )/ (60*60*24));

		printf("%d days\n", $days);
	} else  {
?>
<h3> Please select date </h3>
	<form method="POST" >
		<p>Date: <input type="text" name="date" id="datepicker" readonly>
			<input type="submit" id="submit" name="submit" value="Submit">
		</p>
	</form>

<?php } ?>

	<script>
		$(function() {
			$( "#datepicker" ).datepicker();
			
			$("#submit").click(function() {
				if ( $("#datepicker").val() == '') {
					alert("Please select date first");
					return false;
				}
			});
		});
	</script>
	</body>
</html>