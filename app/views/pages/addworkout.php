<?php
class addworkout extends view {
	public function output(){
	 require APPROOT.'/views/inc/header.php';
   $action = URLROOT . 'pages/addworkout';
   $text = <<<EOT
   <form action="$action" method="post">
   EOT;
   echo $text;
  
	 ?>
 

	<br><h2>Add Workout Program</h2>
	<hr>
  <label for="Date">Day Date:</label>
  <input  class="form-control" type="date" id="TrainingDate" name="date"><br>
  <input type="text"  class="form-control" placeholder="Exercise"  name="name">
  <br>
  <input type="text"  class="form-control"placeholder="Sets"  name="sets"><br>
  <input type="text" class="form-control" placeholder="Reps"  name="reps" ><br>
  <input type="text"  class="form-control"placeholder="Type of Resistance" name="weights"><br>
   
  <input type="text" class="form-control" placeholder="Rest Time" name="resttime">
  <input type="hidden" value="1"  name="userid"><br>
  <input type="submit" value="Add" class="btn btn-primary" name="submit">
</form>

<?php
	require APPROOT.'/views/inc/footer.php';
	}
	
}

?>