<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
   $arraynumerico= array(
 "mahoraga"=> 4.2 ,
"laios"=> 7 ,
"Aanoon"=> 0.2 ,
"SAID"=>  9000  ,
"yo mismo" => 6.2 , 
"legonegro" =>6.1 ,
);

   echo "calificaciones";
foreach ($arraynumerico as $nombre => $calificaciones) {
	echo "La calificacion de $nombre es $calificaciones"; echo "<br>";
}


echo "<br>";

sort($arraynumerico);

echo "calificaciones ordenadas:" . "<br>";
foreach ($arraynumerico as $nombre => $calificaciones)
{
echo "La calificacion de $nombre es $calificaciones"; echo "<br>";
}


?>
</body>
</html>