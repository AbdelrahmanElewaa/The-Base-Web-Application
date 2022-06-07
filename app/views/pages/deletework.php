<?php

class deletework extends view 
{


	public function output()
    {
    
        header("Location: ".URLROOT."/pages/workout?id=".$_GET['userid'] );
    }

}

 ?>