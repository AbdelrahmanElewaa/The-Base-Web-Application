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
  <input  style="width:200px;" class="form-control" type="date" id="birthday" name="date"><br>
  <table class="table table-success table-striped">
  <thead>
  <th>Meal Type</th>
	  <th>Meal Name</th>
	   <th>Description</th>
	</thead>
  <tr>
  
<td><b>Breakfast</b></td>
 <td> <textarea  class="form-control" placeholder="Meal Name" name="bname" rows="4" cols="20"></textarea></td>
 <td> <textarea  class="form-control" placeholder="Meal Name" name="bd" rows="4" cols="20"></textarea></td>
  </tr>
  <tr>
  
  <td><b>Lunch</b></td>
   <td> <textarea  class="form-control" placeholder="Meal Name" name="lname" rows="4" cols="20"></textarea></td>
   <td> <textarea  class="form-control" placeholder="Meal Name" name="ld" rows="4" cols="20"></textarea></td>
    </tr>
    <tr>
  
  <td><b>Dinner</b></td>
   <td> <textarea  class="form-control" placeholder="Meal Name" name="dname" rows="4" cols="20"></textarea></td>
   <td> <textarea  class="form-control" placeholder="Meal Name" name="dd" rows="4" cols="20"></textarea></td>
    </tr>
    

  </table>
  <input type="submit" value="Add" class="btn btn-primary" >




<!--   
  <label for="Date">Day Date:</label>
 <br>
  
  <br>
  <input type="text"  class="form-control"placeholder="quantity" name="quantity"><br>
  <input type="text"  class="form-control"placeholder="Calories" name="calories"><br>
  <input type="text" class="form-control" placeholder="Carbs" name="carbs"><br>
  <input type="text"  class="form-control"placeholder="Fats" name="fats"><br>
  <input type="text" class="form-control" placeholder="protein" name="protein"><br>
  <input type="text" class="form-control" placeholder="Time" name="time"><br>
  <input type="submit" value="Add" class="btn btn-primary" > -->
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