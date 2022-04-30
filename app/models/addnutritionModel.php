<?php
require_once 'NutModel.php';
class addnutritionModel extends NutModel
{
	protected $date;
    protected $bname;

    protected $bd;
    protected $lname;
    protected $ld;
    protected $dname;
    protected $dd;
    

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
        
    }
	public function getdate()
    {
        return $this->date;
    }
    public function setdate($d)
    {
        $this->date = $d;
    }


    public function getbname()
    {
        return $this->bname;
    }
    public function setbname($b)
    {
        $this->bname = $b;
    }


    public function getbd()
    {
        return $this->bd;
    }
    public function setbd($b)
    {
        $this->bd = $b;
    }

    public function getlname()
    {
        return $this->lname;
    }
    public function setlname($l)
    {
        $this->lname = $l;
    }
    public function getld()
    {
        return $this->ld;
    }

    public function setld($l)
    {
        $this->ld = $l;
    }
    public function getdname()
    {
        return $this->dname;
    }
    public function setdname($d)
    {
        $this->dname = $d;
    }
    public function getdd()
    {
        return $this->dd;
    }
    public function setdd($d)
    {
        $this->dd = $d;
    }

    




	// public $title = 'addnutrition';
	
	public function addNut()
	{

		
		$this->dbh->query('INSERT INTO `nutrition` (`date`,`breakfast`,`lunch`,`dinner`,`bd`,`ld`,`dd`) VALUES ( :date, :bname, :lname, :dname, :bd, :ld, :dd)');
		$this->dbh->bind(':date', $this->date);
        $this->dbh->bind(':bname', $this->bname);
        $this->dbh->bind(':lname', $this->lname);
		$this->dbh->bind(':dname', $this->dname);
        $this->dbh->bind(':bd', $this->bd);
        $this->dbh->bind(':ld', $this->ld);
		$this->dbh->bind(':dd', $this->dd);
         
		return $this->dbh->execute();
	}
	
	
	
}

?>