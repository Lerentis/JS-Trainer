<?php
ini_set('display_errors',1); ini_set('display_startup_errors',1);

echo "Test0";

include ("php/include/db_connect.php");

$db = new db();

$res = $db->getProgress(1);

var_dump($res);

?>