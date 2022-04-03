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
  
  // $usersearch = $this->model->SearchUsers($connect,$_POST['query']);
  // if($usersearch){

    $t=<<<EOT
  <div class="table-responsive">
   <table class="table table-dark">
    <tr>
<th>Name</th>  
<th>Email</th>
<th>Social</th>
<th>Role</th>


    </tr>
EOT;
echo $t;
// $str='';
// foreach($usersearch as $x){
//   $str.="<tr><td>".$x->name."</td><td>".$x->email."</td><td>".$x->social."</td><td>".$x->role."</td></tr>";
// }
// $str.="</table>";
// echo $str;
// }
//   else{
//   echo"data not found";
// }
    // require APPROOT . '/views/inc/header.php';
    // $connect = mysqli_connect("localhost", "root", "", "base");


   $output='';
    while($row = mysqli_fetch_array($result))
 {
  $output .= '
  <tr>
            <td>' .$row['name'].'</td>
            <td>'.$row['email'].'</td>
            <td>'.$row['social'].'</td>
            <td>'.$row['role'].'</td>
         


  </tr>
   
  ';

 }

 echo $output;
}
}
else
{
 echo 'Data Not Found';
}
   
   
    require APPROOT . '/views/inc/footer.php';
  }
// }
}
