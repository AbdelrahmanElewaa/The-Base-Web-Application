<?php

class deletenutrition extends view 
{


	public function output()
    {
    
        header("Location: http://localhost/mvc/public/pages/nutrition?id=".$_GET['id'] );
    }

}

 ?>