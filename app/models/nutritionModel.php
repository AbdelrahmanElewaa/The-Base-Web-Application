<?php
class nutritionModel extends model
{
	
	public $title = 'nutrition';
	
	public $nutrition;

	public function ViewNutrition(){
		
		$this->dbh->query('SELECT * from nutrition');
        // $this->dbh->bind(':email', $this->email);

        $record = $this->dbh->resultSet();
		// return $this->dbh->execute();
		return $record;
	}
	
	
}

?>