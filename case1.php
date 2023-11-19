<html>

<body>
	<form>

		<input type="text" name="query">
		<input type="submit" value="Fetch">
	</form>


</body>

<?php

	$query = $_GET['query'];
	$file = fopen($query, "r");
	$line = fgets($file);

	echo "<h3>".$line."</h3>";
?>

</html>
