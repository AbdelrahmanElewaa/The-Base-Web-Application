<?php
class ViewUsers extends View {
	public function output(){
		$users = $this->model->ViewUsers();
	// $users= $this->model->users;
	require APPROOT.'/views/inc/header.php';
	
	$str="<table class='table table-dark' width=100%>
	
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Social</th>
				<th>Role</th>
				
			</tr>";
			foreach($users as $x){
				$str.="<tr><td>".$x->name."</td><td>".$x->email."</td><td>".$x->social."</td><td>".$x->role."</td>"?> <td><a href="<?php echo URLROOT.'pages/workout'; ?>" class="btn btn-primary">Workout</a></td>
				<td><a href="<?php echo URLROOT.'pages/nutrition'; ?>" class="btn btn-success">Nutrition</a></td>
				<td> <a href="#" class="btn btn-secondary">Edit</a> <a href="" class="btn btn-danger">Delete</a> </td></tr><?php
		  }
		//var_dump($Ent[0]->Name);	
$str.="</table>";
    echo $str;
	// for($i=0;$i<2;$i++)
// print_r($users);
	require APPROOT.'/views/inc/footer.php';
	}
	
}

?>