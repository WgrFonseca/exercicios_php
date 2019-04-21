<!DOCTYPE html>
<html>
<head>
	<title>Tabuada</title>
	<meta charset="utf-8">
</head>
<body>

	<?php

		$n = $_POST["n1"];
		$x = 0;

		if ($n >= 1 && $n <= 10) {
			for ($i=0; $i < 11; $i++) {
				$x = $n * $i;
				echo "$n x $i = " .$x;
				echo "<br>";
			}
		}else
			echo "Número invalido<br>Digite um número de 1 à 10";







	?>

</body>
</html>