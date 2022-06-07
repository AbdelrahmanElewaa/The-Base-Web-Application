<?php

class deletenutrition extends view 
{


	public function output()
    {
    
        header("Location: ".URLROOT."/pages/nutrition?id=".$_GET['id'] );
    }

}

 ?>