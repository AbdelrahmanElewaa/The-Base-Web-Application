<?php
class addnutrition extends view {
	public function output(){
	 require APPROOT.'/views/inc/header.php';
	
	 ?>
<form action="/action_page.php">

	<br><h2>Nutrition Plan</h2>
	<hr>
  <label for="Date">Day Date:</label>
  <input  class="form-control" type="date" id="birthday" name="birthday"><br>
  <input type="text"  class="form-control" placeholder="Meal Name">
  <br>
  <input type="text"  class="form-control"placeholder="quantity"><br>
  <input type="text"  class="form-control"placeholder="Calories"><br>
  <input type="text" class="form-control" placeholder="Carbs"><br>
  <input type="text"  class="form-control"placeholder="Fats"><br>
  <input type="text" class="form-control" placeholder="protein"><br>
  <input type="text" class="form-control" placeholder="Time"><br>
  <input type="submit" value="Add" class="btn btn-primary">
</form>

<?php
	require APPROOT.'/views/inc/footer.php';
	}
	
}

?>