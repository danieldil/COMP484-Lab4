<html>
<?php
    require_once("connect.php");
	if(isset($_SESSION['username'])){
    echo "Welcome $username " ;
}else
    echo "please login";

?>
    <form>
        <br>
        To: 
        <br>
        <input type="name">
        <br>
        Body:
        <br>
        <textarea>
        
        </textarea>
        When to send:
        <br>
        
    </form>
</html>