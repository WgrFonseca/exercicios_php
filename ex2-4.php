<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
	<meta charset="utf-8">
</head>
<body>
	<?php

		$sal = $_POST["salario"];
		$prest = $_POST["prestacao"];
		$result = $sal * 30 / 100;

		if ($prest > $result) {
			echo "Valor da prestação é maior que o limite permitido.";
		}else
			echo "Empréstimo liberado!";
	?>





</body>
</html>