<?php
class editworkout extends view {
	public function output(){

    $row=$this->model->getRow();

	 require APPROOT.'/views/inc/header.php';
   $action = URLROOT . 'pages/editworkout?trainingID='.$row->trainingID;
   $text = <<<EOT
   <html>
   <head>
   <style>
       #v_dateErr{color: red;   font-size: 13px; padding: 1px 1px 1px 1px;}
       #v_nameErr{color: red;   font-size: 13px;padding: 1px 1px 1px 1px;}
       #v_setsErr{color: red;   font-size: 13px;padding: 1px 1px 1px 1px;}
       #v_repsErr{color: red;   font-size: 13px;padding: 1px 1px 1px 1px;}
       #v_weightsErr{color: red;   font-size: 13px;padding: 1px 1px 1px 1px;}
       #v_resttimeErr{color: red;   font-size: 13px;padding: 1px 1px 1px 1px;} 
     
</style>
      </head>
      <form action="$action" method="post">
EOT;
echo $text;
  
	 ?>
 

	<br><h2>Edit Workout Program</h2>
	<hr>
  <label for="Date">Day Date:</label>
  <input   class="form-control" type="date" id="TrainingDate" name="date" value="<?= strftime('%Y-%m-%d', strtotime($row->date)); ?>"><br>
  <p id="v_dateErr"></p>

  <label for="Name">Name:</label>
  <input type="text"  class="form-control" placeholder="Exercise"  name="name" value="<?= $row->name; ?>"><br>
  <p id="v_nameErr"></p>

  <label for="Sets">Sets:</label>
  <input type="number"  class="form-control"placeholder="Sets"  name="sets" value="<?= $row->sets; ?>" min="1" max="100"><br>
  <p id="v_setsErr"></p>

  <label for="Reps">Reps:</label>
  <input type="number" class="form-control" placeholder="Reps"  name="reps" value="<?= $row->reps; ?>" min="1" max="100"><br>
  <p id="v_repsErr"></p>

  <label for="Weights">Weights:</label>
  <input type="text"  class="form-control"placeholder="Type of Resistance" name="weights" value="<?= $row->weights; ?>"><br>
  <p id="v_weightsErr"></p>

  <label for="Rest Time">Rest Time:</label>
  <input  type="text" class="form-control" placeholder="Rest Time" name="resttime" value="<?= $row->resttime; ?>"><br>
  <p id="v_resttimeErr"></p>

  <input  type="submit" value="Edit" class="btn btn-primary" name="submit">
</form>
</html>

<?php
	require APPROOT.'/views/inc/footer.php';
	}
	
}

?>