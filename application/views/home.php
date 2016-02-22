<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1><?php echo $title ?></h1>
	<h2><?php echo $meses[0] ?></h2>
	<h2><?php print_r($meses); ?></h2>
	<h3><?php echo "<PRE>"; print_r($datos); echo "</PRE>";?></h3>
	<h4><?php echo "<PRE>"; print_r($datos[0]); echo "</PRE>";?></h4>
	<?php 
		for ($i=0; $i < count($datos); $i++) { 
			echo "<br>";
			echo $datos[$i]->nombre;
			echo "<br>";
			echo $datos[$i]->descripcion;
			echo "<br>";
		}
	 ?>

</body>
</html>