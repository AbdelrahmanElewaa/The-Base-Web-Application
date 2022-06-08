<?php
class errorModel extends model
{
    protected $error;
    public function __construct()
    {
        $this->error    = '';   
    }

    public function geterror()
    {
        return $this->error;
    }
    public function seterror($e)
    {
        $this->error = $e;
    }
    
}