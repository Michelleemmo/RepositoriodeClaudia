<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
$array=array('Doña Lety'=>'11000','Chucho'=>'6700','Doña Irma'=>'7000','Poncho'=>'10000',
		'Doña Corintia'=>'8000');

arsort($array);
foreach ($array as $empleados => $sueldomensual) {
		echo" El sueldo mensual del $empleados:$sueldomensual";
		echo "<br>";
	}
	$array += [ "Juan" => 2000, "Lorena" => 7000 ];
	echo "<p>";

    

  arsort($array);  
foreach ($array as $empleados=> $sueldomensual) {
		echo"El sueldo mensual del $empleados:$sueldomensual";
		echo "<br>";
	}
	?>


</body>
</html>

