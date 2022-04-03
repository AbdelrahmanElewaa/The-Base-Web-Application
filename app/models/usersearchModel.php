<?php
 
class UsersearchModel extends model
{

     public function SearchUsers($DB,$getinput){
          
		$connect = mysqli_connect("localhost", "root", "", "base");
 $search = mysqli_real_escape_string($DB, $getinput);
//  $this->dbh->query("SELECT * FROM users 
//           WHERE (name LIKE '% :search %'
//           OR email LIKE '% :search %' 
//           OR social LIKE '% :search %' 
 //           OR role LIKE '% :search %')");
//         $this->dbh->bind(':search', $search);
// $record = $this->dbh->resultSet();
//         return $record;
$query = "
  SELECT * FROM users 
  WHERE (name LIKE '%".$search."%'
  OR email LIKE '%".$search."%' 
  OR social LIKE '%".$search."%' 
  OR role LIKE '%".$search."%') 
 ";
 $result = mysqli_query($connect, $query);
 $row = mysqli_fetch_array($result);
 if($row)
 return mysqli_query($connect, $query);
 else
 return "no data";
}

        //   $this->dbh->query('SELECT * from users');


        
       



}
