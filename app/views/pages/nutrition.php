
<?php
class nutrition extends view {
	public function output(){
	 require APPROOT.'/views/inc/header.php';
	
	 ?>
	 <br><h2>Nutrition Plan</h2>
	<hr>
	 <br>
 <a href="<?php echo URLROOT.'pages/addnutrition'; ?>" class="btn btn-success">Add Nutrition Plan</a>
<br>
<div>
 <table class="table table-success table-striped">
  <thead>
  <th>Date</th>
	  <th>Meal Name</th>
	  <th>Quantity</th>
	  <th>Calories</th>
	  <th>Carbs</th>
	  <th>Fats</th>
	  <th>Protein</th>
	  <th>Time</th>
	</thead>
	<td>30/1/2021</td>
	<td>Salad</td>
	<td>400 grams</td>
	<td>300 cal</td>
	<td>100</td>
	<td>50</td>
	<td>30</td>
	<td>BreakFast</td>
	 
</table>
	</div>
<?php
	require APPROOT.'/views/inc/footer.php';
	}
	
}

 