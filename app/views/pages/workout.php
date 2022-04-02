
<?php
class workout extends view {
	public function output(){
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
  <th>Training Date</th>
	  <th>Training Name</th>
	  <th>Muscle</th>
      <th>Sets</th>
      <th>Reps</th>
	  <th>Weights</th>
	  <th>Rest Time</th>
	  <th>Video</th>
	</thead>
	<td>30/1/2021</td>
	<td>Bensh Press</td>
	<td>Bench</td>
	<td>4 </td>
	<td>15 </td>
	<td>15 kilo</td>
	<td>1 minute</td>
	<td>hhhhhhhhh</td>
	 
</table>
	</div>
<?php
	require APPROOT.'/views/inc/footer.php';
	}
	
}

 