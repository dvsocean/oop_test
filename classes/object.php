<?php 
class Object{


	public function create(){
		global $db;

		$props= $this->class_properties();

		$sql="INSERT INTO " . static::$table . "(". implode(", ", array_keys($props)).") VALUES('".implode("', '", array_values($props))."')";
		$db->query($sql);
	}

	public function update($id){
		global $db;
		$props= $this->class_properties();
		$prop_pairs= array();

		foreach ($props as $key => $value) {
			if (isset($value)) {
				$prop_pairs[]="{$key}='{$value}'";
			}	
		}

		$sql="UPDATE " . static::$table . " SET " . implode(", ", $prop_pairs) ." WHERE " . static::$where_clause . "='$id'";
		$db->query($sql);
	}


	public function class_properties(){
		$properties= array();

		foreach (static::$table_columns as $column) {
			if (property_exists($this, $column)) {
				$properties[$column]= $this->$column;
			}
		}
		return $properties;
	}


}//END OF CLASS
?>

