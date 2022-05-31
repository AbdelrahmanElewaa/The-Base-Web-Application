<?php
class confirmDelete extends view
{

  public function output()
  {
    $title = $this->model->title;
     

    require APPROOT . '/views/inc/header.php';
?>   
<div style="background-color:gray; margin-top:40px; width:700px; margin-left:250px;">
    <form action="/action_page.php">
    <div class="container">
      <h1 style="color: white;">Delete Account</h1>
      <p style="color: white;">Are you sure you want to delete your account?</p>
    
      <div class="clearfix">
      <a href="<?php echo URLROOT . 'pages/viewusers'; ?>" class="btn btn-light">Cancel</a>
        <?php echo "<a href='".URLROOT.'pages/nutrition?id='.$_GET['id']."' class='btn btn-danger'> Delete</a>";  ?>
		
      </div>
    </div>
  </form>
  </div>
 <?php
    require APPROOT . '/views/inc/footer.php';
  }
}
