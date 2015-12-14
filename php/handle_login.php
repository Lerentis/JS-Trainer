<html>
<body>

<?php
if($_POST["username"] == 'Test' && $_POST["password"] == 'Test01'){
    echo $_POST["password"];
    session_start();
    $_SESSION['username'] = $_POST["username"];
} else {
    echo "Password did not match Username!";
    var_dump($_POST["password"]);
    phpinfo();
    #header("refresh:2;url=../login.html");
    exit();
}
?>

Welcome <?php echo $_SESSION["username"];?><br>
Your Password is <?php echo $_POST["password"]; ?>

<?php
setcookie( "username", $_POST["username"],strtotime( '+30 days' ),'/' );
header("refresh:2;url=../user.html");
?>

</body>
</html>