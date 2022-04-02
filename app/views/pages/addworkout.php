<?php
class addworkout extends view {
	public function output(){
	 require APPROOT.'/views/inc/header.php';
	
	 ?>
<form action="/action_page.php" enctype='multipart/form-data' >

	<br><h2>Add Workout Program</h2>
	<hr>
  <label for="Date">Day Date:</label>
  <input  class="form-control" type="date" id="TrainingDate" name="TrainingDate"><br>
  <input type="text"  class="form-control" placeholder="Training Name">
  <br>
  <input type="text"  class="form-control"placeholder="Muscle:"><br>
  <input type="text"  class="form-control"placeholder="Sets"><br>
  <input type="text" class="form-control" placeholder="Reps"><br>
  <input type="text"  class="form-control"placeholder="Rest Time"><br>
   <input type="text" class="form-control" placeholder="Add Embeded URL Youtube link :"  ><br>
  <input type="text" class="form-control" placeholder="Time"><br>
  <input type="submit" value="Add" class="btn btn-primary">
</form>

<?php
	require APPROOT.'/views/inc/footer.php';
	}
	
}

?>