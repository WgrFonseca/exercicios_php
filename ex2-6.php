<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
	<meta charset="utf-8">
</head>
<body>

	<?php

		$sal = $_POST["salario"];
		$carg = $_POST["cargo"];
		$ajust = $sal;
		$dif;

		if ($carg == 101) {
			$sal += ($sal * 10 / 100);
			echo "Cargo Gerente<br>";
			echo "Aumento 10%<br>";
			echo "Novo salário: R$ " .$sal;
			$dif = $sal - $ajust;
			echo "<br>Diferença com relação ao antigo salário: R$ " .$dif;
		}elseif ($carg == 102) {
			$sal += ($sal * 20 / 100);
			echo "Cargo Engenheiro<br>";
			echo "Aumento 20%<br>";
			echo "Novo salário: R$ " .$sal;
			$dif = $sal - $ajust;
			echo "<br>Diferença com relação ao antigo salário: R$" .$dif;
		}elseif ($carg == 103) {
			$sal += ($sal * 30 / 100);
			echo "Cargo Técnico<br>";
			echo "Aumento 30%<br>";
			echo "Novo salário: R$ " .$sal;
			$dif = $sal - $ajust;
			echo "<br>Diferença com relação ao antigo salário: R$ " .$dif;
		}else{
			$sal += ($sal * 40 / 100);
			echo "Cargo Indefinido<br>";
			echo "Aumento 40%<br>";
			echo "Novo salário: R$ " .$sal;
			$dif = $sal - $ajust;
			echo "<br>Diferença com relação ao antigo salário: R$ " .$dif;
		}





	?>



</body>
</html>