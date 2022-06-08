<?php
class confirmDelete extends view
{

  public function output()
  {
    $model = $this->model;
    $thing=$_GET['thing'];
    if(str_contains($thing,"client")){
$h1="Delete client account";
$p="Are you sure you want to delete client's account?";
$actioncancel='pages/viewusers';
$actiondelete="pages/deleteclient?id=".$_GET['id'];
    }
    else if(str_contains($thing,"nutrition")){
      if(str_contains($thing,"all")){
        $h1="Delete client's all nutrition program";
      $p="Are you sure you want to delete client's all nutrtion program?";
      $actioncancel="/pages/nutrition?id=".$_GET['id'];
      $actiondelete='pages/deletenutrition?id='.$_GET['id'];
      }
      else{
        $h1="Delete client's single nutrition day";
        $p="Are you sure you want to delete client's single nutrtion day?";
        $actioncancel="/pages/nutrition?id=".$_GET['userid'];
        $actiondelete='pages/deletenut?id='.$_GET['id'].'&userid='.$_GET['userid'];
      }
     
      
          }
 else if(str_contains($thing,"workout")){
  if(str_contains($thing,"all")){
    $h1="Delete client's all workout program";
  $p="Are you sure you want to delete client's all workout program?";
  $actioncancel="/pages/workout?id=".$_GET['id'];
  $actiondelete='pages/deleteworkout?id='.$_GET['id'];
  }
  else{
    $h1="Delete client's single workout";
    $p="Are you sure you want to delete client's single workout?";
    $actioncancel="/pages/workout?id=".$_GET['userid'];
    $actiondelete='pages/deletework?id='.$_GET['id'].'&userid='.$_GET['userid'].'&date='.$_GET['date'];
      }
    }
    else{
      redirect("pages/error?error=urlerror");
    }
     

    require APPROOT . '/views/inc/header.php';
?>   
<div style="background-color:gray; margin-top:40px; width:700px; margin-left:250px;">
    <form action="/action_page.php">
    <div class="container">
      <h1 style="color: white;"><?php echo $h1 ?> </h1>
      <p style="color: white;"><?php echo $p ?></p>
    
      <div class="clearfix">
      <a href="<?php echo URLROOT .$actioncancel ?>" class="btn btn-light">Cancel</a>
      <a href="<?php echo URLROOT .$actiondelete ?>" class="btn btn-danger">Delete</a>
        
		
      </div>
    </div>
  </form>
  </div>
 <?php
    require APPROOT . '/views/inc/footer.php';
  }
}
