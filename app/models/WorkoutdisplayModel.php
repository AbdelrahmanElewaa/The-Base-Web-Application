<?php
require_once 'UserModel.php';  


class WorkoutdisplayModel extends UserModel
{
    //  $Date=$_POST['date'];

    public  $title = 'User Login Page';

    protected $trainingID=array();
    protected $name=array();
    protected $reps=array();
    protected $sets=array();
    protected $resttime=array();
    protected $date;
    protected $weights=array();
    protected $traininguserid;

    


    public function __construct()
    {
        parent::__construct();
        $this->traininguserid = '';
    }

    public function gettrainingID()
    {
        return $this->traininguserid;
    }
    public function settrainingID($d)
    {
        array_push($this->trainingID,$d);

    }

	public function getname()
    {
        return $this->name;
    }
    public function setname($d)
    {
        array_push($this->name,$d);

    }


    public function getreps()
    {
        return $this->reps;
    }
    public function setreps($d)
    {
        array_push($this->reps,$d);

    }

    public function getsets()
    {
        return $this->sets;
    }
    public function setsets($d)
    {
        array_push($this->sets,$d);

    }

    public function getdate()
    {
        return $this->date;
    }
    public function setdate($d)
    {
        $this->date=$d;
    }

    public function getresttime()
    {
        return $this->resttime;
    }
    public function setresttime($d)
    {
        array_push($this->resttime,$d);

    }
    public function getweights()
    {
        return $this->weights;
    }
    public function setweights($d)
    {
        array_push($this->weights,$d);


    }public function gettraininguserid()
    {
        return $this->traininguserid;
    }
    public function settraininguserid($d)
    {
       $this->traininguserid=$d;

    }
    


    public function workdetails($Date)
    {
        $this->dbh->query('select * from `training` where date=:Date and traininguserid=:uid' ) ;
        $this->dbh->bind(':uid',$_SESSION['user_id']);
        $this->dbh->bind(':Date',$this->date);

        return $this->dbh->resultSet();
    }

}
