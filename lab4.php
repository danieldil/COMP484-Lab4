<html>
    <head>
        <?php
            require_once("connect.php");
        ?>
    </head>
    <body>
        <form action="mailer.php" method="POST">
            <h1>Login</h1>
            
            Username:<input type="name" name="username">
            <br>
            Password:<input type="password" name = "password">
            <br>
            <input type="submit">
        </form>
        <form action="register.php" method="POST">
            <h1>Register</h1>
            Username:<input type="name" name="username">
            <br>
            Password:<input type="password" name = "password">
            <br>
            Password:<input type="password" name = "password_again">
            <br>            
            <input type="submit">
        </form>
    </body>
</html>