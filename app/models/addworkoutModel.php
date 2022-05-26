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


    protected $dateErr;
    protected $nameErr;

    protected $setsErr;
    protected $repsErr;
    protected $weightsErr;
    protected $resttimeErr;
    protected $useridErr;
    
    

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


    public function getdateErr()
    {
        return $this->dateErr;
    }
    public function setdateErr($d)
    {
        $this->dateErr = $d;
    }

    public function getname()
    {
        return $this->name;
    }
    public function setname($n)
    {
        $this->name = $n;
    }


    public function getnameErr()
    {
        return $this->nameErr;
    }
    public function setnameErr($n)
    {
        $this->nameErr = $n;
    }

    public function getsets()
    {
        return $this->sets;
    }
    public function setsets($s)
    {
        $this->sets = $s;
    }


    public function getsetsErr()
    {
        return $this->setsErr;
    }
    public function setsetsErr($s)
    {
        $this->setsErr = $s;
    }

    public function getreps()
    {
        return $this->reps;
    }
    public function setreps($r)
    {
        $this->reps= $r;
    }


    public function getrepsErr()
    {
        return $this->repsErr;
    }
    public function setrepsErr($r)
    {
        $this->repsErr= $r;
    }

    public function getweights()
    {
        return $this->weights;
    }

    public function setweights($w)
    {
        $this->weights = $w;
    }


    public function getweightsErr()
    {
        return $this->weightsErr;
    }

    public function setweightsErr($w)
    {
        $this->weightsErr = $w;
    }


    public function getresttime()
    {
        return $this->resttime;
    }
    public function setresttime($r)
    {
        $this->resttime = $r;
    }


    
    public function getresttimeErr()
    {
        return $this->resttimeErr;
    }
    public function setresttimeErr($r)
    {
        $this->resttimeErr = $r;
    }
    
	public function getuserid()
    {
        return $this->userid;
    }
    public function setuserid($u)
    {
        $this->userid = $u;
    }

    public function getuseridErr()
    {
        return $this->useridErr;
    }
    public function setuseridErr($u)
    {
        $this->useridErr = $u;
    }
    
    
	
	public function addWork()
	{
        $this->dbh->query('select * from training where `date`=:date and `traininguserid`=:userid');
        $this->dbh->bind(':date', $this->date);
        $this->dbh->bind(':userid', $this->userid);
        $q=$this->dbh->resultSet();
        if($q){
            foreach($q as $x){
            $x->name.="$".$this->name;
            $x->sets.="$".$this->sets;
            $x->reps.="$".$this->reps;
            $x->weights.="$".$this->weights;
            $x->resttime.="$".$this->resttime; 
            $this->dbh->query('update training  set `name`=:name,`sets`=:sets, `reps`=:reps, `weights`=:weights, `resttime`=:resttime where `date`=:date and `traininguserid`=:userid' );
            $this->dbh->bind(':date', $this->date);
            $this->dbh->bind(':name', $x->name);
            $this->dbh->bind(':sets', $x->sets);
            $this->dbh->bind(':reps', $x->reps);
            $this->dbh->bind(':weights', $x->weights);
            $this->dbh->bind(':resttime', $x->resttime);
            $this->dbh->bind(':userid', $this->userid);
            break;
        }
            

           
             
            return $this->dbh->execute();
            


        }
		else{
            $this->dbh->query('INSERT INTO `training` (`date`,`name`,`sets`,`reps`,`weights`,`resttime`,`traininguserid`) VALUES ( :date, :name, :sets, :reps, :weights, :resttime, :userid)');
		$this->dbh->bind(':date',htmlentities( $this->date));
        $this->dbh->bind(':name', htmlentities($this->name));
        $this->dbh->bind(':sets', htmlentities($this->sets));
		$this->dbh->bind(':reps', htmlentities($this->reps));
        $this->dbh->bind(':weights',htmlentities( $this->weights));
        $this->dbh->bind(':resttime', htmlentities($this->resttime));
		$this->dbh->bind(':userid', htmlentities($this->userid));
		 
		return $this->dbh->execute();
        }
		
	}
	
	
}

?>