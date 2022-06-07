<?php
require_once 'WorkModel.php';
class deleteworkoutModel extends WorkModel
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
    
    
	

    public function deleteWork()
	{

		$this->dbh->query('DELETE FROM `training` WHERE traininguserid=:userid');
        $this->dbh->bind(':userid',htmlentities( $_GET['id']  )  );
        // print("DELETE FROM `training` WHERE userID=".$_GET['id']);

		return $this->dbh->execute();
	}
	
	
}

?>