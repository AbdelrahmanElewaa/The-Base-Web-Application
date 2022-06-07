<?php
require_once 'UserModel.php';
class PlanModel extends UserModel
{
    public  $title = 'User Login Page';
	  protected $date=array();
    protected $bname=array();

    protected $bd=array();
    protected $lname=array();
    protected $ld=array();
    protected $dname=array();
    protected $dd=array();
    protected $userID;
    protected $breakfast=array();
    protected $lunch=array();
    protected $dinner=array();

    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->date    = '';
    //     $this->bname= '';

    //     $this->bd  = '';
    //     $this->lname = '';
    //     $this->ld = '';
    //     $this->dname = '';
    //     $this->dd= '';
    //     $this->userID="";

    // }
	// public function getdate()
    // {
    //     return $this->date;
    // }
    // public function setdate($d)
    // {
    //     // $this->date = $d;
    //     array_push($this->date,$d);

    // }


    public function getbname()
    {
        return $this->bname;
    }
    public function setbname($b)
    {
        // $this->bname = $b;
        array_push($this->bname,$b);

    }


    public function getbd()
    {
        return $this->bd;
    }
    public function setbd($b)
    {
        // $this->bd = $b;
        array_push($this->bd,$b);

    }

    public function getlname()
    {
        return $this->lname;
    }
    public function setlname($l)
    {
        // $this->lname = $l;
        array_push($this->lname,$l);

    }
    public function getld()
    {
        return $this->ld;
    }

    public function setld($l)
    {
        // $this->ld = $l;
        array_push($this->ld,$l);

    }
    public function getdname()
    {
        return $this->dname;
    }
    public function setdname($d)
    {
        // $this->dname = $d;
        array_push($this->dname,$d);

    }
    public function getdd()
    {
        return $this->dd;
    }
    public function setdd($d)
    {
        // $this->dd = $d;
        array_push($this->dd,$d);

    }


    public function getuserID()
    {
        return $this->userID;
    }
    public function setUserID($u)
    {
        $this->userID = $u;
        // array_push($this->userID,$u);

    }

    public function getBreakfast()
    {
        return $this->breakfast;
    }
    public function setBreakfast($u)
    {
        // $this->userID = $u;
        array_push($this->breakfast,$u);

    }

    public function getLunch()
    {
        return $this->lunch;
    }
    public function setLunch($u)
    {
        // $this->userID = $u;
        array_push($this->lunch,$u);

    }

    
    public function getDinner()
    {
        return $this->dinner;
    }
    public function setDinner($u)
    {
        // $this->userID = $u;
        array_push($this->dinner,$u);

    }


    public function getDate()
    {
        return $this->date;
    }
    public function setDate($u)
    {
        // $this->userID = $u;
        array_push($this->date,$u);

    }





    public function plan()
    {
	$this->dbh->query('SELECT *   FROM nutrition where userID=:uid
    ORDER by date ASC') ;
    $this->dbh->bind(':uid',$_SESSION['user_id']);
		return $this->dbh->resultSet();

    }


    public function planCount()
    {
	$this->dbh->query('SELECT count( * ) as  countt FROM nutrition where userID=:uid') ;
    $this->dbh->bind(':uid',$_SESSION['user_id']);
		return $this->dbh->resultSet();

    }
}
