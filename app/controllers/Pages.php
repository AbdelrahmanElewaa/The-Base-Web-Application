<?php
class Pages extends Controller
{

    public function index()
    {
        $viewPath = VIEWS_PATH . 'pages/Index.php';
        require_once $viewPath;
        $indexView = new Index($this->getModel(), $this);
        $indexView->output();
    }

    public function about()
    {
        $viewPath = VIEWS_PATH . 'pages/About.php';
        require_once $viewPath;
        $aboutView = new About($this->getModel(), $this);
        $aboutView->output();
    }
	
	    public function contact()
    {
        $viewPath = VIEWS_PATH . 'pages/contact.php';
        require_once $viewPath;
        $contactView = new Contact($this->getModel(), $this);
        $contactView->output();
    }
    public function clients()
    {
        $viewPath = VIEWS_PATH . 'pages/clients.php';
        require_once $viewPath;
        $aboutView = new clients($this->getModel(), $this);
        $aboutView->output();
    }
    public function nutrition()
    {
        $viewPath = VIEWS_PATH . 'pages/nutrition.php';
        require_once $viewPath;
        $aboutView = new nutrition($this->getModel(), $this);
        $aboutView->output();
    }

    public function addnutrition()
    {
        $addnutritionModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            $addnutritionModel->setdate(trim($_POST['date']));
            // $registerModel->setName(trim($_POST['lastname']));
            $addnutritionModel->setbname(trim($_POST['bname']));
            $addnutritionModel->setbd(trim($_POST['bd']));
            $addnutritionModel->setlname(trim($_POST['lname']));
            $addnutritionModel->setld(trim($_POST['ld']));
            $addnutritionModel->setdname(trim($_POST['dname']));
            $addnutritionModel->setdd(trim($_POST['dd']));
            $addnutritionModel->setuserid(trim($_POST['userid']));




            if ($addnutritionModel->addNut()) {
                //header('location: ' . URLROOT . 'users/login');
                flash('register_success', 'nutrition plan is added successfully');
                redirect('pages/addnutrition');
            } else {
                die('Error in adding nutrition');
            }
        }
        $viewPath = VIEWS_PATH . 'pages/addnutrition.php';
        require_once $viewPath;
        $aboutView = new addnutrition($this->getModel(), $this);
        $aboutView->output();
    }

    public function workout()
    {
        $viewPath = VIEWS_PATH . 'pages/workout.php';
        require_once $viewPath;
        $aboutView = new workout($this->getModel(), $this);
        $aboutView->output();
    }

    public function addworkout()
    {
        $addworkoutModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            $addworkoutModel->setdate(trim($_POST['date']));
            // $registerModel->setName(trim($_POST['lastname']));
            $addworkoutModel->setname(trim($_POST['name']));
            $addworkoutModel->setsets(trim($_POST['sets']));
            $addworkoutModel->setreps(trim($_POST['reps']));
            $addworkoutModel->setweights(trim($_POST['weights']));
            $addworkoutModel->setresttime(trim($_POST['resttime']));
            $addworkoutModel->setuserid(trim($_POST['userid']));
             




            if ($addworkoutModel->addWork()) {
                //header('location: ' . URLROOT . 'users/login');
                flash('register_success', 'workout plan is added successfully');
                redirect('pages/addworkout');
            } else {
                die('Error in adding nutrition');
            }
        }

        $viewPath = VIEWS_PATH . 'pages/addworkout.php';
        require_once $viewPath;
        $aboutView = new addworkout($this->getModel(), $this);
        $aboutView->output();
    }


	    public function ViewUsers()
    {
        $viewPath = VIEWS_PATH . 'pages/ViewUsers.php';
        require_once $viewPath;
        $ViewUsersView = new ViewUsers($this->getModel(), $this);
        $ViewUsersView->output();
    }
    public function editUser()
    {
        $viewPath = VIEWS_PATH . 'pages/editUser.php';
        require_once $viewPath;
        $ViewUsersEdit = new editUser($this->getModel(), $this);
        $ViewUsersEdit->output();
    }
    public function message()
    {
        $viewPath = VIEWS_PATH . 'pages/message.php';
        require_once $viewPath;
        $ViewUsersView = new message($this->getModel(), $this);
        $ViewUsersView->output();
    }


    public function usersearchj()
    {
        $viewPath = VIEWS_PATH . 'pages/usersearchj.php';
        require_once $viewPath;
        $usersearchjView = new Usersearchj($this->getModel(), $this);
        $usersearchjView->output();
    }
    public function usersearch()
    {
        $viewPath = VIEWS_PATH . 'pages/usersearch.php';
        require_once $viewPath;
        $usersearchjView = new Usersearch($this->getModel(), $this);
        $usersearchjView->output();
    }


}
