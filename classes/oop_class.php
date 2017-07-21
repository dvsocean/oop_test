<?php 
class Car{
	public $doors;
	public $wheels;
	public $engine;
	public $color;
	public $transmission;
	public $seats;
	public $sound;
	public $mpg;

	public function show_off($doors, $wheels, $engine, $color, $transmission, $seats, $sound){
		echo"My car has ". $doors." it sits<br>
		on ".$wheels." and has a bad ass engine,<br>
		 its a ". $engine.". I painted <br>
		my car ".$color." for the ladies,<br>
		and gave it a ".$transmission." and<br> 
		now its fast as fu.. It has ".$seats." and a badass<br>
		sound system called ".$sound.".";
	}

	public function delimit_me($param){
		echo<<<EOD
		This is HEREDOC used inside of a function, im also including one parameter called $param!!!
EOD;
	}

	public function how_many_passengers($passengers){
		if($this->seats >= $passengers){
			return true;
		} else {
			return false;
		}
	}

	public function fuel_economy($miles){
		return $miles / $this->mpg." MPG ECONOMY"; 
	}

	public static function driveby($vatos){
		echo"BRRAAATTTTT..SAID MY ". HARDWARE . " AND THERES " . $vatos." VATOS ON THE GROUND";
	}

}


?>