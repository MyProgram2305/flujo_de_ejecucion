<html>
<head>
	<title>flujo de ejecucion</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<?php  
  function calculavelocidad()
  {
  	$velocidad=0;
  	$distancia=1000;
  	$tiempo=20;

  	$velocidad=$distancia/$tiempo;
  	
  	return $velocidad;
  } 

function calculadistancia()
  {
  	$velocidad=350;
  	$distancia=0;
  	$tiempo=20;

  	$distancia=$velocidad*$tiempo;
 
  	return $distancia;
  }   

function calculatiempo()
  {
  	$velocidad=360;
  	$distancia=1000;
  	$tiempo=0;

  	$tiempo=$distancia/$velocidad;
 
  	return $tiempo;
  } 
?>

<?php

$vel=calculavelocidad();
echo "la velocidad es de $vel km/hr...<br>";
$dist=calculadistancia();
echo "la distancia es de $dist v/hr...<br>";
$tpo=calculatiempo();
echo "el tiempo es de $tpo km/v...<br>";
  ?>
	<img src="img/taco.jpeg" width="50">
</body>
</html>