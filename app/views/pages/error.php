<!-- <script src="<?php echo URLROOT; ?>js/error.js"></script> -->
  <link rel="stylesheet" href="<?php echo URLROOT; ?>css/error.css">
<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(-1);
class errorr extends View
{
  public function output()
  {
    // $title = $this->model->title;
    // $subtitle = $this->model->subtitle;

   $error= $_GET['error'];
    // require APPROOT . '/views/inc/header.php';
    $text = <<<EOT
    <h5>
EOT;
    if (!$error)
    $error="Oops! An error occurred";
    $text.=$error;
    $text.= <<<EOT
    </h5>
    
    <h1>5</h1>
  
    <div class="box">
			<span></span><span></span>
			<span></span><span></span>
			<span></span>
		</div>
    <div class="box">
			<span></span><span></span>
			<span></span><span></span>
			<span></span>
		</div>
    <p> We're unable to find out what's happening! We suggest you to
			<br/>
			<a href="
EOT;
// href=\"javascript:history.go(-1)\"
// URLROOT.'pages/viewusers'
            $text.= "javascript:history.go(-1)";
            $text.=<<<EOT
            ">Go Back</a>
			or visit here later.</p>
EOT;
    echo $text;
    // require APPROOT . '/views/inc/footer.php';
  }
}