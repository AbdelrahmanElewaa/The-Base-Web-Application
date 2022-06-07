<?php

class deleteworkout extends view 
{


	public function output()
    {
    
        header("Location: http://localhost/mvc/public/pages/workout?id=".$_GET['id'] );
    }

}

 ?>