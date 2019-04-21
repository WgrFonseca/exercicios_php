<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
	<meta charset="utf-8">
</head>
<body>

	<?php

	$func = $_POST["funcionario"];
	$sal = $_POST["salario"];
	$grat = $_POST["gratificacao"];
	$imp = $_POST["imposto"];
	$salTotal = $sal + (($sal * $grat) / 100);
	$imposto = ($salTotal * $imp) / 100;
	$salFinal = $salTotal - $imposto; 

	echo "Funcionário: $func<br />";
	echo "Salário a receber: R$$salFinal<br /><br />";

	echo "Memória de Cálculo:<br />Salário base: R$ $sal <br />Gratificação: $grat %<br />Imposto sobre o valor total: $imp %";
	?>



</body>
</html>