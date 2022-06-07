<?php
class editwork extends view {
	public function output(){
	 require APPROOT.'/views/inc/header.php';
   $action = URLROOT . 'pages/editwork?id='.$_GET['id'].'&userid='.$_GET['userid'].'&date='.$_GET['date'];
   $workout = $this->model->ViewWorkout($_GET['id'],$_GET['userid'],$_GET['date']);
   $text = <<<EOT
   <html>
   <head>
   <style>
       #v_dateErr{color: red;   font-size: 13px; padding: 1px 1px 1px 1px;}
       #v_nameErr{color: red;   font-size: 13px;padding: 1px 1px 1px 1px;}
       #v_setsErr{color: red;   font-size: 13px;padding: 1px 1px 1px 1px;}
       #v_repsErr{color: red;   font-size: 13px;padding: 1px 1px 1px 1px;}
       #v_weightsErr{color: red;   font-size: 13px;padding: 1px 1px 1px 1px;}
       #v_resttimeErr{color: red;   font-size: 13px;padding: 1px 1px 1px 1px;} 
     

</style>

      </head>
      <form action="$action" method="post">
EOT;
echo $text;
  
	 ?>
 
 <script>
      window.onload=function(){
    //  document.getElementById("v_dateErr").innerHTML="<?=$this->model->getdateErr()?>";
      document.getElementById("v_nameErr").innerHTML="<?=$this->model->getnameErr()?>";
      document.getElementById("v_setsErr").innerHTML="<?=$this->model->getsetsErr()?>";
      document.getElementById("v_repsErr").innerHTML="<?=$this->model->getrepsErr()?>";
      document.getElementById("v_weightsErr").innerHTML="<?=$this->model->getweightsErr()?>";
      document.getElementById("v_resttimeErr").innerHTML="<?=$this->model->getresttimeErr()?>";
      }; 
  </script>
	<br><h2>Add Workout Program</h2>
	<hr>
  <!-- <label for="Date">Day Date:</label> -->
  <!-- <input   class="form-control" type="date" id="TrainingDate" name="date"><br> -->
  <!-- <p id="v_dateErr"></p> -->
  <input type="text"  class="form-control" placeholder="Exercise"  value ="<?php echo $workout->name; ?>" name="name"><br>
  <p id="v_nameErr"></p>

  <input type="number"  class="form-control"placeholder="Sets" value ="<?php echo $workout->sets; ?>" name="sets"  min="1" max="100"><br>
  <p id="v_setsErr"></p>

  <input type="number" class="form-control" placeholder="Reps" value ="<?php echo $workout->reps; ?>" name="reps"  min="1" max="100"><br>
  <p id="v_repsErr"></p>

  <input type="text"  class="form-control"placeholder="Type of Resistance" value ="<?php echo $workout->weights; ?>" name="weights"><br>
  <p id="v_weightsErr"></p>

   
  <input  type="text" class="form-control" placeholder="Rest Time" value ="<?php echo $workout->resttime; ?>" name="resttime"><br>
  <p id="v_resttimeErr"></p>

  <input  type="hidden" value="<?php echo $_GET['id'];?>"   name="userid"><br>
  <input  type="submit" value="Edit" class="btn btn-primary" name="submit">
</form>
</html>

<?php
	require APPROOT.'/views/inc/footer.php';
	}
	
}



?>