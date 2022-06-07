<?php
require_once 'NutModel.php';
class editnutModel extends NutModel
{
	protected $date;
    protected $bname;

    protected $bd;
    protected $lname;
    protected $ld;
    protected $dname;
    protected $dd;
    protected $userid;


    protected $dateErr;
    protected $bnameErr;

    protected $bdErr;
    protected $lnameErr;
    protected $ldErr;
    protected $dnameErr;

    protected $ddErr;
    protected $useridErr;





    
    

    public function __construct()
    {
        parent::__construct();
        $this->date    = '';
        $this->bname= '';

        $this->bd  = '';
        $this->lname = '';
        $this->ld = '';
        $this->dname = '';
        $this->dd= '';
        $this->userid= '';
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



    public function getbname()
    {
        return $this->bname;
    }
    public function setbname($b)
    {
        $this->bname = $b;
    }

    public function getbnameErr()
    {
        return $this->bnameErr;
    }
    public function setbnameErr($b)
    {
        $this->bnameErr = $b;
    }


    public function getbd()
    {
        return $this->bd;
    }
    public function setbd($b)
    {
        $this->bd = $b;
    }


    public function getbdErr()
    {
        return $this->bdErr;
    }
    public function setbdErr($b)
    {
        $this->bdErr = $b;
    }

    public function getlname()
    {
        return $this->lname;
    }
    public function setlname($l)
    {
        $this->lname = $l;
    }

    public function getlnameErr()
    {
        return $this->lnameErr;
    }
    public function setlnameErr($l)
    {
        $this->lnameErr = $l;
    }


    public function getld()
    {
        return $this->ld;
    }

    public function setld($l)
    {
        $this->ld = $l;
    }

    public function getldErr()
    {
        return $this->ldErr;
    }

    public function setldErr($l)
    {
        $this->ldErr = $l;
    }


    public function getdname()
    {
        return $this->dname;
    }
    public function setdname($d)
    {
        $this->dname = $d;
    }

    public function getdnameErr()
    {
        return $this->dnameErr;
    }
    public function setdnameErr($d)
    {
        $this->dnameErr = $d;
    }




    public function getdd()
    {
        return $this->dd;
    }
    public function setdd($d)
    {
        $this->dd = $d;
    }


    public function getddErr()
    {
        return $this->ddErr;
    }
    public function setddErr($d)
    {
        $this->ddErr = $d;
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





	// public $title = 'addnutrition';
	
	public function editNut($id)
	{

		
		$this->dbh->query('update `nutrition` set `date`=:date, `breakfast`=:bname, `lunch`=:lname, `dinner`=:dname, `bd`=:bd, `ld`=:ld, `dd`=:dd where `nutritionID`=:id');
		$this->dbh->bind(':date',htmlentities( $this->date));
        $this->dbh->bind(':bname', htmlentities($this->bname));
        $this->dbh->bind(':lname',htmlentities( $this->lname));
		$this->dbh->bind(':dname', htmlentities($this->dname));
        $this->dbh->bind(':bd', htmlentities($this->bd));
        $this->dbh->bind(':ld',htmlentities( $this->ld));
		$this->dbh->bind(':dd', htmlentities($this->dd));
        $this->dbh->bind(':id',htmlentities( $id));
		return $this->dbh->execute();
	}

    public function ViewNutrition($id){
		
		$this->dbh->query('SELECT * from nutrition where nutritionID= :id');
        $this->dbh->bind(':id', $id);

        $record = $this->dbh->single();
		// return $this->dbh->execute();
		return $record;
	}
	
	
	
}

?>