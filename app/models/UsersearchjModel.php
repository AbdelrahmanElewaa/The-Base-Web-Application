<?php
 $viewPath = VIEWS_PATH . 'pages/usersearchj.php';
 require_once $viewPath;
class UsersearchjModel extends model
{

     public function SearchUsers($DB,$getinput){
          
		
 $search = mysqli_real_escape_string($DB, $getinput);
 $this->dbh->query('SELECT * FROM users 
          WHERE (name LIKE '%".$search."%'
          OR email LIKE '%".$search."%' 
          OR social LIKE '%".$search."%' 
          OR role LIKE '%".$search."%') ');
        // $this->dbh->bind(':email', $this->email);

        $record = $this->dbh->resultSet();
        return $record;
       



}
}