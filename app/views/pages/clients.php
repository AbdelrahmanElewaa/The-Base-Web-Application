<?php
 class clients extends view{
     public function output()
     {
        require APPROOT . '/views/inc/header.php';
        
?>
<!-- <img src="<?php echo IMGROOT. 'logo.jpeg';?>" -->
<br><br>
 <a class="btn btn-warning"  style="float:right;" href="<?php echo URLROOT . 'users/register'; ?>">Add Client</a>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Social</th>
      <th scope="col">Workout Plan</th>
      <th scope="col">Nutrition Plan</th>
      <th scope="col">Modifcation</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>ahmed@fat.com</td>
      <td>1234</td>
      
      <td>twitter</td>
      <td><a href="<?php echo URLROOT.'pages/workout'; ?>" class="btn btn-primary">Workout</a></td>
      <td><a href="<?php echo URLROOT.'pages/nutrition'; ?>" class="btn btn-success">Nutrition</a></td>
      <td> <a href="#" class="btn btn-secondary">Edit</a> <a href="#" class="btn btn-danger">Delete</a> </td>

    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>jacob@gmail.com</td>
      <td>3333</td>
      <td>Facebook</td>

      <td><a href="<?php echo URLROOT.'pages/workout'; ?>" class="btn btn-primary">Workout </a></td>
      <td><a href="<?php echo URLROOT.'pages/nutrition'; ?>" class="btn btn-success">Nutrition</a></td>
      <td> <a href="#" class="btn btn-secondary">Edit</a> <a href="#" class="btn btn-danger">Delete</a> </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>larry@gmail.com</td>
      <td>4444</td>
      
      <td>@twitter</td>
      <td><a href="<?php echo URLROOT.'pages/workout'; ?>" class="btn btn-primary">Workout</a></td>
      <td><a href="<?php echo URLROOT.'pages/nutrition'; ?>" class="btn btn-success">Nutrition</a></td>
      <td> <a href="#" class="btn btn-secondary">Edit</a> <a href="#" class="btn btn-danger">Delete</a> </td>
    </tr>
  </tbody>
</table>

<?php
       require APPROOT . '/views/inc/footer.php';
     }
 }
?>
 
