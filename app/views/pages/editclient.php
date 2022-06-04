
<?php
class editclient extends view {
	public function output(){

   
   $row=$this->model->getRow();
//   print_r($row);
 
  
	 require APPROOT.'/views/inc/header.php';
     $action = URLROOT.'pages/editclient?id='.$row->id ;

   $text = <<<EOT
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Edit Infromation</title>
</head>
<body>
<main>
<div class="row">
<div class="col-md-4 mx-auto">
<div class="card card-body bg-secondary mt-7">
<div class="form-group">

<form action="$action" method="post">

EOT;
echo $text;
  ?>
        <h1>Edit Information</h1>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="name" id="name" value="<?= $row->name; ?>"  class="form-control form-control-lg">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" value="<?= $row->email; ?>" class="form-control form-control-lg">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" value="<?= $row->password; ?>" class="form-control form-control-lg">
        </div>
        <div class="form-group">
            <label for="password2">Password Again:</label>
            <input type="password" name="password2" id="password2" value="<?= $row->password; ?>" class="form-control form-control-lg">
        </div>

        <div class="form-group">
            <label for="social">Social:</label>
            <input type="text" name="social" id="social" value="<?= $row->social; ?>" class="form-control form-control-lg">
        </div>
        
       
        <button type="submit">Edit</button>

    </form>
    
</main>
</body>
</html>


</form>

<?php

	require APPROOT.'/views/inc/footer.php';
	}
	
}

?>