<?php

class DBcontroller
{
// database connection properties
protected $host='localhost';
protected $user='root';
protected $password='';
protected $database='bookstore';
protected $port='3307';


//connection property

public $con=null;

//call constructor
public function __construct()
{
    $this->con=mysqli_connect($this->host,$this->user,$this->password,$this->database,$this->port);
    if($this->con->connect_error)
    {
        echo "fail".$this->con->connect_error;

    }
    // echo "connection sucessfull";

}

// calls destructor function
public function __destruct()
{
    $this->closeConnection();
}

//for closing connection when db object is not in use
//it acts like a destructor function studied in c++
 protected function closeConnection()
 {
     if($this->con!=null)
     {
         $this->con->close();
         $this->con=null;
     }
 }

}


?>





