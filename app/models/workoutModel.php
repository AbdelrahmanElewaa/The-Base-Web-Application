<?php
class workoutModel extends model
{
	
	public $title = 'workout';
	
	
	public function ViewWorkout(){
		
		$this->dbh->query('SELECT * from training');
        // $this->dbh->bind(':email', $this->email);

        $record = $this->dbh->resultSet();
		// return $this->dbh->execute();
		return $record;
	}
	
	
}

?>