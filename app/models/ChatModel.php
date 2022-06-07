<?php
require_once 'UserModel.php';
class ChatModel extends UserModel
{
    public  $title = 'Chat Page';
    protected $sender;
    protected $reciever;
    protected $messageFromAdmin=array();
    protected $messageFromClient=array();
    protected $message;

    protected $created_at_client=array();
    protected $created_at_admin=array();
    

    protected $seen_client;
    protected $seen_admin;

    protected $record=array();

    protected $allClients;
    protected $chat=array();


    public function setAllClients($c)
    {

        $this->allClients=$c;


    }
    public function getAllClients()
    {
        return $this->allClients;
    }




    public function getrecord()
    {
        return $this->record; 
    }
    public function setrecord($s)
    {
            $this->record=$s;
            // array_push($this->record,$s);

    }



    public function getSender()
    {
        return $this->record; 
    }
    public function setSender($r)
    {
        $this->record=$r;
    }

    public function getMessage()
    {
        return $this->message; 
    }
    public function setMessage($m)
    {
            $this->message=$m;
    }



    public function getReciever()
    {
            return $this->reciever;
    }
    public function setReciever($r)
    {
            $this->reciever=$r;

    }

    public function getMessageFromAdmin()
    {
        return $this->messageFromAdmin;
    }
    public function setMessageFromAdmin($m)
    {
        array_push($this->messageFromAdmin,$m);
            // $this->message[]=$m;

    }


    public function getMessageFromClient()
    {

        return $this->messageFromClient;
    }
    public function setMessageFromClient($m)
    {
        array_push($this->messageFromClient,$m);
            // $this->message[]=$m;

    }

    public function getCreated_at_admin()
    {
            return $this->created_at_admin;
    }
    public function setCreated_at_admin($c)
    {
        array_push($this->created_at_admin,$c);

            // $this->created_at_admin=$c;
    }

    

    public function getCreated_at_clientlast()
    {
            return end($this->created_at_client);
    }
    
    public function getCreated_at_adminlast()
    {
            return end($this->created_at_admin);
    }

    
    public function getCreated_at_client()
    {
            return $this->created_at_client;
    }
    public function setCreated_at_client($c)
    {
        array_push($this->created_at_client,$c);

            // $this->created_at_client = $c;
    }


    public function getSeen_admin()
    {
            return $this->seen_admin;
    }
    public function setSeen_admin($s)
    {
        $this->seen_admin =$s;
    }


    public function getSeen_client()
    {
            return $this->seen_client;
    }
    public function setSeen_client($s)
    {
        $this->seen_client=$s;
    }



    public function chat()
    {
        $this->dbh->query('SELECT DISTINCT sender,reciever,content,created_at ,seen FROM chat,users  WHERE (`sender` = 1 AND `reciever` =:uid ) OR (`sender` = :uid AND `reciever` = 1)  ORDER BY created_at ASC ') ;
        $this->dbh->bind(':uid',$_SESSION['user_id'] );
        $this->setrecord($this->dbh->resultSet());


		return $this->dbh->resultSet();
    }

    public function chatadmin()
    {
        $this->dbh->query('SELECT DISTINCT sender,reciever,content,created_at ,seen FROM chat,users  WHERE (`sender` = :uid AND `reciever` =:sid ) OR (`sender` = :sid AND `reciever` = :uid)  ORDER BY created_at ASC ') ;
        $this->dbh->bind(':uid',1 );
        $this->dbh->bind(':sid',$this->getReciever());


        
        // $this->setrecord($this->dbh->resultSet());


		return $this->dbh->resultSet();
    }

    public function sendclient()
    {
        $this->dbh->query('INSERT INTO chat (sender, reciever, content, created_at,seen)
        VALUES (:s, :r, :m, :c,:se) ') ;
		$this->dbh->bind(':s',$_SESSION['user_id'] );
        $this->dbh->bind(':r', 1);
        $this->dbh->bind(':m', htmlentities($this->message));
		$this->dbh->bind(':c', htmlentities($this->getCreated_at_clientlast()));
        $this->dbh->bind(':se', 0);

         
		return $this->dbh->execute();    
    }

    public function sendadmin()
    {
        $this->dbh->query('INSERT INTO chat (sender, reciever, content, created_at,seen)
        VALUES (:s, :r, :m, :c,:se) ') ;
		$this->dbh->bind(':s',$_SESSION['user_id'] );
        $this->dbh->bind(':r', htmlentities($this->getReciever() )); 
        $this->dbh->bind(':m', htmlentities($this->message));
		$this->dbh->bind(':c', htmlentities($this->getCreated_at_adminlast()));
        $this->dbh->bind(':se', 0);

         
		return $this->dbh->execute();    
    }


    public function AllClients()
    {
        

        $this->dbh->query('SELECT DISTINCT name,id from users where id!=1');

		return $this->dbh->resultSet();


    }

}
