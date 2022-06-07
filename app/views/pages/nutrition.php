
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
 <a href="<?php echo URLROOT.'pages/deletenutrition?id='.$_GET['id']; ?>" class="btn btn-danger">Delete Nutrition Plan</a>

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
	 <td><a <?php echo "href='".URLROOT.'pages/editnutrition?id='.$x->nutritionID."'";?> class='btn btn-secondary'>Edit</a></td>
	</tr>
	 <?php
	}
	 ?>
</table>
	</div>
<?php
	require APPROOT.'/views/inc/footer.php';
	}
	
}
 