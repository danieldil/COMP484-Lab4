<html>
    <?php
        require_once("connect.php");
        if((isset($_POST['username']))&&(isset($_POST['password']))&&(isset($_POST['password_again']))){
            $username = $_POST['username'];
            $password = $_POST['password'];
            echo "level 1";
            if($_POST['password']==$_POST['password_again']){
                $query = "INSERT INTO `users` (`username`, `password`) VALUES('".mysql_real_escape_string($username)."','".mysql_real_escape_string($password)."')";
                //$query = "INSERT INTO `484lab4`.`users` (`id`, `username`, `password`) VALUES (NULL, 'poop', '');";
                echo "level 2";
                if($query_run = mysql_query($query,$database)){
                    echo "level 3";
						header('Location: mailer.php');
					}
                die(mysql_error());
            }
        }else{
            echo "please retry there was an error";
        }
    ?>
</html>