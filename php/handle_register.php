<html>
<body>

<?php
if($_POST["password"] === $_POST["passwordconfirm"] && empty($_POST["password"]) != 1){

} else {
    echo "Passwords did not match!";
    header("refresh:2;url=../register.html");
    exit();
}
?>

Welcome <?php echo $_POST["firstname"]; echo $_POST["lastname"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>
Your Password is <?php echo $_POST["password"]; ?>

</body>
</html>