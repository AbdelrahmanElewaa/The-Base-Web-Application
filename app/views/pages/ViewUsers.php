<?php
class ViewUsers extends View {
	public function output(){
		$users = $this->model->ViewUsers();
	// $users= $this->model->users;
	require APPROOT.'/views/inc/header.php';
	
	$text = "
	<div class='jumbotron jumbotron-fluid'>
	<div class='container' style='background-color: white'>
		<h1 class='display-4' > ".
	
			" "
		."</h1>
	</div>
	</div>";
	echo $text;
	// for($i=0;$i<2;$i++)
print_r($users);
	require APPROOT.'/views/inc/footer.php';
	}
	
}

?>