<?php
class Usersearch extends view
{

  public function output()
  {
   
    if(isset($_POST["query"]))
{
  $connect = mysqli_connect("localhost", "root", "", "base");
  $search = mysqli_real_escape_string($connect,$_POST['query']);

  $query = "
    SELECT * FROM users 
    WHERE (name LIKE '%".$search."%'
    OR email LIKE '%".$search."%' 
    OR social LIKE '%".$search."%' 
    OR role LIKE '%".$search."%') 
   ";
   $result = mysqli_query($connect, $query);
  if($result){
  
  
    $t=<<<EOT
  <div class="table-responsive">
   <table class="table table-dark">
    <tr>
<th>Name</th>  
<th>Email</th>
<th>Social</th>
<th>Role</th>
<th scope='col'>Workout Plan</th>
      <th scope='col'>Nutrition Plan</th>
      <th scope='col'>Modifcation</th>


    </tr>
EOT;
echo $t;


   $output='';
    while($row = mysqli_fetch_array($result))
 {
  $output .= '
  <tr>
            <td>' .$row['name'].'</td>
            <td>'.$row['email'].'</td>
            <td>'.$row['social'].'</td>
            <td>'.$row['role'].'</td>
            <td><a href="'.URLROOT.'pages/workout?id='.$row['id'].'" class="btn btn-primary">Workout</a></td>
            <td><a href="'.URLROOT.'pages/nutrition?id='.$row['id'].'" class="btn btn-success">Nutrition</a></td>
            <td>
            <a href="'.URLROOT.'pages/confirmDelete?id='.$row['id'].'".&thing=deleteclient" class="btn btn-danger">Delete</a></td>
				
            
         


  </tr>
   
  ';

 }
//  <td><a href="'.URLROOT.'pages/edituser?id='.$row['id'].'" class="btn btn-secondary">Edit</a>
 echo $output;
}
}
else
{
 echo 'Data Not Found';
}
   
   
    require APPROOT . '/views/inc/footer.php';
  }

}
