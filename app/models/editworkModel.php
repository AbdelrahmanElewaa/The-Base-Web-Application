<?php
require_once 'WorkModel.php';
class editworkModel extends WorkModel
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
    
    
	
	public function editWork($id)
	{
        $this->dbh->query('select * from training where `date`=:date and `traininguserid`=:userid');
        $this->dbh->bind(':date', $this->date);
        $this->dbh->bind(':userid', $this->userid);
        $q=$this->dbh->resultSet();
        if(!$q){
            die("no results");
        }
        foreach($q as $x){
        $n=explode("$",$x->name);
		$s=explode("$",$x->sets);
		$r=explode("$",$x->reps);
		$w=explode("$",$x->weights);
		$rs=explode("$",$x->resttime);


        for($i=0;$i<count($n);$i++){
            if ($i==$id){
                    $n[$i]=$this->name;
                    $s[$i]=$this->sets;
                    $r[$i]=$this->reps;
                    $w[$i]=$this->weights;
                    $rs[$i]=$this->resttime;
                    break;
            }

        }
        $x->name=implode("$",$n);
		$x->sets=implode("$",$s);
		$x->reps=implode("$",$r);
		$x->weights=implode("$",$w);
		$x->resttime=implode("$",$rs);
        $this->dbh->query('update training  set `name`=:name,`sets`=:sets, `reps`=:reps, `weights`=:weights, `resttime`=:resttime where `date`=:date and `traininguserid`=:userid' );
            $this->dbh->bind(':date', $this->date);
            $this->dbh->bind(':name', $x->name);
            $this->dbh->bind(':sets', $x->sets);
            $this->dbh->bind(':reps', $x->reps);
            $this->dbh->bind(':weights', $x->weights);
            $this->dbh->bind(':resttime', $x->resttime);
            $this->dbh->bind(':userid', $this->userid);
            // break;
        // }
            

           
             
            return $this->dbh->execute();

    }


		
	}

    public function ViewWorkout($id,$userid,$date){
		

        $this->dbh->query('select * from training where `date`=:date and `traininguserid`=:userid');
        $this->dbh->bind(':date', $date);
        $this->dbh->bind(':userid', $userid);
        $q=$this->dbh->resultSet();
        if(!$q){
            die("no results");
        }
        foreach($q as $x){

        $n=explode("$",$x->name);
		$s=explode("$",$x->sets);
		$r=explode("$",$x->reps);
		$w=explode("$",$x->weights);
		$rs=explode("$",$x->resttime);


        for($i=0;$i<count($n);$i++){
            if ($i==$id){
                $x->name=$n[$i];
                $x->sets=$s[$i];
                $x->reps=$r[$i];
                $x->weights=$w[$i];
                $x->resttime=$rs[$i];
                    break;
            }

        }
    }
        return $x;




		// $this->dbh->query('SELECT * from training where traininguserid= :userid');

		// $this->dbh->bind(':userid', $userid);
        // $record = $this->dbh->single();
		
		// return $record;
	}
	
	
}

?>