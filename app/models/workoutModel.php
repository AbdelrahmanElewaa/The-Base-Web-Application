<?php
class workoutModel extends model
{
	
	public $title = 'workout';
	
	
	public function ViewWorkout(){
		
		$this->dbh->query('SELECT * from training');

        $record = $this->dbh->resultSet();
		
		return $record;
	}
	
	
}

?>