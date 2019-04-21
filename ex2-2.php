<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
</head>
<body>
<?php 

	$compra = $_POST["compra"];
	$desconto = $_POST["tipo"];

	

	if($desconto == 1){
		$desconto = $compra - (($compra * 5) / 100);
		echo "Total da compra R$ " .$desconto;
	}elseif ($desconto == 2){
		$desconto = $compra - (($compra * 10) / 100);
		echo "Total da comrpa R$ " .$desconto;
	}elseif ($desconto == 3) {
		echo "Total da compra R$ " .$compra;
	}
	
 ?>
</body>
</html>