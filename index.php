<?php
session_start();
if((!isset($_SESSION['username'])))
    header("Location:php/login.php");

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="logo">ELZero <span>inc.</span></div>
                <div class="welcome">
                    <p>Welcome <?php echo "<span style=\"color:#D9534F;font-weight:bold\">". $_SESSION['username'] . "</span>"?></p>
                    <a class="text-center btn-danger"href="php/logout.php">Logout</a>
                </div>
            </div>
        </div>
        <div class="contents">
            <div class="container">
                <div class="nav">
                    <ul>
                        <li><a class="btn-danger active" href="index.php">Home Page</a></li>
                        <li><a class="btn-danger" href="?page=MainSettings">Main Settings</a></li>
                        <li><a class="btn-danger" href="?page=Sections">Sections</a></li>
                        <li><a class="btn-danger" href="?page=Pages">Pages</a></li>
                        <li><a class="btn-danger" href="?page=Comments">Comments</a></li>
                        <li><a class="btn-danger" href="?page=library">library</a></li>
                    </ul>
                </div>
                <div class="page">
                    <?php 
                    if(isset($_REQUEST['page']))
                    {
                    $url = $_REQUEST['page'].".php";
                    include "php/".@$url;
                    }
                    else {include 'php/HomePage.php';}
                    ?>
                </div>
            </div>
        </div>
        <div class="footer text-center">
            <div class="container">
                <p>&copy; CopyRights : Mohamed Sobhy</p>
            </div>
        </div>
    </body>
</html>
