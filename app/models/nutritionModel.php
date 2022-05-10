<?php
class nutritionModel extends model
{
	
	public $title = 'nutrition';
	
	public $nutrition;

	public function ViewNutrition($userid){
		
		$this->dbh->query('SELECT * from nutrition where userID= :userid');
        $this->dbh->bind(':userid', $userid);

        $record = $this->dbh->resultSet();
		// return $this->dbh->execute();
		return $record;
	}
	
	
}

?>