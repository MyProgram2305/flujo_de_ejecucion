<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Flujo de ejecucion </title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>

	<?php  
		function damedatos()
			{
				echo "Estoy dentro de la funcion....<br>";
				//este mensaje aparece al ultimo 
				echo "Rels b es lo mejor de este mundo....<br>";
			}




		echo "Este es un primer mensaje....<br>";
				
		damedatos();
		damedatos();
		damedatos();

		echo "Este es un segundo mensaje....<br>";

		damedatos();
	?>
	<img src="img/taco.jpeg" width="50">
</body>
</html>