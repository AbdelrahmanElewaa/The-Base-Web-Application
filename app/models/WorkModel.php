<?php
require_once 'UserModel.php';
class WorkModel extends UserModel
{
    public  $title = 'User Login Page';
    protected $trainingID;

    protected $name=array();
    protected $reps=array();
    protected $sets=array();
    protected $resttime=array();
    protected $date=array();
    protected $weights=array();
    protected $traininguserid=array();


    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->trainingID  = '';
    //     $this->name= '';

    //     $this->reps = '';
    //     $this->sets = '';
    //     $this->resttime= '';
    //     $this->date = '';
    //     $this->weights = '';
    //     $this->traininguserid = '';


    // }

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
    public function setld($d)
    {
        array_push($this->sets,$d);

    }

    public function getdate()
    {
        return $this->date;
    }
    public function setdate($d)
    {
        array_push($this->date,$d);
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
        array_push($this->traininguserid,$d);

    }
    


    public function work()
    {
	$this->dbh->query('select * from `training`') ;
		return $this->dbh->resultSet();

    }
}
