<?php
require_once 'UserModel.php';
class ChatModel extends UserModel
{
    public  $title = 'Chat Page';
    protected $sender;
    protected $reciver;
    protected $messageFromAdmin=array();
    protected $messageFromClient=array();
    protected $message;

    protected $created_at;
    protected $seen;


    public function getSender()
    {
        return $this->sender; 
    }
    public function setSender($s)
    {
            $this->sender=$s;
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

    public function getCretated_at()
    {
            return $this->created_at;
    }
    public function setCreated_at($c)
    {
            $this->created_ad=$c;
    }

    public function getSeen()
    {
            return $this->seen;
    }
    public function setSeen($s)
    {
        $this->seen =$s;
    }




    public function chat()
    {
        $this->dbh->query('SELECT DISTINCT sender,reciever,content FROM chat,users  WHERE (`sender` = 1 AND `reciever` = 2) OR (`sender` = 2 AND `reciever` = 1) ORDER BY `created_at` ASC') ;
		return $this->dbh->resultSet();
    }

    public function send()
    {
        $this->dbh->query('INSERT INTO chat (sender, reciever, content, created_at,seen)
        VALUES (:s, :r, :m, :c,:se) ') ;
		$this->dbh->bind(':s', $this->sender);
        $this->dbh->bind(':r', $this->reciever);
        $this->dbh->bind(':m', $this->message);
		$this->dbh->bind(':c', $this->created_at);
        $this->dbh->bind(':se', $this->seen);

         
		return $this->dbh->execute();    
    }


}
