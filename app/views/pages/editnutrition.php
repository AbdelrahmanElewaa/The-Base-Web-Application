<?php
class editnutrition extends view {
	public function output(){

    // $nutritionID=$this->model->getnutritionID();
    // $data['row']=$this->model->getRow($nutritionID);

    // header('Location: http://localhost/mvc/public/pages/editnutrition?nutritionID='.$_GET['nutritionID'] );

   $row=$this->model->getRow();
  print_r($row);
  //for($i=0 ; $i<count($row) ; $i++){
    print_r( $row->nutritionID);
  //}
	 require APPROOT.'/views/inc/header.php';
	 $action = URLROOT . 'pages/editnutrition/';
   $text = <<<EOT
   <form action="$action" method="post">
   EOT;
   echo $text;
	 ?>
	<br><h2>Nutrition Plan</h2>
	<hr>
  <label for="Date">Day Date:</label>
  <input type="date" class="m-wrap" value="<?php echo strftime('%Y-%m-%d',
  strtotime($row->date)); ?>" name="date" /> 
   <table class="table table-success table-striped">
  <thead>
  <th>Meal Type</th>
	  <th>Meal Name</th>
	   <th>Description</th>
	</thead>
  <tr>
  
<td><b>Breakfast</b></td>
 <td> <textarea  class="form-control"  name="bname" rows="4" cols="20"> <?php echo $row->breakfast; ?> </textarea></td>
 <td> <textarea  class="form-control" name="bd"  rows="4" cols="20"><?php echo $row->bd; ?></textarea></td>
  </tr>
  <tr>
  
  <td><b>Lunch</b></td>
   <td> <textarea  class="form-control"  name="lname" rows="4" cols="20"><?php echo $row->lunch; ?></textarea></td>
   <td> <textarea  class="form-control" name="ld" rows="4" cols="20"><?php echo $row->ld; ?></textarea></td>
    </tr>
    <tr>
  
  <td><b>Dinner</b></td>
   <td> <textarea  class="form-control"  name="dname" rows="4" cols="20"><?php echo $row->dinner; ?></textarea></td>
   <td> <textarea  class="form-control"  name="dd" rows="4" cols="20"><?php echo $row->dd; ?></textarea></td>
    </tr>
    

  </table>
  <input type="submit" value="Edit" class="btn btn-primary" >



</form>

<?php

	require APPROOT.'/views/inc/footer.php';
	}
	
}

?>