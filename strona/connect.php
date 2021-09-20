<html>

<body>
	<?php
	$server = "localhost";
	$user = "kozale";
	$password = "myiI3t5aUPsql";
	$db = "kozale";
	$connection = mysqli_connect($server, $user, $password, $db);

	if (mysqli_connect_errno()) {
		echo "Blad";
		exit;
	}

	?>
</body>

</html>