<?php
class confirmDeleteModel extends model
{
	
	public $title = 'Delete Confrimation';
	protected $h1;
	protected $p;
	protected $actioncancel;
	protected $actiondelete;

	public function __construct()
    {
        parent::__construct();
        $this->h1   = '';
        $this->p= '';

        $this->actioncancel  = '';
        $this->actiondelete = '';
        
    }


	public function geth1()
    {
        return $this->h1;
    }
    public function seth1($d)
    {
        $this->h1 = $d;
    }


    public function getp()
    {
        return $this->p;
    }
    public function setp($n)
    {
        $this->p = $n;
    }


    public function getactioncancel()
    {
        return $this->actioncancel;
    }
    public function setactioncancel($s)
    {
        $this->setactioncancel = $s;
    }

    public function getactiondelete()
    {
        return $this->actiondelete;
    }
    public function setactiondelete($r)
    {
        $this->actiondelete= $r;
    }

	
	
}

?>