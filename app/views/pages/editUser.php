<?php
$this->ID=$_GET['id'];
class editUser extends view
{
  public function output()
  {
      
    // $title = $this->model->title;

    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT
    
EOT;
    echo $text;
    $this->printForm();
    require APPROOT . '/views/inc/footer.php';
  }

  private function printForm()
  {
    $action = URLROOT . 'users/edituser';
    // $loginUrl = URLROOT . 'users/login';

    $text = <<<EOT
    <div class="row">
    <div class="col-md-6 mx-auto">
    <div class="card card-body bg-secondary mt-5">
    <h2>Sign Up</h2>
    <form action="$action" method="post">
EOT;
    echo $text;
    $this->printName();
    // $this->printlName();
    $this->printEmail();
    $this->printSocial();
    $this->printRole();
    $this->printPassword();
    $this->printConfirmPassword();
    $text = <<<EOT
    <div class="container">
      <div class="row mt-4">
        <div class="col">
          <input type="submit" value="Update" class="form-control btn btn-lg btn-primary btn-block">
        </div>
    
      </div>
      </div>
    </form>
    </div>
    </div>
    </div>
EOT;
    echo $text;
  }

  private function printName()
  {
    
    $val = $this->model->getName($this->model->getID());
    $err = $this->model->getNameErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'name', $val, $err, $valid);
  }
  private function printEmail()
  {
    $val = $this->model->getEmail($GLOBALS['id']);
    $err = $this->model->getEmailErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('email', 'email', $val, $err, $valid);
  }
  private function printSocial()
  {
    $val = $this->model->getSocial($GLOBALS['id']);
    $err = $this->model->getSocialErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'social', $val, $err, $valid);
  }
  private function printRole()
  {
    $val = $this->model->getRole($GLOBALS['id']);
    $err = $this->model->getRoleErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'role', $val, $err, $valid);
  }
  private function printPassword()
  {
    $val = $this->model->getPassword($GLOBALS['id']);
    $err = $this->model->getPasswordErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('password', 'password', $val, $err, $valid);
  }
  private function printConfirmPassword()
  {
    $val = $this->model->getConfirmPassword($GLOBALS['id']);
    $err = $this->model->getConfirmPasswordErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('password', 'confirm_password', $val, $err, $valid);
  }

  private function printInput($type, $fieldName, $val, $err, $valid)
  {
    $label = str_replace("_", " ", $fieldName);
    $label = ucwords($label);
    $text = <<<EOT
    <div class="form-group">
      <label for="$fieldName"> $label: <sup>*</sup></label>
      <input type="$type" name="$fieldName" class="form-control form-control-lg $valid" id="$fieldName" value="$val">
      <span class="invalid-feedback">$err</span>
    </div>
EOT;
    echo $text;
  }
}
