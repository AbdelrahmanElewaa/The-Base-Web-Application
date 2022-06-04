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
        if(!empty($displaynutritionModel->plan()) )
        {
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
    }
    else
    {
        unset($_SESSION['array_to_saveB'] );
        unset($_SESSION['array_to_saveL']);
        unset(  $_SESSION['array_to_saveD']);
        unset($_SESSION['DATE'] );



    }
    // }


        $viewPath = VIEWS_PATH . 'pages/plan.php';
        require_once $viewPath;
        $planView = new Plan($this->getModel(), $this);
        $planView->output();


    }




public function editworkout()
    {
        $editworkoutModel= $this->getModel();
        $editworkoutModel->settrainingID($_GET['trainingID']);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $editworkoutModel->settrainingID($_GET['trainingID']);
            $editworkoutModel->setdate(trim($_POST['date']));
            $editworkoutModel->setname(trim($_POST['name']));
            $editworkoutModel->setsets(trim($_POST['sets']));
            $editworkoutModel->setreps(trim($_POST['reps']));
            $editworkoutModel->setweights(trim($_POST['weights']));
            $editworkoutModel->setresttime(trim($_POST['resttime']));
            // $editworkoutModel->setuserid(trim($_POST['userid']));
             

            if ($editworkoutModel->updateworkout()) {
                flash('register_success', 'workout plan is edit successfully');
                // redirect('pages/editworkout');

            } 
            else{
                print("hhh");

                die('Error in Edit workout program');
           }
    }
        $viewPath =  VIEWS_PATH . 'pages/editworkout.php';
        require_once $viewPath;
        $editworkoutView = new editworkout($this->getModel(), $this);
        $editworkoutView->output();
       
    }
    
    

    public function work()
    {
        $work = $this->getModel();


       
        if ($result = $work->work()) 
        {
            for($x=0 ; $x<count($result) ; $x++){

            $work->setname($result[$x]->name);
          
            $work->setdate($result[$x]->date);

            // Print_r($result);
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
        $workoutdisplaytableModel=$this->getModel();
        $workoutdisplaytableModel->setdate($_GET['date']);

        // print_r($workoutdisplaytableModel->workdetails());
        if ($result = $workoutdisplaytableModel->workdetails()) 
        {           

            for($x=0 ; $x<count($result) ; $x++){
             $workoutdisplaytableModel->settrainingID($result[$x]->trainingID);           
             $workoutdisplaytableModel->setname($result[$x]->name);
             $workoutdisplaytableModel->setreps($result[$x]->reps);
             $workoutdisplaytableModel->setsets($result[$x]->sets);
             $workoutdisplaytableModel->setresttime($result[$x]->resttime);
             $workoutdisplaytableModel->setweights($result[$x]->weights);

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

        
        // if($viewChatModel->AllClients())
        // {
        //  $viewChatModel->setAllClients( $viewChatModel->AllClients() )   ;
        // }
        // print_r(   $viewChatModel->chat()  );

        if($result=$viewChatModel->chat())
        {

            // print($_GET['id']);

            $x=0;
            while(!empty($result[$x]))
            {
            $viewChatModel->setSender($result[$x]->sender);
            $viewChatModel->setReciever($result[$x]->reciever);



            if($viewChatModel->getSender()==1)
            {
                $viewChatModel->setMessageFromAdmin($result[$x]->content);
                $viewChatModel->setCreated_at_admin( date("Y-m-d h:i:sa A",strtotime($result[$x]->created_at)) );
                $viewChatModel->setReciever($_GET['id']);
                $viewChatModel->setSender(1);


                
                // $viewChatModel->setSeen_admin($result[$x]->seen);
            }
            else
            {
                $viewChatModel->setMessageFromClient(   $result[$x]->content);
                $viewChatModel->setCreated_at_client( date("Y-m-d h:i:sa A",strtotime($result[$x]->created_at))  );
                $viewChatModel->setReciever(1);
                $viewChatModel->setSender($_SESSION['user_id']);
                // print(   $viewChatModel->getCreated_at_client()  );  
                // print("<br>");
                // $viewChatModel->setSeen_client($result[$x]->seen);

            }

            $x++;

        }
        }


        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            if($_SESSION['user_id']!=1)/////clientt////
            {

            if(!empty($_POST['message']))
            {
            $viewChatModel->setMessage(trim($_POST['message']));
            $viewChatModel->setSender($_SESSION['user_id']);
            $viewChatModel->setReciever(1);
            $viewChatModel->setCreated_at_client(date("Y-m-d h:i:sa A"));
            $viewChatModel->setSeen_client(0);

            if($viewChatModel->sendclient())
            {
                $_POST['message']="";
                $viewChatModel->setMessage(trim($_POST['message']));
                // header("Refresh:0");
                header("Location: http://localhost/mvc/public/pages/chat?id=".$_GET["id"].'& selected='.$_GET["selected"]);

            }
            }
        }
        else
        {
            if(!empty($_POST['message']))
            {
            $viewChatModel->setMessage(trim($_POST['message']));
            $viewChatModel->setSender($_SESSION['user_id']);
            $viewChatModel->setReciever($_GET['id']);
            $viewChatModel->setCreated_at_admin(date("Y-m-d h:i:sa A"));
            $viewChatModel->setSeen_admin(0);

            if($viewChatModel->sendadmin())
            {
                $_POST['message']="";
                $viewChatModel->setMessage(trim($_POST['message']));
                // header("Refresh:0");
                header("Location: http://localhost/mvc/public/pages/chat?id=".$_GET["id"].'& selected='.$_GET["selected"]);

            }
            }        }





        }




        $viewPath = VIEWS_PATH . 'pages/chat.php';
        require_once $viewPath;
        $chatView = new Chat($this->getModel(), $this);
        $chatView->output();
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
             
            if(empty($addworkoutModel->getdate()) || empty($addworkoutModel->getname()) || empty($addworkoutModel->getsets()) || empty($addworkoutModel->getreps()) || empty($addworkoutModel->getweights()) || empty($addworkoutModel->getresttime()) )
            {
                if(empty($addworkoutModel->getdate()) )
                {
                    $addworkoutModel->setdateErr("*Please Enter a Valid date");
                }
                if( empty($addworkoutModel->getname()))
                {
                    $addworkoutModel->setnameErr("*Please Enter a Valid Workout Name");
    
                }
                if(empty($addworkoutModel->getsets()) )
                {
                    $addworkoutModel-> setsetsErr("*Please Enter a Valid Sets");
    
                }
                if( empty($addworkoutModel->getreps()) )
                {
                    $addworkoutModel-> setrepsErr("*Please Enter a Valid reps");
    
                }
                if(empty($addworkoutModel->getweights()))
                {
                    $addworkoutModel-> setweightsErr("*Please Enter a Valid weights");
    
                }
                if( empty($addworkoutModel->getresttime()))
                {
                    $addworkoutModel-> setresttimeErr("*Please Enter a Valid rest time");
    
                }

            }
            else
            {



            if ($addworkoutModel->addWork()) {
                //header('location: ' . URLROOT . 'users/login');
                flash('register_success', 'workout plan is added successfully');
                redirect('pages/addworkout?id='.$_GET['id']);
            } else {
                die('Error in adding nutrition');
            }
        }

        }

        $viewPath = VIEWS_PATH . 'pages/addworkout.php';
        require_once $viewPath;
        $aboutView = new addworkout($this->getModel(), $this);
        $aboutView->output();
    }
    
    
    
    
    
     public function addnutrition()
    {
        $addnutritionModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
            $addnutritionModel->setuserid($_GET['id']);
            $count=$addnutritionModel->countNut();
            $array = json_decode(json_encode($count), true);
            if($array['records']>7)
            {
                print("<script>alert('maximum 7 records per week . You can edit or delete your nutrition plan');</script>");
            }
            else
            {
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


            if(empty($addnutritionModel->getdate()) || empty($addnutritionModel->getbname()) || empty($addnutritionModel->getlname()) || empty($addnutritionModel->getdname()) || empty($addnutritionModel->getbd()) || empty($addnutritionModel->getld()) || empty($addnutritionModel->getdd()) )
            {
                if(empty($addnutritionModel->getdate()) )
                {
                    $addnutritionModel->setdateErr("*Please Enter a Valid date");
                }
                if( empty($addnutritionModel->getbname()))
                {
                    $addnutritionModel->setbnameErr("*Please Enter a Valid Breakfast Name");
    
                }
                if(empty($addnutritionModel->getlname()) )
                {
                    $addnutritionModel-> setbdErr("*Please Enter a Valid Lunch Name");
    
                }
                if( empty($addnutritionModel->getdname()) )
                {
                    $addnutritionModel-> setlnameErr("*Please Enter a Valid Dinner Name");
    
                }
                if(empty($addnutritionModel->getbd()))
                {
                    $addnutritionModel-> setldErr("*Please Enter a Valid Breakfast Description");
    
                }
                if( empty($addnutritionModel->getld()))
                {
                    $addnutritionModel-> setdnameErr("*Please Enter a Valid Lunch Description");
    
                }
                if( empty($addnutritionModel->getdd()))
                {
                    $addnutritionModel-> setddErr("*Please Enter a Valid Dinner Description");
    
                }
            }
            // else if(trim($_POST['date']) < date('y-m-d') == 1)
            // {
            //     $addnutritionModel->setdateErr("*Please Enter a Valid dateee");
            // }
            else
            {

            if ($addnutritionModel->addNut()) {
                //header('location: ' . URLROOT . 'users/login');
                flash('register_success', 'nutrition plan is added successfully');
                redirect('pages/addnutrition?id='.$_GET['id']);
            } else {
                die('Error in adding nutrition');
            }
        }
    }
        }
        $viewPath = VIEWS_PATH . 'pages/addnutrition.php';
        require_once $viewPath;
        $aboutView = new addnutrition($this->getModel(), $this);
        $aboutView->output();
    }


        public function deletenutrition()
    {
        // print(" DELETE FROM `nutrition` WHERE id=".$_GET['id'] );

        $deletenutritionModel = $this->getModel();
        // $deletenutritionModel->deleteNut();
        // print("hellooo");
        print($deletenutritionModel->deleteNut());


        if ($_SERVER['REQUEST_METHOD'] == 'POST') 
        {

            // print($deletenutritionModel->deleteNut());

            // if ($deletenutritionModel->deleteNut())
            //  {
            //      print("heree");


            //     //header('location: ' . URLROOT . 'users/login');
            //     flash('register_success', 'nutrition plan deleted successfully');
            //     redirect('pages/nutrition');
            // } else {
            //     die('Error in adding nutrition');
            // }



        }
    

        $viewPath = VIEWS_PATH . 'pages/deletenutrition.php';
        require_once $viewPath;
        $deletenutritionView = new deletenutrition($this->getModel(), $this);
        $deletenutritionView->output();
    }



    public function deleteworkout()
    {
        // print(" DELETE FROM `nutrition` WHERE id=".$_GET['id'] );

        $deleteworkoutModel = $this->getModel();
        // $deletenutritionModel->deleteNut();
        // print("hellooo");
        print($deleteworkoutModel->deleteWork());


        // if ($_SERVER['REQUEST_METHOD'] == 'POST') 
        // {

        //     print($deleteworkoutModel->deleteNut());

        //     if ($deleteworkoutModel->deleteNut())
        //      {
        //          print("heree");


        //         //header('location: ' . URLROOT . 'users/login');
        //         flash('register_success', 'workout program had been deleted successfully');
        //         redirect('pages/workout');
        //     } else {
        //         die('Error in deleting workout');
        //     }



        // }
    

        $viewPath = VIEWS_PATH . 'pages/deleteworkout.php';
        require_once $viewPath;
        $deleteworkoutView = new deleteworkout($this->getModel(), $this);
        $deleteworkoutView->output();
    }

    
    public function editnutrition()
    {
        $editnutritionModel = $this->getModel();
        $editnutritionModel->setnutritionID($_GET['nutritionID']);

      
          
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $editnutritionModel->setnutritionID($_GET['nutritionID']);
            $editnutritionModel->setdate(trim($_POST['date']));
            $editnutritionModel->setbname(trim($_POST['bname']));
            $editnutritionModel->setbd(trim($_POST['bd']));
            $editnutritionModel->setlname(trim($_POST['lname']));
            $editnutritionModel->setld(trim($_POST['ld']));
            $editnutritionModel->setdname(trim($_POST['dname']));
            $editnutritionModel->setdd(trim($_POST['dd']));
            $editnutritionModel->setuserid(trim($_POST['userid']));


            if ($editnutritionModel->updatenutrition()) {
                flash('register_success', 'Workout Program is Updated successfully');
                // redirect('pages/editnutrition?nutritionID='.$_GET['nutritionID']);
                
            } 
            else {
                die('Error in update Workout Program');
            }

    }
    $viewPath =  VIEWS_PATH . 'pages/editnutrition.php';
    require_once $viewPath;
    $editnutritionView = new editnutrition($this->getModel(), $this);
    $editnutritionView->output(); 
}
    
    public function deleteclient()
    {
        $deleteclientModel = $this->getModel();
         $deleteclientModel->setID($_GET['id']);
        $deleteclientModel->deleteclient();


        $viewPath = VIEWS_PATH . 'pages/deleteclient.php';
        require_once $viewPath;
        $deleteclientView = new deleteclient($this->getModel(), $this);
        $deleteclientView->output();
    }





}
