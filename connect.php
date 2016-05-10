<html>
<?php
    $mysql_host = 'localhost';
    $mysql_user = 'root';
    $mysql_pass = '';
    $dbName = '484LAB4';
    function loggedin(){
	if(isset($_SESSION['username'])&&!empty($_SESSION['user_id']))
		return true;
	else
		return false;
    }
        
    if(isset($_POST['username'])&&isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT `id` FROM `Users` WHERE `username` = '".mysql_real_escape_string($_POST['username'])."' AND `password` = '".mysql_real_escape_string($_POST['password'])."'";
        //$query = "SELECT * FROM 'Users'";
    
    //Connect to MySQL
    if(!($database = mysql_connect($mysql_host,$mysql_user,$mysql_pass)))
        die("couldn't connect to the database </body></html>");
    else
        echo"we are connected";
    //open users database
    if( !mysql_select_db("484LAB4",$database))
        die("Could not open users database</body></html>");
    //query users database
    if(!($result = mysql_query($query,$database))){
        print("<P>couldnt execute query!</p>");
        }			
        
        session_start();
        $_SESSION['username']=$username;
        $query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
        $result = mysql_query($query) or die(mysql_error());
        $count = mysql_num_rows($result);
        //If the posted values are equal to the database values, then session will be created for the user.
        if ($count == 1){
        $_SESSION['username'] = $username;
        }
    }
        
    ?>



</html>