<?php
class deleteclientModel extends Model 
{
     public $title = 'Delete Client';
     protected $id;
    
 
 
     public function __construct()
     {
         parent::__construct();
         $this->ID="";
        
     }
     public function getID(){
         return $this->ID;
     }
     public function setID($ID){
         $this->ID=$ID;
     }

     public function deleteclient(){
        $this->dbh->query('DELETE  from  `users` where id=:id') ;
        $this->dbh->bind(':id',$this->ID );

		return $this->dbh->execute();
     }


 
 
}