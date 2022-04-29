<?php
class addnutrition extends view {
	public function output(){
	 require APPROOT.'/views/inc/header.php';
	 $action = URLROOT . 'pages/addnutrition';
   $text = <<<EOT
   <form action="$action" method="post">
   EOT;
   echo $text;
	 ?>
<!-- <form action="/action_page.php"> -->
<!-- <form action="" method="post"> -->
	<br><h2>Nutrition Plan</h2>
	<hr>
  <label for="Date">Day Date:</label>
  <input  class="form-control" type="date" id="birthday" name="date"><br>
  <input type="text"  class="form-control" placeholder="Meal Name" name="mealname">
  <br>
  <input type="text"  class="form-control"placeholder="quantity" name="quantity"><br>
  <input type="text"  class="form-control"placeholder="Calories" name="calories"><br>
  <input type="text" class="form-control" placeholder="Carbs" name="carbs"><br>
  <input type="text"  class="form-control"placeholder="Fats" name="fats"><br>
  <input type="text" class="form-control" placeholder="protein" name="protein"><br>
  <input type="text" class="form-control" placeholder="Time" name="time"><br>
  <input type="submit" value="Add" class="btn btn-primary" >
</form>

<?php
// if(isset($_POST['addnutition']))
// {
//   $date=$_POST['date'];
//   $mealname=$_POST['mealName'];
//   $quantity=$_POST['quantity'];
//   $calories=$_POST['calories'];
//   $carbs=$_POST['carbs'];
//   $fats=$_POST['fats'];
//   $protein=$_POST['protein'];
//   $time=$_POST['time'];
//   $this->model->addNut($date,$mealname,$quantity,$calories,$carbs,$fats,$protein,$time);
// }
	require APPROOT.'/views/inc/footer.php';
	}
	
}

?>