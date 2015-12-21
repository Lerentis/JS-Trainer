<?php
ini_set('display_errors',1); ini_set('display_startup_errors',1);


include ("php/include/db_connect.php");

$db = new db();



$res = $db->tutorialCompleted(2,2,100);

var_dump($res);

?>