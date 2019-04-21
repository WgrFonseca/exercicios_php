<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
	<meta charset="utf-8">
</head>
<body>
	<?php

		$idade = $_POST["idade"];

		if ($idade >= 5 && $idade <= 7)
			echo "Categortia INFANTIL A";
		elseif ($idade >=8 && $idade <= 10)
			echo "Categoria INFANTIL B";
		elseif ($idade >= 11 && $idade<= 13)
			echo "Categoria JUVENIL A";
		elseif ($idade >= 14 && $idade <= 17)
			echo "Categoria JUVENIL B";
		elseif ($idade >= 18)
			echo "Categoria ADULTO";
		else
			echo "Categoria não encoontrada";
		





	?>



</body>
</html>