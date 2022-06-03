<?php
require_once 'WorkModel.php';
class editworkoutModel extends WorkModel
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
        $this->trainingID    = '';

        $this->date    = '';
        $this->name= '';

        $this->sets  = '';
        $this->reps = '';
        $this->weights = '';
        $this->resttime = '';
        $this->userid = '';
        
    }
    public function gettrainingID()
    {
        return $this->trainingID;
    }
    public function settrainingID($d)
    {
        $this->trainingID = $d;
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

    public function getRow(){
        $this->dbh->query('select * from `training` where trainingID=:trainingID');
        $this->dbh->bind(':trainingID',  $this->trainingID );

        $this->dbh->execute();

        $dataa=$this->dbh->single();

        return $dataa;
    }



    public function updateworkout( ){
        $this->dbh->query("UPDATE training SET `name`=:namee,`reps`=:repss ,`sets`=:setss ,`resttime`=:resttimee ,`date`=:datee , `weights`= :weightss  where trainingID=:trainingID");
        $this->dbh->bind(':trainingID', htmlentities($this->trainingID ));
        $this->dbh->bind(':namee',htmlentities( $this->name));
		$this->dbh->bind(':repss', htmlentities($this->reps));
        $this->dbh->bind(':setss', htmlentities($this->sets));
        $this->dbh->bind(':resttimee',htmlentities( $this->resttime));
		$this->dbh->bind(':datee',htmlentities( $this->date));
        $this->dbh->bind(':weightss', htmlentities($this->weights));
		// $this->dbh->bind(':useridd', htmlentities($this->userid)); ,`useridd`= :used_by
		return $this->dbh->execute();

    } 

    
    
}

?>