<html>
<body>

<?php
ini_set('display_errors',1); ini_set('display_startup_errors',1);

define('IN_PHPBB', true);

require '../docker/docker-phpbb/app/phpBB3/phpbb/auth/provider/class.php';
require '../docker/docker-phpbb/app/phpBB3/phpbb/db/driver';



#if($_POST["username"] == 'Test' && $_POST["password"] == 'Test01'){
    echo $_POST["password"];
   	echo $_POST['username'];

 #$conn = new driver_interface();

#$db = $conn->sql_connection('js_trainer_mysql', 'root','V5k6hBk~5:<s7q','phpbb');

#echo $db->login($_SESSION['username'],$_POST['password']);
// } else {
//     echo "Password did not match Username!";
//     var_dump($_POST["password"]);
//     phpinfo();
//     #header("refresh:2;url=../login.html");
//     exit();
// }
?>

<!--Welcome <?php echo $_SESSION["username"];?><br>-->
<!--Your Password is <?php echo $_POST["password"]; ?>-->

<?php 

#setcookie( "username", $_POST["username"],strtotime( '+30 days' ),'/' );
#header("refresh:2;url=../user.html");
?>

</body>
</html>