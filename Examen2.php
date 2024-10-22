<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
	$array = array('Carro1' => 17000, 'Carro2' => 67000, 'Carro3' => 70000, 'Carro4' => 100000, 'Carro5' => 80000);

	
	foreach ($array as $carros => $precio) {
		echo "El precio total de los carros es $carros: $precio";
		echo "<br>";
	}
	
	$array['Carro6'] = 75000;  
	$array['Carro7'] = 85000;  


	arsort($array);


	foreach ($array as $carros => $precio) {
		echo "El precio total de los carros es $carros: $precio";
		echo "<br>";
	}
	?>
</body>
</html>