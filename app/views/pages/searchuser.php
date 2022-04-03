<?php
$connect = mysqli_connect("localhost", "root", "", "hiking");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM users 
  WHERE (name LIKE '%".$search."%'
  OR email LIKE '%".$search."%' 
  OR social LIKE '%".$search."%' 
  OR role LIKE '%".$search."%') 
 ";
}
else
{
 $query = "SELECT * FROM users";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '

  <div class="table-responsive">
   <table class="table table-bordered table-striped">
    <tr>
<th>Name</th>  
<th>Email</th>
<th>Social</th>
<th>Role</th>


    </tr>

';
 
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
  <tr>
            <td>' .$row['name'].'</td>
            <td>'.$row['email'].'</td>
            <td>'.$row['social'].'</td>
            <td>'.$row['role'].'</td>
            <td>'.$row['id'].'</td>


  </tr>
   
  ';

 }

 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>
</body>
</html>