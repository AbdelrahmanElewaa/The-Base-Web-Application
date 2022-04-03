<?php
require_once 'UserModel.php';
class editUserModel extends UserModel
{
    public  $title = 'User edit Page';
    protected $ID;
    protected $name;
    protected $nameErr;
    protected $confirmPassword;
    protected $confirmPasswordErr;
    protected $social;
    protected $socialerr;
    protected $role;
    protected $roleerr;


    public function __construct()
    {
        parent::__construct();
        $this->ID="";
        $this->name     = "";
        $this->nameErr = "";
        $this->socialerr="";
        $this->social="";
        $this->role="";
        $this->roleerr="";
        $this->confirmPassword = "";
        $this->confirmPasswordErr = "";
    }
    public function getID(){
        return $this->ID;
    }
    public function setID($ID){
        $this->ID=$ID;
    }
public function getSocial($ID){
    $this->dbh->query("select social from users where id= :ID");
    // $this->dbh->bind(':social', $social);
    $this->dbh->bind(':ID', $ID);
    $this->dbh->execute();
    return $this->dbh->single();
    
    // return $this->social;
}
public function setSocial($ID,$social){
    $this->dbh->query("update users set social= :social where id= :ID");
    $this->dbh->bind(':social', $social);
    $this->dbh->bind(':ID', $ID);
    $this->dbh->execute();
    $this->social=$social;
}
public function getSocialErr(){
    return $this->socialerr;
}
public function setSocialErr($socialerr){
     $this->socialerr=$socialerr;
}

public function getRole($ID){
    $this->dbh->query("select role from users where id= :ID");
    // $this->dbh->bind(':social', $social);
    $this->dbh->bind(':ID', $ID);
    $this->dbh->execute();
    return $this->dbh->single();
    // return $this->role;
}
public function setRole($ID,$role){
    $this->dbh->query("update users set role= :role where id= :ID");
    $this->dbh->bind(':role', $role);
    $this->dbh->bind(':ID', $ID);
    $this->dbh->execute();
    $this->role=$role;
}
public function getRoleErr(){
    return $this->roleerr;
}
public function setRoleErr($roleerr){
     $this->roleerr=$roleerr;
}
    public function getName($ID)
    {
        $this->dbh->query("select name from users where id= :ID");
    // $this->dbh->bind(':social', $social);
    $this->dbh->bind(':ID', $ID);
    // $this->dbh->execute();?
    return $this->dbh->single();
        // return $this->name;
    }

    public function setName($ID,$name)
    {
        $this->dbh->query("update users set name= :name where id= :ID");
        $this->dbh->bind(':role', $name);
        $this->dbh->bind(':ID', $ID);
        $this->dbh->execute();
        $this->name = $name;
    }

    public function getNameErr()
    {
        return $this->nameErr;
    }

    public function setNameErr($nameErr)
    {
        $this->nameErr = $nameErr;
    }

    public function getConfirmPassword($ID)
    {
        $this->dbh->query("select password from users where id= :ID");
    // $this->dbh->bind(':social', $social);
    $this->dbh->bind(':ID', $ID);
    $this->dbh->execute();
    return $this->dbh->single();
        return $this->confirmPassword;
    }
    public function setConfirmPassword($ID,$confirmPassword)
    {
        $this->dbh->query("update users set password= :password where id= :ID");
        $this->dbh->bind(':role', $confirmPassword);
        $this->dbh->bind(':ID', $ID);
        $this->dbh->execute();
        $this->confirmPassword = $confirmPassword;
    }

    public function getConfirmPasswordErr()
    {
        return $this->confirmPasswordErr;
    }
    public function setConfirmPasswordErr($confirmPasswordErr)
    {
        $this->confirmPasswordErr = $confirmPasswordErr;
    }

    public function ViewUser($ID){
		
		$this->dbh->query('SELECT * from users where id= :id');
        $this->dbh->bind(':id', $ID);

        $record = $this->dbh->resultSet();
		// return $this->dbh->execute();
		return $record;
	}

    // public function signup()
    // {
    //     $this->dbh->query("INSERT INTO users (`name`, `email`, `password`, `social`, `role`) VALUES(:uname, :email, :pass, :social, :r)");
    //     $this->dbh->bind(':uname', $this->name);
    //     $this->dbh->bind(':email', $this->email);
    //     $this->dbh->bind(':pass', $this->password);
    //     $this->dbh->bind(':social', $this->social);
    //     $this->dbh->bind(':r', $this->role);

    //     return $this->dbh->execute();
    // }
}
