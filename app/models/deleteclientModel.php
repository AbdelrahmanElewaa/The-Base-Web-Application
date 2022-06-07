<?php
class deleteclientModel extends Model{

public function deleteclient()
	{

		$this->dbh->query('DELETE FROM `users` WHERE id=:userid');
        $this->dbh->bind(':userid',htmlentities( $_GET['id']  )  );
        // print("DELETE FROM `nutrition` WHERE userID=".$_GET['id']);

		return $this->dbh->execute();
	}

}



    ?>