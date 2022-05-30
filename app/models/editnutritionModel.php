<?php
require_once 'NutModel.php';
class editnutritionModel extends NutModel
{
    protected $nutritionID;
	protected $date;
    protected $bname;
    protected $bd;
    protected $lname;
    protected $ld;
    protected $dname;
    protected $dd;
    protected $userid;

    

    public function __construct()
    {
        parent::__construct();
        $this->nutritionID    = '';

        $this->date    = '';
        $this->bname= '';
        $this->bd  = '';
        $this->lname = '';
        $this->ld = '';
        $this->dname = '';
        $this->dd= '';
        
    }
    public function getnutritionID(){
        return $this->nutritionID;
    }
    public function setnutritionID($d)
    {
        $this->nutritionID = $d;
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
    
    public function getuserid()
    {
        return $this->userid;
    }
    public function setuserid($u)
    {
        $this->userid = $u;
    }

	
    public function getRow(){
        $this->dbh->query('select * from `nutrition` where nutritionID=:nutritionID');
        $this->dbh->bind(':nutritionID',  $this->nutritionID );

                $this->dbh->execute();

        $dataa=$this->dbh->single();

        return $dataa;
    }
	
    public function update( ){
        $this->dbh->query('UPDATE `nutrition` SET `date`=:date , `breakfast`=:bname,`lunch`=:lname ,`dinner`=:dname ,`bd`=:bd ,`ld`= :ld ,`dd`=:dd ,`userID`=:userid Where $nutritionID=:nutritionID');
        $this->dbh->bind(':nutritionID', htmlentities($this->nutritionID ));
		$this->dbh->bind(':date',htmlentities( $this->date));
        $this->dbh->bind(':bname', htmlentities($this->bname));
        $this->dbh->bind(':lname',htmlentities( $this->lname));
		$this->dbh->bind(':dname', htmlentities($this->dname));
        $this->dbh->bind(':bd', htmlentities($this->bd));
        $this->dbh->bind(':ld',htmlentities( $this->ld));
		$this->dbh->bind(':dd', htmlentities($this->dd));
        $this->dbh->bind(':userid',htmlentities( $this->userid));
		return $this->dbh->execute();

    }    

	
}

?>