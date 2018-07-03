<?php

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    include './models/login.php';
    $login = new login($username, $password);
    if ($login->getdata()) {
        session_start();
        $_SESSION['username'] = $username;
        header("location:../index.php");
    }
    else 
    {
        echo "<div class=\"btn-danger text-center\" style='postion:fixed;padding:10px;font-weight:bold;';>ERROR : username or password is invlaid!</div>";
        //header("location:login.php");
        include 'login.php';
    }
}
else if (isset ($_POST['register'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email    = $_POST['email'];
    
    include './models/register.php';
    $register = new register();
    if($register->addData($username, $password, $email)){
        echo "<div class=\"btn-success text-center\" style=\"postion:fixed;padding:10px;font-weight:bold;\">Registeration is success u can login now ^^ </div> ";
        include 'login.php';
    }
    else 
    {
        echo "<div class=\"btn-danger text-center\" style='postion:fixed;padding:10px;font-weight:bold;';>ERROR : Registeration is failed please try again</div>";
        //header("location:login.php");
        include 'login.php';
    }
}





