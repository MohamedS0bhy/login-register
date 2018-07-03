<?php

class database {

    private $user;
    private $pass;
    private $host;
    private $database;
    public $link;
                function __construct($host, $user, $pass, $db) {
        $this->host   = $host;
        $this->user     = $user;
        $this->pass     = $pass;
        $this->database = $db;
        
        $this->connect();
    }
    
    function connect(){
        if(!($this->link=mysqli_connect($this->host, $this->user, $this->pass, $this->database)))
            throw new Exception("ERROR: Failed to connect to host!");
        
        
        if(!(mysqli_select_db($this->link, $this->database)))
            throw new Exception ("ERROR: Failed to select database!");
        
    }
    
    function close(){
        mysqli_close();
    }

}
