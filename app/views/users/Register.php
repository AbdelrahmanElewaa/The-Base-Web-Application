<?php
class Register extends view
{
  public function output()
  {
    $title = $this->model->title;

    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT
    
EOT;
    echo $text;
    $this->printForm();
    require APPROOT . '/views/inc/footer.php';
  }

  private function printForm()
  {
    $action = URLROOT . 'users/register';
    $loginUrl = URLROOT . 'users/login';

    $text = <<<EOT
    <div class="row">
    <div class="col-md-6 mx-auto">
    <div class="card card-body bg-secondary mt-5">
    <h2>Add client</h2>
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
          <input type="submit" value="Add" class="form-control btn btn-lg btn-primary btn-block">
        </div>
        


      </div>
      </div>
    </form>
    </div>
    </div>
    </div>
EOT;
// <div class="col">
//           <a href="$loginUrl" class="form-control btn btn-success btn-block">Current user, login here</a>
//         </div>
    echo $text;
  }

  private function printName()
  {
    $val = $this->model->getName();
    $err = $this->model->getNameErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'name', $val, $err, $valid,'name');
  }
  private function printEmail()
  {
    $val = $this->model->getEmail();
    $err = $this->model->getEmailErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('email', 'email', $val, $err, $valid,'email');
  }
  private function printSocial()
  {
    $val = $this->model->getSocial();
    $err = $this->model->getSocialErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'social', $val, $err, $valid,'social');
  }
  private function printRole()
  {
    $val ="client";
    $err = $this->model->getRoleErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('hidden', 'role', $val, $err, $valid,'');
  }
  private function printPassword()
  {
    $val = $this->model->getPassword();
    $err = $this->model->getPasswordErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('password', 'password', $val, $err, $valid,'password');
  }
  private function printConfirmPassword()
  {
    $val = $this->model->getConfirmPassword();
    $err = $this->model->getConfirmPasswordErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('password', 'confirm_password', $val, $err, $valid,'confirm password');
  }

  private function printInput($type, $fieldName, $val, $err, $valid,$label)
  {
    $label = str_replace("_", " ", $label);
    $label = ucwords($label);
    $text = <<<EOT
    <div class="form-group">
      <label for="$fieldName"> $label<sup></sup></label>
      <input type="$type" name="$fieldName" class="form-control form-control-lg $valid" id="$fieldName" value="$val">
      <span class="invalid-feedback">$err</span>
    </div>
EOT;
    echo $text;
  }
}
