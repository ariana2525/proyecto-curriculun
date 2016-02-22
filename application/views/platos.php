<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Platos</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h3><?php echo "<PRE>"; print_r($datos); echo "</PRE>";?></h3>
	
		<?php 
		for ($i=0; $i <count($datos) ; $i++) { 
			echo "<br>";
			echo $datos[$i]->nombre;
			echo "<br>";
			echo $datos[$i]->precio;
			echo "<br>";
		}
	 ?>

	
	
</body>
</html>