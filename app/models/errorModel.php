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
    //  public $title = 'MIU SE305 Blog ' . APP_VERSION;
    //  public $subtitle = 'Example of MVC PHP framework for SE305';
}