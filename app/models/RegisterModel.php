<?php
require_once 'UserModel.php';
class RegisterModel extends UserModel
{
    public  $title = 'User Registration Page';
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
        $this->name     = "";
        $this->nameErr = "";
        $this->socialerr="";
        $this->social="";
        $this->role="";
        $this->roleerr="";
        $this->confirmPassword = "";
        $this->confirmPasswordErr = "";
    }
public function getSocial(){
    return $this->social;
}
public function setSocial($social){
    $this->social=$social;
}
public function getSocialErr(){
    return $this->socialerr;
}
public function setSocialErr($socialerr){
     $this->socialerr=$socialerr;
}

public function getRole(){
    return $this->role;
}
public function setRole($role){
    $this->role=$role;
}
public function getRoleErr(){
    return $this->roleerr;
}
public function setRoleErr($roleerr){
     $this->roleerr=$roleerr;
}
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
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

    public function getConfirmPassword()
    {
        return $this->confirmPassword;
    }
    public function setConfirmPassword($confirmPassword)
    {
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

    public function signup()
    {
        $this->dbh->query("INSERT INTO users (`name`, `email`, `password`, `social`, `role`) VALUES(:uname, :email, :pass, :social, :r)");
        $this->dbh->bind(':uname', $this->name);
        $this->dbh->bind(':email', $this->email);
        $this->dbh->bind(':pass', $this->password);
        $this->dbh->bind(':social', $this->social);
        $this->dbh->bind(':r', $this->role);

        return $this->dbh->execute();
    }
}
