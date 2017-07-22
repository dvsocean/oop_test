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
			$car->color= "BLACK and YELLOW";
			$car->transmission= "6 speed manual transmission";
			$car->seats= 4;
			$car->sound= "KICKER";
			$car->mpg= V6;

			echo"<strong>Functions can be built with numerous parameters</strong><br>";
			$car->show_off($car->doors, $car->wheels, $car->engine, $car->color, $car->transmission, $car->seats, $car->sound);

			echo"<br><br>";

			echo"<strong>Here is the use of a constant</strong><br>";
			echo "Constant: ". LOW_GRADE;

			echo"<br><br>";

			$car->delimit_me($car->color);
			echo"<br><br>";

			if ($car->how_many_passengers(3)) {
				echo"ENOUGH SEATS FOR ALL MY NINJAS";
			} else {
				echo"CHEV-RO-LEGS";
			}

			echo"<br>";

			echo var_dump($car->how_many_passengers(3))." <strong>Result of the VAR DUMP</strong>";

			echo"<br><br>";

			 
			setlocale(LC_MONETARY,"en_US");
			echo money_format("$%n", $car->gallons_in_tank(10));

			

			echo"<br><br>";
			echo"<strong>Static call to the driveby method</strong><br>";
			Car::driveby(2);
		?>
	</p>



</body>
</html>