<html>
<?php
    require_once("connect.php");
	if(isset($_SESSION['username'])){
    echo "Welcome $username " ;
}else
    echo "please login";

?>
</html>