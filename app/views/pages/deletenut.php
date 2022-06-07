<?php

class deletenut extends view 
{


	public function output()
    {
    
        header("Location: ".URLROOT."/pages/nutrition?id=".$_GET['userid'] );
    }

}

 ?>