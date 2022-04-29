<?php
require_once 'NutModel.php';
class addnutritionModel extends NutModel
{
	protected $date;
    protected $mealname;

    protected $quantity;
    protected $calories;
    protected $carbs;
    protected $fats;
    protected $protein;
    protected $time;

    public function __construct()
    {
        parent::__construct();
        $this->date    = '';
        $this->mealname = '';

        $this->quantity   = '';
        $this->calories = '';
        $this->carbs = '';
        $this->fats = '';
        $this->protein = '';
        $this->time = '';
    }
	public function getdate()
    {
        return $this->date;
    }
    public function setdate($d)
    {
        $this->date = $d;
    }

    public function getmealname()
    {
        return $this->mealname;
    }
    public function setmealname($m)
    {
        $this->mealname = $m;
    }
    public function getquantity()
    {
        return $this->quantity;
    }
    public function setquantity($q)
    {
        $this->quantity = $q;
    }
    public function getcalories()
    {
        return $this->calories;
    }
    public function setcalories($cal)
    {
        $this->calories = $cal;
    }
    public function getcarbs()
    {
        return $this->carbs;
    }
    public function setcarbs($carb)
    {
        $this->carbs = $carb;
    }
    public function getfats()
    {
        return $this->fats;
    }
    public function setfats($f)
    {
        $this->fats = $f;
    }

    public function getprotein()
    {
        return $this->protein;
    }
    public function setprotein($p)
    {
        $this->protein = $p;
    }

    public function gettime()
    {
        return $this->time;
    }
    public function settime($t)
    {
        $this->time = $t;
    }





	// public $title = 'addnutrition';
	
	public function addNut()
	{

		
		$this->dbh->query('INSERT INTO `nutrition` (`date`,`mealname`,`quantity`,`calories`,`carbs`,`fats`,`protein`,`time`) VALUES ( :date, :mealname, :quantity, :calories, :carbs, :fats, :protein, :time )');
		$this->dbh->bind(':date', $this->date);
        $this->dbh->bind(':mealname', $this->mealname);
        $this->dbh->bind(':quantity', $this->quantity);
		$this->dbh->bind(':calories', $this->calories);
        $this->dbh->bind(':carbs', $this->carbs);
        $this->dbh->bind(':fats', $this->fats);
		$this->dbh->bind(':protein', $this->protein);
        $this->dbh->bind(':time', $this->time);
         
		return $this->dbh->execute();
	}
	
	
	
}

?>