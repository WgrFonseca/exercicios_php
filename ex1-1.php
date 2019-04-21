<!-- pega o numero digitado no html e mostra o antecessor e sucessor -->

<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
	<meta charset="utf-8">
</head>
<body>
	<?php

		$numero = $_POST["numero"];
		$sucessor = $numero + 1;
		$antecessor = $numero - 1;

	echo "Número: $numero <br />";
	echo "Antecessor: $antecessor <br />";
	echo "Sucessor: $sucessor <br />";
	?>


</body>
</html>