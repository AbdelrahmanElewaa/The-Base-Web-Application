<?php

class deleteworkout extends view 
{


	public function output()
    {
    
        header("Location: ".URLROOT."/pages/workout?id=".$_GET['id'] );
    }

}

 ?>