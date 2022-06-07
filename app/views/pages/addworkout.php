<?php
class addworkout extends view {
	public function output(){
	 require APPROOT.'/views/inc/header.php';
   $action = URLROOT . 'pages/addworkout?id='.$_GET['id'];
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
     document.getElementById("v_dateErr").innerHTML="<?=$this->model->getdateErr()?>";
      document.getElementById("v_nameErr").innerHTML="<?=$this->model->getnameErr()?>";
      document.getElementById("v_setsErr").innerHTML="<?=$this->model->getsetsErr()?>";
      document.getElementById("v_repsErr").innerHTML="<?=$this->model->getrepsErr()?>";
      document.getElementById("v_weightsErr").innerHTML="<?=$this->model->getweightsErr()?>";
      document.getElementById("v_resttimeErr").innerHTML="<?=$this->model->getresttimeErr()?>";
      }; 
  </script>
	<br><h2>Add Workout Program</h2>
	<hr>
  <label for="Date">Day Date:</label>
  <input   class="form-control" type="date" id="TrainingDate" name="date"><br>
  <p id="v_dateErr"></p>
  <input type="text"  class="form-control" placeholder="Exercise"  name="name"><br>
  <p id="v_nameErr"></p>

  <input type="number"  class="form-control"placeholder="Sets"  name="sets"  min="1" max="100"><br>
  <p id="v_setsErr"></p>

  <input type="number" class="form-control" placeholder="Reps"  name="reps"  min="1" max="100"><br>
  <p id="v_repsErr"></p>

  <input type="text"  class="form-control"placeholder="Type of Resistance" name="weights"><br>
  <p id="v_weightsErr"></p>

   
  <input  type="text" class="form-control" placeholder="Rest Time" name="resttime"><br>
  <p id="v_resttimeErr"></p>

  <input  type="hidden" value="<?php echo $_GET['id'];?>"   name="userid"><br>
  <input  type="submit" value="Add" class="btn btn-primary" name="submit">
</form>
</html>

<?php
	require APPROOT.'/views/inc/footer.php';
	}
	
}



?>