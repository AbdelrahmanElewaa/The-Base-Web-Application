<?php
require_once 'WorkModel.php';
class addworkoutModel extends WorkModel
{
	protected $date;
    protected $name;

    protected $sets;
    protected $reps;
    protected $weights;
    protected $resttime;
    protected $userid;
    
    

    public function __construct()
    {
        parent::__construct();
        $this->date    = '';
        $this->name= '';

        $this->sets  = '';
        $this->reps = '';
        $this->weights = '';
        $this->resttime = '';
        $this->userid = '';
        
    }
	public function getdate()
    {
        return $this->date;
    }
    public function setdate($d)
    {
        $this->date = $d;
    }


    public function getname()
    {
        return $this->name;
    }
    public function setname($n)
    {
        $this->name = $n;
    }


    public function getsets()
    {
        return $this->sets;
    }
    public function setsets($s)
    {
        $this->sets = $s;
    }

    public function getreps()
    {
        return $this->reps;
    }
    public function setreps($r)
    {
        $this->reps= $r;
    }


    public function getweights()
    {
        return $this->weights;
    }

    public function setweights($w)
    {
        $this->weights = $w;
    }


    public function getresttime()
    {
        return $this->resttime;
    }
    public function setresttime($r)
    {
        $this->resttime = $r;
    }
    
	public function getuserid()
    {
        return $this->userid;
    }
    public function setuserid($u)
    {
        $this->userid = $u;
    }
    
	
	public function addWork()
	{

		
		$this->dbh->query('INSERT INTO `training` (`date`,`name`,`sets`,`reps`,`weights`,`resttime`,`traininguserid`) VALUES ( :date, :name, :sets, :reps, :weights, :resttime, :userid)');
		$this->dbh->bind(':date', $this->date);
        $this->dbh->bind(':name', $this->name);
        $this->dbh->bind(':sets', $this->sets);
		$this->dbh->bind(':reps', $this->reps);
        $this->dbh->bind(':weights', $this->weights);
        $this->dbh->bind(':resttime', $this->resttime);
		$this->dbh->bind(':userid', $this->userid);
		 
		return $this->dbh->execute();
	}
	
	
}

?>