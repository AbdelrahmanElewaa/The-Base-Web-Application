<?php
require_once 'userModel.php';
class editclientModel extends userModel
{
    protected $id;
	protected $name;
    protected $email;
    protected $password;
    protected $social;
    protected $role;

 

    

    public function __construct()
    {
        parent::__construct();
        $this->id    = '';
        $this->name    = '';
        $this->email= '';
        $this->password  = '';
        $this->social = '';
        $this->role = '';

        
    }
    public function getid(){
        return $this->id;
    }
    public function setid($d)
    {
        $this->id = $d;
    }

	public function getname()
    {
        return $this->name;
    }
    public function setname($d)
    {
        $this->name = $d;
    }


    public function getemail()
    {
        return $this->email;
    }
    public function setemail($b)
    {
        $this->email = $b;
    }


    public function getpassword()
    {
        return $this->password;
    }
    public function setpassword($b)
    {
        $this->password = $b;
    }

    public function getsocial()
    {
        return $this->social;
    }
    public function setsocial($l)
    {
        $this->social = $l;
    }
    public function getrole()
    {
        return $this->role;
    }

    public function setrole($l)
    {
        $this->role = $l;
    }
   

	
    public function getRow(){
        $this->dbh->query('select * from `users` where id=:id');
        $this->dbh->bind(':id',  $this->id );
        $this->dbh->execute();
        $dataa=$this->dbh->single();
        return $dataa;
    }
	
    public function updateclient( ){
        $this->dbh->query("UPDATE users  SET `name`=:namee , `email`=:email,`social`=:social ,`password`=:passwordd ,`social`= :social  where id=:id");
        $this->dbh->bind(':id', htmlentities($this->id ));
		$this->dbh->bind(':namee',htmlentities( $this->name));
        $this->dbh->bind(':email', htmlentities($this->email));
        $this->dbh->bind(':social',htmlentities( $this->social));
        $this->dbh->bind(':passwordd', htmlentities($this->password));
		return $this->dbh->execute();

    }  

    
	
}

?>