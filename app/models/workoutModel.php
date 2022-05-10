<?php
class workoutModel extends model
{
	
	public $title = 'workout';
	
	
	public function ViewWorkout($userid){
		
		$this->dbh->query('SELECT * from training where traininguserid= :userid');

		$this->dbh->bind(':userid', $userid);
        $record = $this->dbh->resultSet();
		
		return $record;
	}
	
	
}

?>