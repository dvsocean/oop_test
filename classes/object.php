<?php 
class Object{


	public function create(){
		global $db;

		$sql="INSERT INTO " . static::$table . " (username, email, password) VALUES('$this->username', '$this->email', '$this->password')";
		$db->query($sql);
	}


	public static function assign_properties($row){
		$child_class= get_called_class();
		$object= new $child_class;

		foreach ($row as $key => $value) {
			if ($object->has_property($key)) {
				$object->$key= $value;
			}
		}
	}

	private function has_property($prop){
		$obj_props= get_object_vars($this);
		return array_key_exists($prop, $obj_props);
	}





}//END OF CLASS


?>