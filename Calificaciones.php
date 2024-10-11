<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
	$calificacion=array('Doña Lety'=>'10','Chucho'=>'5', 'Doña Irma'=>'6', 'Mencho'=>'7',
		'Doña Corintia'=>'10');

	foreach ($calificacion as $nombre => $promedio) {
		echo" La calificacion del $nombre es: $promedio";
		echo "<br>";
	}
	
    arsort($calificacion);
    
foreach ($calificacion as $nombre => $promedio) {
		echo" La calificacion del $nombre es: $promedio";
		echo "<br>";
	}


	?>

</body>
</html>