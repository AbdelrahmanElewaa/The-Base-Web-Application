<?php
class Chat extends View
{
  public function output()
  {
    // $title = $this->model->title;
    // $subtitle = $this->model->subtitle;
    // $user_id = $_SESSION['user_id'];
    // $user_name = $_SESSION['user_name'];
    $MessageFromAdmin=$this->model->getMessageFromAdmin();
    $MessageFromClient=$this->model->getMessageFromClient();

    $record=$this->model->chat();
    $action = URLROOT . 'pages/chat';



//    if($this->model->getSender()==1)
//    {
//     $MessageFromAdmin=$this->model->getMessage();
//    }
//    else
//    {
//        $MessageFromClient=$this->model->getMessage();
//    }
    // Admin -->ID --> 1

    $x=0;
    require APPROOT . '/views/inc/header.php';
    $text = <<< EOT
 

    <div class="container">
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card chat-app">
                <div id="plist" class="people-list">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-search"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                    <ul class="list-unstyled chat-list mt-2 mb-0">
                        <li class="clearfix">
                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">
                            <div class="about">
                                <div class="name">Vincent Porter</div>
                                <div class="status"> <i class="fa fa-circle offline"></i> left 7 mins ago </div>                                            
                            </div>
                        </li>
                        <li class="clearfix active">
                            <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                            <div class="about">
                                <div class="name">Aiden Chavez</div>
                                <div class="status"> <i class="fa fa-circle online"></i> online </div>
                            </div>
                        </li>
                        <li class="clearfix">
                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                            <div class="about">
                                <div class="name">Mike Thomas</div>
                                <div class="status"> <i class="fa fa-circle online"></i> online </div>
                            </div>
                        </li>                                  
                        <li class="clearfix">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
                            <div class="about">
                                <div class="name">Christian Kelly</div>
                                <div class="status"> <i class="fa fa-circle offline"></i> left 10 hours ago </div>
                            </div>
                        </li>
                        <li class="clearfix">
                            <img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="avatar">
                            <div class="about">
                                <div class="name">Monica Ward</div>
                                <div class="status"> <i class="fa fa-circle online"></i> online </div>
                            </div>
                        </li>
                        <li class="clearfix">
                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                            <div class="about">
                                <div class="name">Dean Henry</div>
                                <div class="status"> <i class="fa fa-circle offline"></i> offline since Oct 28 </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="chat">
                    <div class="chat-header clearfix">
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                </a>
                                <div class="chat-about">
                                    <h6 class="m-b-0">Aiden Chavez</h6>
                                    <small>Last seen: 2 hours ago</small>
                                </div>
                            </div>
                            <div class="col-lg-6 hidden-sm text-right">
                                <a href="javascript:void(0);" class="btn btn-outline-secondary"><i class="fa fa-camera"></i></a>
                                <a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-image"></i></a>
                                <a href="javascript:void(0);" class="btn btn-outline-info"><i class="fa fa-cogs"></i></a>
                                <a href="javascript:void(0);" class="btn btn-outline-warning"><i class="fa fa-question"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="chat-history">
                        <ul class="m-b-0">
EOT;
for($x=0;$x<count($record);$x++)
{
    if($record[$x]->sender==1)
    {
                            $loop1=<<<EOT


                                <li class="clearfix">
                                <div class="message-data text-right">
                                    <span class="message-data-time">10:10 AM, Today</span>
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
                                </div>
                                <div class="message other-message float-right"> 

EOT;


$loop1=$loop1 .$record[$x]->content;
$loop11=str_repeat($loop1,1);
$text =$text. $loop11;



    }

$loop1=$loop1.<<<EOT
                                   </div>
                            </li>


EOT;


    if($record[$x]->sender!=1)
    {
                            $loop2=<<<EOT

                                <li class="clearfix">
                                <div class="message-data">
                                    <span class="message-data-time">10:12 AM, Today</span>
                                </div>
                                <div class="message my-message"> 
                                
EOT;
$loop2=$loop2 .$record[$x]->content;
$loop22=str_repeat($loop2,1);
$text =$text. $loop22;



    }
}
$loop2=$loop2.<<<EOT
</div>                                    
                            </li>     
EOT;

                        $text = $text.<<<EOT
                        </ul>
                    </div>
                    <form action="$action " method="post">
                    <div class="chat-message clearfix">
                        <div class="input-group mb-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-send"><input type="submit" value="send" > </i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter text here..." name="message">                                    
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
