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
}
