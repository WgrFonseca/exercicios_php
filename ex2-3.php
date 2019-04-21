<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
	<meta charset="utf-8">
</head>
<body>
	<?php

		$n1 = $_POST["numero"];

		if ($n1 % 5 == 0) {
			echo "É divisivel por 5!";
		}else
			echo "NÃO é divisível por 5!";
	?>




</body>
</html>