<script>

</script>


<?php
class addnutrition extends view {
	public function output(){
	 require APPROOT.'/views/inc/header.php';
  //  $count=$this->model->countNut();
  //  $array = json_decode(json_encode($count), true);
  //  print_r($array['records']);

   if(isset($_GET['id']))
   {
	 $action = URLROOT . 'pages/addnutrition?id='.$_GET['id'];
   }
   $text = <<<EOT
   <form action="$action" method="post">
   EOT;
   echo $text;
	 ?>
<!-- <form action="/action_page.php"> -->
<!-- <form action="" method="post"> -->
  <html>
    <head>
      <style>
        #v_date{color:red;   font-size: 13px; }
        #v_bname{color:red;   font-size: 13px; }
        #v_bd{color:red;   font-size: 13px; }
        #v_lname{color:red;   font-size: 13px; }
        #v_ld{color:red;   font-size: 13px; }
        #v_dname{color:red;   font-size: 13px; }
        #v_dd{color:red;   font-size: 13px; }






      </style>
          <script>
        window.onload=function(){ document.getElementById("v_date").innerHTML="<?=$this->model->getdateErr()?>";
        document.getElementById("v_bname").innerHTML="<?=$this->model->getbnameErr()?>";
        document.getElementById("v_bd").innerHTML="<?=$this->model->getbdErr()?>";
        document.getElementById("v_lname").innerHTML="<?=$this->model->getlnameErr()?>";
        document.getElementById("v_ld").innerHTML="<?=$this->model->getldErr()?>";
        document.getElementById("v_dname").innerHTML="<?=$this->model->getdnameErr()?>";
        document.getElementById("v_dd").innerHTML="<?=$this->model->getddErr()?>";
        };


   
    </script>
    </head>

	<br><h2>Nutrition Plan</h2>
	<hr>
  <input  style="width:200px;" class="form-control" type="date" id="birthday" name="date" require><br>
  <p id="v_date"> </p><br>

  <table class="table table-success table-striped">
  <thead>
  <th>Meal Type</th>
	  <th>Meal Name</th>
	   <th>Description</th>
	</thead>
  <tr>
  
<td><b>Breakfast</b></td>
 <td> <textarea  class="form-control" placeholder="Meal Name" name="bname" rows="4" cols="20" ></textarea> <p id="v_bname"></p></td>
 <td> <textarea  class="form-control" placeholder="Meal Name" name="bd" rows="4" cols="20" > </textarea><p id="v_bd"></p></td>
  </tr>
  <tr>
  
  <td><b>Lunch</b></td>
   <td> <textarea  class="form-control" placeholder="Meal Name" name="lname" rows="4" cols="20" > </textarea><p id="v_lname"></p> </td>
   <td> <textarea  class="form-control" placeholder="Meal Name" name="ld" rows="4" cols="20" > </textarea><p id="v_ld"></p></td>
    </tr>
    <tr>
  
  <td><b>Dinner</b></td>
   <td> <textarea  class="form-control" placeholder="Meal Name" name="dname" rows="4" cols="20" ></textarea><p id="v_dname"> </p></td>
   <td> <textarea  class="form-control" placeholder="Meal Name" name="dd" rows="4" cols="20" > </textarea><p id="v_dd"></p></td>
    </tr>
    
<td style="display:none;"><input type="hidden" value="<?php echo $_GET['id'];?>" name="userid" ></td>
  </table>
  <input type="submit" value="Add" class="btn btn-primary" >
  </html>




<!--   
  <label for="Date">Day Date:</label>
 <br>
  
  <br>
  <input type="text"  class="form-control"placeholder="quantity" name="quantity"><br>
  <input type="text"  class="form-control"placeholder="Calories" name="calories"><br>
  <input type="text" class="form-control" placeholder="Carbs" name="carbs"><br>
  <input type="text"  class="form-control"placeholder="Fats" name="fats"><br>
  <input type="text" class="form-control" placeholder="protein" name="protein"><br>
  <input type="text" class="form-control" placeholder="Time" name="time"><br>
  <input type="submit" value="Add" class="btn btn-primary" > -->
</form>

<?php
// if(isset($_POST['addnutition']))
// {
//   $date=$_POST['date'];
//   $mealname=$_POST['mealName'];
//   $quantity=$_POST['quantity'];
//   $calories=$_POST['calories'];
//   $carbs=$_POST['carbs'];
//   $fats=$_POST['fats'];
//   $protein=$_POST['protein'];
//   $time=$_POST['time'];
//   $this->model->addNut($date,$mealname,$quantity,$calories,$carbs,$fats,$protein,$time);
// }
	require APPROOT.'/views/inc/footer.php';
	}
	
}

?>
