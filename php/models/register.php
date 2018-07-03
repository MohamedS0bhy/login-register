<?php


class register {
    
   
    
    function __construct(){
        
        
        
    }
    
    public function addData($username , $password , $email){
        $query  = "insert into users (username , password , email) values ('$username' , $password , '$email')";
        include 'database.php';
        $db = new database("localhost", "root", "", "website");
        $result = mysqli_query($db->link, $query);
        if($result)
            return TRUE;
        else 
            return FALSE;
    }
}
