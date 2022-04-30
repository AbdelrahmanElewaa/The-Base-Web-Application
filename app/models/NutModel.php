<?php
class NutModel extends model
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
 }
