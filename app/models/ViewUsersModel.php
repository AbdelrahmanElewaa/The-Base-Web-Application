<?php
		// $conn=new mysqli('localhost','root','','miublog') or die("Error connecting");

class ViewUsersModel extends model
{
	public $users;
	
	public function ViewUsers(){
		
		$this->dbh->query('SELECT * from users');
        // $this->dbh->bind(':email', $this->email);

        $record = $this->dbh->resultSet();
		// return $this->dbh->execute();
		return $record;
	}
	
	
}

?>