<?php
class editUser extends Controller
{

    public function ent()
    {
        $viewPath = VIEWS_PATH . 'pages/edituser.php';
        require_once $viewPath;
        $indexView = new Ent($this->getModel(), $this);
        $indexView->output();
    }
	
	 public function edit()
    {
        $registerModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'GET') { 
            // Process form
            $registerModel->SetID(trim($_GET['id']));
            // $registerModel->setYear(trim($_POST['Year']));
            // $registerModel->setType(trim($_POST['Type']));          
$registerModel->edit();
                    redirect('pages/edituser');

        }
        // Load form
        //echo 'Load form, Request method: ' . $_SERVER['REQUEST_METHOD'];
        $viewPath = VIEWS_PATH . 'pages/edituser.php';
        require_once $viewPath;
        $view = new Add($this->getModel(), $this);
        $view->output();
    }
   }