
<?php
class workout extends view {
	public function output(){
		$workout = $this->model->ViewWorkout($_GET['id']);
	 require APPROOT.'/views/inc/header.php';
	
	 ?>
	 <br><h2>Workout Program</h2>
	<hr>
	 <br>
 <a href="<?php echo URLROOT.'pages/addworkout?id='.$_GET['id']; ?>" class="btn btn-success">Add Workout Program</a>
 <a href="<?php echo URLROOT.'pages/deleteworkout?id='.$_GET['id']; ?>" class="btn btn-danger">Delete Workout Plan</a>

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
	  <th>Modify</th>
	  <th>Delete</th>
	</thead>


	<?php
	foreach($workout as $x){
		$n=explode("$",$x->name);
		$s=explode("$",$x->sets);
		$r=explode("$",$x->reps);
		$w=explode("$",$x->weights);
		$rs=explode("$",$x->resttime);
	
	for($i=0;$i<count($n);$i++){
	 ?>
	 <tr>
	 <td><?php echo date("D", strtotime($x->date));?></td>	 
	 <td><?php echo $x->date;?></td>
	 <td><?php echo $n[$i];?></td>
	 <td><?php echo $s[$i];?></td>
	 <td><?php echo $r[$i];?></td>
	 <td><?php echo $w[$i];?></td>
	 <td><?php echo $rs[$i];?></td>
	 <td><a <?php echo "href='".URLROOT.'pages/editnut?id='.$x->trainingID."'";?> class='btn btn-secondary'>Edit</a></td>
	<td><a <?php echo "href='".URLROOT.'pages/deletenut?id='.$x->trainingID."'";?> class='btn btn-danger'>Delete</a></td>
	 
	</tr>
	 <?php
	}
}
	 ?>
	  
</table>
	</div>
<?php
	require APPROOT.'/views/inc/footer.php';
	}
	
}

 