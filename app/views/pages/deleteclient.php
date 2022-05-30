<?php
class deleteclient extends view {

  public function output()
  {
    $title = $this->model->title;

   // header("Location: http://localhost/mvc/public/pages/deleteclient?id=".$_GET['id'] );
    echo $_GET['id'];

    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT
    <!DOCTYPE html>
    <html style="font-size: 16px;">


        <div class="alert alert-danger text-center ">Deleted Success</div>
     
    </html>
EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}