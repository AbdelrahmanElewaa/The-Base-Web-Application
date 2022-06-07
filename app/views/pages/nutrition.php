
<?php
class nutrition extends view {
	public function output(){
		$nutrition = $this->model->ViewNutrition($_GET['id']);
	 require APPROOT.'/views/inc/header.php';
	
	 ?>
	 <br><h2>Nutrition Plan</h2>
	<hr>
	 <br>
 <a href="<?php echo URLROOT.'pages/addnutrition?id='.$_GET['id']; ?>" class="btn btn-success">Add Nutrition Plan</a>
 <?php if ($nutrition){
	 ?>
 <a href="<?php echo URLROOT.'pages/confirmDelete?id='.$_GET['id'].'&thing=deleteallnutrition' ?>" class="btn btn-danger">Delete Nutrition Plan</a>
 <?php
 }
 ?>
 <br>
<div>
 <table class="table table-success table-striped">
  <thead>
	  <th>Day Name</th>
  <th>Date</th>
	  <th>Breakfast</th>
	  <th>Breakfast Description</th>
	  <th>Lunch</th>
	  <th>Lunch Description</th>
	  <th>Dinner</th>
	  <th>Dinner Description</th>
	 <th></th>
	</thead>
	 <?php
	foreach($nutrition as $x){
	 ?>
	 <tr>
	 <td><?php echo date("D", strtotime($x->date));?></td>	 
	 <td><?php echo $x->date;?></td>
	 <td><?php echo $x->breakfast;?></td>
	 <td><?php echo $x->bd;?></td>
	 <td><?php echo $x->lunch;?></td>
	 <td><?php echo $x->ld;?></td>
	 <td><?php echo $x->dinner;?></td>
	 <td><?php echo $x->dd;?></td>
	 <td><a <?php echo "href='".URLROOT.'pages/editnut?id='.$x->nutritionID."'";?> class='btn btn-secondary'>Edit</a></td>
	<td><a <?php echo "href='".URLROOT.'pages/confirmDelete?id='.$x->nutritionID.'&userid='.$x->userID.'&thing=deletenutrition'."'";?> class='btn btn-danger'>Delete</a></td>
	</tr>
	 <?php
	}
	 ?>
</table>
	</div>
<?php
if(!$nutrition){
	echo "no records to show";
}
	require APPROOT.'/views/inc/footer.php';
	}
	
}
 