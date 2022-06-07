

<?php
class Chat extends View
{
  public function output()
  {





    $MessageFromAdmin=$this->model->getMessageFromAdmin();
    $MessageFromClient=$this->model->getMessageFromClient();


    $created_at_client= $this->model->getCreated_at_client();
    $created_at_admin= $this->model->getCreated_at_admin();





    $allclients=$this->model->AllClients();



    
    $clientnames=array();
    $clientids=array();
    for($x=0;$x<count($allclients);$x++)
    {
        $clientnames[$x]=$allclients[$x]->name;
        $clientids[$x]=$allclients[$x]->id;

    }


    // print_r($record);
    if(isset($_GET['id']) && isset($_GET['selected']))
    {
    $action = URLROOT . 'pages/chat?id='.$_GET["id"].'& selected='.$_GET["selected"];
    }
    else{
        $action = URLROOT . 'pages/chat?id=$ selected=';   
    }


$loop1=" ";
$loop2=" ";
    $x=0;



    
    require APPROOT . '/views/inc/header.php';





    if($_SESSION['user_id']!=1)////////////////clientt ///////////////////////////
    {

        $record=$this->model->chat();
    $text = <<< EOT
 


    <div  class="container"  >
    <div class="row clearfix">
        <div class="col-lg-12">
            <div  class="card chat-app">
                <div id="plist" class="people-list">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                    <ul class="list-unstyled chat-list mt-2 mb-0">
                        <li class="clearfix">
                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">
                            <div class="about">
                                <div class="name">Nutritionist</div>
                            </div>
                            
                        </li>
                        
                       
                    </ul>
                </div>
                <div class="chat" >
                    <div class="chat-header clearfix">
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                </a>
                                <div class="chat-about">
                                    <h6 class="m-b-0">Nutritionist</h6>
                                </div>
                            </div>
                            <div class="col-lg-6 hidden-sm text-right">
      
                            </div>
                        </div>
                    </div>
                    <div class="chat-history" >
                        <ul class="m-b-0">
EOT;
    
$admin_count=0;
$client_count=0;

for($x=0;$x<count($record);$x++)
{
    if($record[$x]->sender==1 && $admin_count<=count($created_at_admin))
    {

                            $loop1=<<<EOT

                                <li class="clearfix">
                                <div class="message-data text-right">
                                    <span class="message-data-time"style="float:right"> $created_at_admin[$admin_count] </span>
                                </div><br><br>
                                
                                <div class="message other-message float-right"> 

EOT;
$admin_count++;



$loop1=$loop1 .$record[$x]->content;
$loop11=str_repeat($loop1,1);
$text =$text. $loop11;



    }

$loop1=$loop1.<<<EOT
                                   </div>
                            </li>

}
EOT;

    if($record[$x]->sender!=1 && $client_count <= count($created_at_client))
    {
                            $loop2=<<<EOT

                                <li class="clearfix">
                                <div class="message-data">
                                    <span id="created_at_client" class="message-data-time"style="float:left"> $created_at_client[$client_count]  </span>
                                </div><br><br>
                                <div class="message my-message"> 
                                
                                
EOT;
$client_count++;



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
                                <span class="input-group-text"><i class="btn btn-success"><input type="submit" value="send" > </i></span>
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
  }
  else if($_SESSION['user_id']==1)   /////////////Admin//////////////
{



    if(isset($_GET['id']))
    {
    $this->model->setReciever($_GET['id']);
    }
    $record=$this->model->chatadmin();

    $text = <<< EOT
    
 <style>

    #clientButton
    {
        border:none;    
    
        background-color: Transparent;
    }
    </style>
    <form action="$action " method="post"  >

    <div class="container"  >
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card chat-app" >
                <div id="plist" class="people-list"  style="">
                    <div class="input-group" >
                        <div class="input-group-prepend">
                        </div>
                    </div>
                    
                    <ul class="list-unstyled chat-list mt-2 mb-0"  >


EOT;
$sidee=array();

for($x=0;$x<count($allclients);$x++)
{
    
    $clientname=ucfirst($clientnames[$x]);
$sidee[$x]=<<<EOT
                    <a style="color:black;" href="http://localhost/mvc/public/pages/chat?id=$clientids[$x] & selected=$x">
                    <li  class="clearfix">
                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">
                    <div class="about">
                        <div class="name">$clientname  </div>
                    </div>
                    </li></a><br>


EOT;


}
$sidee= implode(" ",$sidee);
$text=$text.$sidee;

if( is_numeric($_GET['selected'])   )
{
    $selected=ucfirst($clientnames[$_GET['selected']]);
}
else
{
    $selected="Client";
}
$text=$text.<<<EOT



                    </ul>
                </div>
                <div class="chat"  >
                    <div class="chat-header clearfix" style=""  >
                        <div class="row">
                            <div class="col-lg-6" >
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info" >
                                </a>
                                <div  class="chat-about" >
                                    <h6 class="m-b-0">$selected</h6>
                                </div>
                            </div>
                            <div class="col-lg-6 hidden-sm text-right">
      
                            </div>
                        </div>
                    </div>
                    <div class="chat-history" >
                        <ul class="m-b-0" >
EOT;
    
$admin_count=0;
$client_count=0;

for($x=0;$x<count($record);$x++)
{
    $created_at_client=$record[$x]->created_at;
    if($record[$x]->sender!=1  )
    {

                            $loop1=<<<EOT

                                <li class="clearfix">
                                <div class="message-data text-right">
                                    <span class="message-data-time" style="float:right"> $created_at_client </span>
                                </div><br><br>
                                
                                <div class="message other-message float-right"> 

EOT;
$client_count++;



$loop1=$loop1 .$record[$x]->content;
$loop11=str_repeat($loop1,1);
$text =$text. $loop11;



    }

$loop1=$loop1.<<<EOT
                                   </div>
                            </li>

}
EOT;

    if($record[$x]->sender==1  )
    {
        $created_at_admin=$record[$x]->created_at;

                            $loop2=<<<EOT

                                <li class="clearfix">
                                <div class="message-data">
                                    <span id="created_at_client" class="message-data-time" style="float:left"> $created_at_admin  </span>
                                </div><br><br>
                                <div class="message my-message"> 
                                
EOT;
$admin_count++;



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
                    <div class="chat-message clearfix" >
                        <div class="input-group mb-0">
EOT;
if(!empty($_GET['selected']) || !empty($_GET['id'])){
    $text=$text.<<<EOT
    <div class="input-group-prepend">
                                <span class="input-group-text"><i class="btn btn-success"><input type="submit" value="send" > </i></span>
                            </div>

                            <input type="text" class="form-control" placeholder="Enter text here..." name="message" >  
                            </div>
                            </div>
                            </form>



EOT;
}
else
{
    $text=$text.<<<EOT

                </div>
            </div>
        </div>
    </div>
    </div>
EOT;
}
    echo $text;
}
require APPROOT . '/views/inc/footer.php';

}


}
?>
