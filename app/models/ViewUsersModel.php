<?php
		// $conn=new mysqli('localhost','root','','miublog') or die("Error connecting");

class ViewUsersModel extends model
{
	public $users;
	
	public function ViewUsers(){
		
		$this->dbh->query('SELECT * from users where `role`= :a');
        $this->dbh->bind(':a', 'client');

        $record = $this->dbh->resultSet();
		return $record;
	}
	
	
}

?>