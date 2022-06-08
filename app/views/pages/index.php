<?php
class Index extends View
{
  public function output()
  {
    $title = $this->model->title;
    $subtitle = $this->model->subtitle;
    $user_id = $_SESSION['user_id'];
    $user_name = $_SESSION['user_name'];
    if(isset($_SESSION['user_id']))
    {
      require APPROOT . '/views/inc/header.php';
      $text = <<<EOT
      
        <h1 class="display-4"> $title </h1>
        <h2 class="lead">$subtitle $user_name</h2>
   
        <hr class="my-4">
        
  EOT;
      echo $text;
      require APPROOT . '/views/inc/footer.php';
    }
    else{
      redirect('users/login');
    }
 

   
  }
}