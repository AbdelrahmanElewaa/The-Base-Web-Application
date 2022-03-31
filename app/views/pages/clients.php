<?php
 class clients extends view{
     public function output()
     {
        require APPROOT . '/views/inc/header.php';
        
?>
<!-- <img src="<?php echo IMGROOT. 'logo.jpeg';?>" -->
<br><br>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Email</th>
      <th scope="col">Workout Plan</th>
      <th scope="col">Nutrition Plan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td><input type="submit" value="Workout"class="btn btn-danger" ></td>
      <td><a href="<?php echo URLROOT.'pages/nutrition'; ?>" class="btn btn-primary">Nutrition</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td><input type="submit" value="Workout" class="btn btn-danger" ></td>
      <td><a href="<?php echo URLROOT.'pages/nutrition'; ?>" class="btn btn-primary">Nutrition</a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td><input type="submit" value="Workout" class="btn btn-danger" ></td>
      <td><a href="<?php echo URLROOT.'pages/nutrition'; ?>" class="btn btn-primary">Nutrition</a></td>
    </tr>
  </tbody>
</table>

<?php
       // require APPROOT . '/views/inc/footer.php';
     }
 }
?>
 
