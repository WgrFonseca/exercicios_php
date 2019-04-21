<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
	<meta charset="utf-8">
</head>
<body>

	<?php

		$x = $_POST["n1"];
		$y = $_POST["n2"];
		$z = 0;

		for ($i=$x; $i < $y; $i++) {
			$z += $i + $i + 1;
		}

		echo "Total".$z;


	?>

</body>
</html>