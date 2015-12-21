<?php
ini_set('display_errors',1); ini_set('display_startup_errors',1);
define('IN_PHPBB', true);
$phpbb_root_path = '/usr/share/phpBB3/';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'phpbb/db/driver/mysql.' . $phpEx);
include_once 'psl-conf.php';

class db{

    private $conn;

    function __construct()
    {
        //$this->conn = new mysqli(HOST, USER, PASSWORD, DATABASE);
        $this->conn = new mysql();
        // we're using bertie and bertiezilla as our example user credentials. You need to fill in your own ;D
        $this->conn->sql_connect(HOST, USER, PASSWORD, DATABASE, '', false, false);

        echo $this->conn->hostinfo();
    }



//    function __destruct()
//    {
//        $this->conn->sql_close();
//    }
//
//    function getProgress($user_id){
//        //Array with the data to insert
//        $data = array(
//            'user_id'     => '2'
//        );
//
//        // First doing a select with this data.
//        // Note: By using the SELECT type, it uses always AND in the query.
//        $sql = 'SELECT user_id FROM  user_progress WHERE ' . $this->conn->sql_build_array('SELECT', $data);
//        $result = $this->conn->sql_query($sql);
//
//        var_dump($result);
//
//        return $result;
//
//        //$sql = "SELECT progress from user_progress WHERE user_id=(" . $user_id . ");" ;
//
//    }

}

$mydb = new db();