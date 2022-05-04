
<?php
class workout extends view {
	public function output(){
		$workout = $this->model->ViewWorkout();
	 require APPROOT.'/views/inc/header.php';
	
	 ?>
	 <br><h2>Workout Program</h2>
	<hr>
	 <br>
 <a href="<?php echo URLROOT.'pages/addworkout'; ?>" class="btn btn-success">Add Workout Program</a>
<br>
<div>
 <table class="table table-danger table-striped">
  <thead>
  <th>Day</th>
  <th>Date</th>
	  <th>Excercise</th>
      <th>Sets</th>
      <th>Reps</th>
	  <th>Type of Resistance</th>
	  <th>Rest Time</th>
	</thead>


	<?php
	foreach($workout as $x){
	 ?>
	 <tr>
	 <td><?php echo date("D", strtotime($x->date));?></td>	 
	 <td><?php echo $x->date;?></td>
	 <td><?php echo $x->name;?></td>
	 <td><?php echo $x->sets;?></td>
	 <td><?php echo $x->reps;?></td>
	 <td><?php echo $x->weights;?></td>
	 <td><?php echo $x->resttime;?></td>
	 
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

 