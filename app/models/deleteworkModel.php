<?php
require_once 'WorkModel.php';
class deleteworkModel extends WorkModel
{
	
	
	public function deleteWork($id,$date,$userid)
	{
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
        unset($n[intval($id)]);
        unset($s[intval($id)]);
        unset($r[intval($id)]);
        unset($w[intval($id)]);
        unset($rs[intval($id)]);
        $x->name=implode("$",$n);
		$x->sets=implode("$",$s);
		$x->reps=implode("$",$r);
		$x->weights=implode("$",$w);
		$x->resttime=implode("$",$rs);
        $this->dbh->query('update training  set `name`=:name,`sets`=:sets, `reps`=:reps, `weights`=:weights, `resttime`=:resttime where `date`=:date and `traininguserid`=:userid' );
            $this->dbh->bind(':date', $date);
            $this->dbh->bind(':name', $x->name);
            $this->dbh->bind(':sets', $x->sets);
            $this->dbh->bind(':reps', $x->reps);
            $this->dbh->bind(':weights', $x->weights);
            $this->dbh->bind(':resttime', $x->resttime);
            $this->dbh->bind(':userid', $userid);
            // break;
        // }
            

           
             
            return $this->dbh->execute();


    }


		
	}
	
}

?>