<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
$empleados=array('Doña Lety'=>'11000','Chucho'=>'6700', 'Doña Irma'=>'7000', 'Poncho'=>'10000',
		'Doña Corintia'=>'8000');

foreach ($empleados as $nombre => $sueldomensual) {
		echo" El sueldo mensual es:$empleados es: $sueldomensual";
		echo "<br>";
	}
	
    arsort($empleados);
    
foreach ($empleados as $nombre => $sueldomensual) {
		echo"El sueldo mensual es: $empleados es: $sueldomensual";
		echo "<br>";
	}


	?>

</body>
</html>

