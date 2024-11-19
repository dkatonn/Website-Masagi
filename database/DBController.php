<?php

class DBController 
{
    // Database connection
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = "masagi-test";

    // connection property
    public $conn = null;

    // memanggil constructor
    public function __construct()
    {
        $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->database); 
        if ($this->conn->connect_error){ 
            echo "Fail Connection" .$this->conn->connect_error;
        }   
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

    // close connection
    protected function closeConnection(){
        if($this->conn !=null){
            $this->conn->close();
            $this->conn = null;
        }
    }
}
