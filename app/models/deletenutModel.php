<?php
require_once 'NutModel.php';
class deletenutModel extends NutModel
{
	
	public function deleteNut()
	{

		$this->dbh->query('DELETE FROM `nutrition` WHERE nutritionID=:id');
        $this->dbh->bind(':id',htmlentities( $_GET['id']  )  );
       
		return $this->dbh->execute();
	}
	
}

?>