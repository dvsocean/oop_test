<!DOCTYPE html>
<html>
<head>
	<title>PHP 1</title>
</head>
<body>
	<h1 align="center">PHP 1</h1>

	<p align="center">
		<?php 
			require_once"classes/ini.php";

			$car= new Car();

			$car->doors= "4 DOORS";
			$car->wheels= "28 inch MOMO's";
			$car->engine="V8 BI TURBO";
			$car->color= "BLACK";
			$car->transmission= "6 speed manual transmission";
			$car->seats= 4;
			$car->sound= "KICKER";

			echo"<strong>Functions can be built with numerous parameters</strong><br>";
			$car->show_off($car->doors, $car->wheels, $car->engine, $car->color, $car->transmission, $car->seats, $car->sound);

			echo"<br><br>";

			echo"<strong>Here is the use of a constant</strong><br>";
			echo "Constant: ".CAR;

			echo"<br><br>";

			$car->delimit_me();
			echo"<br><br>";

			if ($car->how_many_passengers(5)) {
				echo"ENOUGH SEATS";
			} else {
				echo"UBER";
			}
		?>
	</p>



</body>
</html>