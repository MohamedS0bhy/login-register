<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>login</title>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">
        <script src="../js/jquery-3.1.1.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="sign">
            <div class="container">
                <div class="login">
                    <h1>Login : </h1>
                    <form action="LoginController.php" method="post">
                        <input class="in" required="" type="text" name="username" placeholder="username">
                        <input class="in" required="" type="password" name="password" placeholder="password">
                        <input class="btn-primary"type="submit" name="login" value="Login">
                    </form>
                </div>
                <div class="register">
                    <h1>Register : </h1>
                    <form action="LoginController.php" method="post">
                        <input class="in" required="" type="text" name="username" placeholder="username">
                        <input class="in" required="" type="email" name="email" placeholder="Your Email">
                        <input class="in" required="" type="password" name="password" placeholder="password">
                        <input class="in" required="" type="password" name="password" placeholder="Enter password Again"> 
                        <input class="btn-danger" type="submit" name="register" value="Register">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
