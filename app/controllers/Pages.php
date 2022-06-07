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

    public function confirmDelete()
    {
        $viewPath = VIEWS_PATH . 'pages/confirmDelete.php';
        require_once $viewPath;
        $aboutView = new confirmDelete($this->getModel(), $this);
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
        if ($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
            $addnutritionModel->setuserid($_GET['id']);
            // $count=$addnutritionModel->countNut();
            // $array = json_decode(json_encode($count), true);
            // if($array['records']>7)
            // {
            //     print("<script>alert('maximum 7 records per week . You can edit or delete your nutrition plan');</script>");
            // }
            // else
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
                // print_r($this->model->planCount());

                die('Error in adding nutrition');
            }
        }

        }

        $viewPath = VIEWS_PATH . 'pages/addworkout.php';
        require_once $viewPath;
        $aboutView = new addworkout($this->getModel(), $this);
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
    public function error()
    {
        $viewPath = VIEWS_PATH . 'pages/error.php';
        require_once $viewPath;
        $usersearchjView = new errorr($this->getModel(), $this);
        $usersearchjView->output();
    }
    public function access()
    {
        $viewPath = VIEWS_PATH . 'pages/access.php';
        require_once $viewPath;
        $usersearchjView = new access($this->getModel(), $this);
        $usersearchjView->output();
    }

    public function clientside()
    {
        $viewPath = VIEWS_PATH . 'pages/clientside.php';
        require_once $viewPath;
        $aboutView = new clientside($this->getModel(), $this);
        $aboutView->output();
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
            $displaynutritionModel->setdate($result[$x]->date);
            $displaynutritionModel->setUserID($result[$x]->userID);
            // $breakfastArray[$x]=$b;
            $b[$x]=$result[$x]->breakfast."<br> Details : ".$result[$x]->bd;
            $l[$x]=$result[$x]->lunch."<br> Details : ".$result[$x]->ld;
            $d[$x]=$result[$x]->dinner."<br> Details : ".$result[$x]->dd;
            $DATE[$x]=$result[$x]->date;

            $x++;
            }


            $_SESSION['array_to_saveB'] = $b;
            $_SESSION['array_to_saveL'] = $l;
            $_SESSION['array_to_saveD'] = $d;
            $_SESSION['DATE'] = $DATE;

            $displaynutritionModel->setBreakfast( $_SESSION['array_to_saveB']);
            $displaynutritionModel->setLunch( $_SESSION['array_to_saveL']);
            $displaynutritionModel->setDinner( $_SESSION['array_to_saveD']);
            $displaynutritionModel->setDate( $_SESSION['DATE']);

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


        $viewPath = VIEWS_PATH . 'pages/plan.php';
        require_once $viewPath;
        $planView = new Plan($this->getModel(), $this);
        $planView->output();


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



    public function w()
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

      

        $viewPath = VIEWS_PATH . 'pages/w.php';
        require_once $viewPath;
        $workView = new w($this->getModel(), $this);
        $workView->output();
        

        
    }


}

