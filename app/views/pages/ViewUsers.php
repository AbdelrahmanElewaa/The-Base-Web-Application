

<?php
class ViewUsers extends View {
	public function output(){
		$users = $this->model->ViewUsers();
	// $users= $this->model->users;
	require APPROOT.'/views/inc/header.php';
	require VIEWS_PATH.'pages/usersearchj.php';
	
	$str="<table class='table table-dark' width=100%>
	
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Social</th>
				<th>Role</th>
				<th scope='col'>Workout Plan</th>
      <th scope='col'>Nutrition Plan</th>
      <th scope='col'>Modifcation</th>
				
			</tr>";

		
			foreach($users as $x){
				$str.="<tr><td>".$x->name."</td><td>".$x->email."</td><td>".$x->social."</td><td>".$x->role."</td>"." <td><a href='".URLROOT.'pages/workout?id='.$x->id."' class='btn btn-primary'>Workout</a></td>
				<td><a href='".URLROOT.'pages/nutrition?id='.$x->id."' class='btn btn-success'>Nutrition</a></td>
				<td> <a href='".URLROOT.'pages/edituser?id='.$x->id."' class='btn btn-secondary'>Edit</a> <a  href='".URLROOT.'pages/confirmDelete?id='.$x->id.'&thing=deleteclient'."' class='btn btn-danger'  >Delete</a> </td></tr>";
		 
			
			}
		//var_dump($Ent[0]->Name);	
$str.="</table>";
?>
 


 <br><br>
 <a class="btn btn-warning"  style="float:right;" href="<?php echo URLROOT . 'users/register'; ?>">Add Client</a>
 <body>
<?php


?>
  
<?php
    echo $str;
	// for($i=0;$i<2;$i++)
// print_r($users);
?>

<?php
	require APPROOT.'/views/inc/footer.php';
	}
	
}

?>
