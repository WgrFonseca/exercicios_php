<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
</head>
<body>

	<?php

	$n1 = $_POST["num1"];
	$n2 = $_POST["num2"];

	if ($n1 == $n2) {
		echo "Os números $n1 e $n2 são iguais!";
	}else
		echo "Os números $n1 e $n2 são diferentes!";

	?>



</body>
</html>