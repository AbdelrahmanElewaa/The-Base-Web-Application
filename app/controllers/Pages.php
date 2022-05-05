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

    // public function login()
    // {

    // }

    public function contact()
    {
        $viewPath = VIEWS_PATH . 'pages/contact.php';
        require_once $viewPath;
        $contactView = new Contact($this->getModel(), $this);
        $contactView->output();
    }






    public function plan()
    {
        $displaynutritionModel = $this->getModel();

        if ($result = $displaynutritionModel->plan())
        {

            $breakfastArray=array();
            $x=0;
            while(isset($result[$x]->date) )
            {
                // echo"<h1>hello</h1>";
            $displaynutritionModel->setdate($result[$x]->date);
            // $date=$displaynutritionModel->getdate();
            // echo"<h1>$date</h1>";
            $displaynutritionModel->setbname($result[$x]->breakfast);
            $displaynutritionModel->setlname($result[$x]->lunch);
            $displaynutritionModel->setdname($result[$x]->dinner);
            $displaynutritionModel->setbd($result[$x]->bd);
            $displaynutritionModel->setld($result[$x]->ld);
            $displaynutritionModel->setdd($result[$x]->dd);






            // $breakfastArray[$x]=$b;
            $b[$x]=$result[$x]->breakfast."<br> Details : ".$result[$x]->bd;
            $l[$x]=$result[$x]->lunch."<br> Details : ".$result[$x]->ld;
            $d[$x]=$result[$x]->dinner."<br> Details : ".$result[$x]->dd;
            $DATE[$x]=$result[$x]->date;

            // $LunchArray[$x]=$b;

            $x++;
            }
            $_SESSION['array_to_saveB'] = $b;
            $_SESSION['array_to_saveL'] = $l;
            $_SESSION['array_to_saveD'] = $d;
            $_SESSION['DATE'] = $DATE;








            // echo "<h1>$date</h1>";
            //header('location: ' . URLROOT . 'users/login');
            // flash('Nutrition plan_success', 'nutrition plan is viwed successfully');
            // redirect('pages/addnutrition.php');

        }
         else {
            die('Error in Viewing Your plan');
        }
    // }


        $viewPath = VIEWS_PATH . 'pages/plan.php';
        require_once $viewPath;
        $planView = new Plan($this->getModel(), $this);
        $planView->output();


    }





    
    public function work()
    {
        $work = $this->getModel();


       
        if ($result = $work->work()) 
        {
            for($x=0 ; $x<count($result) ; $x++){
            $work->setname($result[$x]->name);
          
            $work->setdate($result[$x]->date);
            }
            
        } else {
            die('Error in display wokout program');
        }

      

        $viewPath = VIEWS_PATH . 'pages/work.php';
        require_once $viewPath;
        $workView = new Work($this->getModel(), $this);
        $workView->output();
        

        
    }





    public function plandisplay()
    {
        $viewPath = VIEWS_PATH . 'pages/plandisplay.php';

        require_once $viewPath;
        $plandisplayView = new Plandisplay($this->getModel(), $this);
        $plandisplayView->output();

    }





     public function workoutdisplay()
    {        
        $workoutdisplaytableModel=$this->get_model();

        if ($result = $workoutdisplaytableModel->workdetails()) 
        {
            for($x=0 ; $x<count($result) ; $x++){
            $workoutdisplaytableModel->settrainingID($result[$x]->trainingID);           
             $workoutdisplaytableModel->setname($result[$x]->name);
             $workoutdisplaytableModel->setreps($result[$x]->reps);
             $workoutdisplaytableModel->setsets($result[$x]->sets);
             $workoutdisplaytableModel->setresttime($result[$x]->resttime);
             $workoutdisplaytableModel->setweights($result[$x]->weights);
            $workoutdisplaytableModel->setdate($result[$x]->date);
            }
            
        } else {
            die('Error in display wokout program');
        }

        $viewPath = VIEWS_PATH . 'pages/workoutdisplay.php';
        require_once $viewPath;
        $workoutdisplayView = new Workoutdisplay($this->getModel(), $this);
        $workoutdisplayView->output();
    } 





    public function video()
    {
        $viewPath = VIEWS_PATH . 'pages/video.php';
        require_once $viewPath;
        $videoView = new Video($this->getModel(), $this);
        $videoView->output();
    }





    public function chat()
    {

        $viewChatModel = $this->getModel();
        if($result=$viewChatModel->chat())
        {

            $x=0;
            while(isset($result[$x]))
            {
            $viewChatModel->setSender($result[$x]->sender);
            $viewChatModel->setReciever($result[$x]->reciever);
            if($viewChatModel->getSender()==1)
            {
                $viewChatModel->setMessageFromAdmin($result[$x]->content);
            }
            else
            {
                $viewChatModel->setMessageFromClient($result[$x]->content);

            }

            $x++;

        }
        }


        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            if(!empty($_POST['message']))
            {
            $viewChatModel->setMessage(trim($_POST['message']));
            $viewChatModel->setSender(2);
            $viewChatModel->setReciever(1);
            $viewChatModel->setCreated_at(date('y-m-d h:i:s'));
            $viewChatModel->setSeen(0);

            if($viewChatModel->send())
            {
                header("Refresh:0");
            }
            }





        }




        $viewPath = VIEWS_PATH . 'pages/chat.php';
        require_once $viewPath;
        $chatView = new Chat($this->getModel(), $this);
        $chatView->output();
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
                redirect('pages/addnutrition.php');
            } else {
                die('Error in adding nutrition');
            }
        }
        $viewPath = VIEWS_PATH . 'pages/addnutrition.php';
        require_once $viewPath;
        $aboutView = new addnutrition($this->getModel(), $this);
        $aboutView->output();
    }



    public function login()
    {
        $userModel = $this->getModel();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //process form
            $userModel->setEmail(trim($_POST['email']));
            $userModel->setPassword(trim($_POST['password']));

            //validate login form
            if (empty($userModel->getEmail())) {
                $userModel->setEmailErr('Please enter an email');
            } elseif (!($userModel->emailExist($_POST['email']))) {
                $userModel->setEmailErr('No user found');
            }

            if (empty($userModel->getPassword())) {
                $userModel->setPasswordErr('Please enter a password');
            } elseif (strlen($userModel->getPassword()) < 4) {
                $userModel->setPasswordErr('Password must contain at least 4 characters');
            }

            // If no errors
            if (
                empty($userModel->getEmailErr()) &&
                empty($userModel->getPasswordErr())
            ) {
                //Check login is correct
                $loggedUser = $userModel->login();
                if ($loggedUser) {
                    //create related session variables
                    $this->createUserSession($loggedUser);
                    die('Success log in User');
                } else {
                    $userModel->setPasswordErr('Password is not correct');
                }
            }
        }
        // Load form
        //echo 'Load form, Request method: ' . $_SERVER['REQUEST_METHOD'];
        $viewPath = VIEWS_PATH . 'pages/login.php';
        require_once $viewPath;
        $loginView = new Login($this->getModel(), $this);
        $loginView->output();
    }

    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_name'] = $user->name;
        //header('location: ' . URLROOT . 'pages');
        redirect('pages');
    }

    public function logout()
    {
        echo 'logout called';
        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);
        session_destroy();
        redirect('users/login');
    }

    public function isLoggedIn()
    {
        return isset($_SESSION['user_id']);
    }




}
