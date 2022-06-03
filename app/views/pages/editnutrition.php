<?php
class editnutrition extends view {
	public function output(){

    // $nutritionID=$this->model->getnutritionID();
    // $data['row']=$this->model->getRow($nutritionID);

    // header('Location: http://localhost/mvc/public/pages/editnutrition?nutritionID='.$_GET['nutritionID'] );

   $row=$this->model->getRow();
  // print_r($row);
 
  
	 require APPROOT.'/views/inc/header.php';
	 $action = URLROOT.'pages/editnutrition?nutritionID='.$row->nutritionID ;
   $text = <<<EOT
   <form action="$action" method="post">
   EOT;
   echo $text;
	 ?>
	<br><h2>Edit Nutrition Plan</h2>
	<hr>
  <label for="Date">Day Date:</label>
  <input type="date" class="m-wrap" name="date" value="<?= strftime('%Y-%m-%d', strtotime($row->date)); ?>">  
   <table class="table table-success table-striped">
  <thead>
  <th>Meal Type</th>
	  <th>Meal Name</th>
	   <th>Description</th>
	</thead>
  <tr>
  
<td><b>Breakfast</b></td>
 <td> <textarea  class="form-control"  name="bname" id="breakfast"  rows="4" cols="20"> <?php echo $row->breakfast; ?> </textarea></td>
 <td> <textarea  class="form-control" name="bd" id="bd"  rows="4" cols="20"><?php echo $row->bd; ?></textarea></td>
  </tr>
  <tr>
  
  <td><b>Lunch</b></td>
   <td> <textarea  class="form-control"  name="lname" id="lunch"  rows="4" cols="20"><?php echo $row->lunch; ?></textarea></td>
   <td> <textarea  class="form-control" name="ld" id="ld"  rows="4" cols="20"><?php echo $row->ld; ?></textarea></td>
    </tr>
    <tr>
  
  <td><b>Dinner</b></td>
   <td> <textarea  class="form-control"  name="dname" id="dinner" rows="4" cols="20"><?php echo $row->dinner; ?></textarea></td>
   <td> <textarea  class="form-control"  name="dd"  id="dd" rows="4" cols="20"><?php echo $row->dd; ?></textarea></td>
    </tr>
    

    <td style="display:none;"><input type="hidden"  name="userid" id="id"> <?php echo $row->userID; ?></td>
  </table>
  <input type="submit" value="Edit" class="btn btn-primary" >
  </html>



</form>

<?php

	require APPROOT.'/views/inc/footer.php';
	}
	
}

?>
