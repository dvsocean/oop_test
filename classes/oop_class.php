<?php 
class Car{
	public $doors;
	public $wheels;
	public $engine;
	public $color;
	public $transmission;
	public $seats;
	public $sound;

	public function show_off($doors, $wheels, $engine, $color, $transmission, $seats, $sound){
		echo"My car has ". $doors." it sits<br>
		on ".$wheels." and has a bad ass engine,<br>
		 its a ". $engine.". I painted <br>
		my car ".$color." for the ladies,<br>
		and gave it a ".$transmission." and<br> 
		now its fast as fu.. It has ".$seats." and a badass<br>
		sound system called ".$sound.".";
	}

	public function delimit_me(){
		echo<<<EOD
		This is HEREDOC used inside of a function!!!
EOD;
	}

	public function how_many_passengers($passengers){
		if($this->seats >= $passengers){
			return true;
		} else {
			return false;
		}
	}

}


?>