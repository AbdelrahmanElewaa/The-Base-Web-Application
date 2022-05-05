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

    public function login()
    {
        $viewPath = VIEWS_PATH . 'pages/login.php';
        require_once $viewPath;
        $loginView = new Login($this->getModel(), $this);
        $loginView->output();
    }

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

    //     if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //     // $displaynutritionModel->getdate();
    //     // $registerModel->setName(trim($_POST['lastname']));
    //     // $displaynutritionModel->getbname();
    //     // $displaynutritionModel->getbd();
    //     // $displaynutritionModel->getlname();
    //     // $displaynutritionModel->getld();
    //     // $displaynutritionModel->getdname();
    //     // $displaynutritionModel->getdd();




    //     $result =  $displaynutritionModel->plan();
    //     // $displaynutritionModel->setbname()=$result[0]->breakfast;
    //     $displaynutritionModel->setdate($result[0]->date);

    //     // $displaynutritionModel->setbname()=$result['breakfast'];





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
            $displaynutritionModel->setld($result[$x]->Ld);
            $displaynutritionModel->setdd($result[$x]->dd);






            // $breakfastArray[$x]=$b;
            $b[$x]=$result[$x]->breakfast."<br> Details : ".$result[$x]->bd;
            $l[$x]=$result[$x]->lunch."<br> Details : ".$result[$x]->Ld;
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

        } else {
            die('Error in adding nutrition');
        }
    // }


        $viewPath = VIEWS_PATH . 'pages/plan.php';
        require_once $viewPath;
        $planView = new Plan($this->getModel(), $this);
        $planView->output();


    }





    public function work()
    {
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






    // function displayNut()
    // {

    //     $viewPath = VIEWS_PATH . 'pages/addnutrition.php';
    //     require_once $viewPath;
    //     $aboutView = new addnutrition($this->getModel(), $this);
    //     $aboutView->output();

    // }








}
