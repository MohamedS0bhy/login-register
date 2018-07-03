<?php


class login {
    private $username;
    private $password;
    private $link;
    function __construct($username , $password  ) {
        $this->username = $username;
        $this->password = $password;
        include 'database.php';
        $db = new database("localhost", "root", "", "website");
        $this->link = $db->link;
        
        
    }
    
     function getdata(){
        $query = "select * from users where username = '$this->username' and password = $this->password";
        $sql = mysqli_query($this->link, $query);
        
        if(@mysqli_num_rows($sql)>0)
            return TRUE;
        else 
            return FALSE;
    }
}
