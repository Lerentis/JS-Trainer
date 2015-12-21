<?php
ini_set('display_errors',1); ini_set('display_startup_errors',1);
//define('IN_PHPBB', true);
//$phpbb_root_path = '/usr/share/phpBB3/';
//$phpEx = substr(strrchr(__FILE__, '.'), 1);
//include($phpbb_root_path . 'common.' . $phpEx);
//include($phpbb_root_path . 'phpbb/db/driver/mysql.' . $phpEx);
include_once 'psl-conf.php';

class db{

    private $conn;

    function __construct()
    {
        $this->conn = new mysqli(HOST, USER, PASSWORD, DATABASE);
        //$this->conn = new mysql();
        //$this->conn->sql_connect(HOST, USER, PASSWORD, DATABASE, '', false, false);
    }

    function __destruct()
    {
        $this->conn->close();
    }

    function getTotalProgress($user_id){
        //Array with the data to insert
//        $data = array(
//            'user_id'     => '2'
//        );

        // First doing a select with this data.
        // Note: By using the SELECT type, it uses always AND in the query.
//        $sql = 'SELECT user_id FROM  user_progress WHERE ' . $this->conn->sql_build_array('SELECT', $data);
//        $result = $this->conn->sql_query($sql);

        //var_dump($result);

        $sql = "SELECT tutorial_finished
                  from user_progress
                  WHERE user_id=?;" ;

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param('i', $user_id);

        $stmt->execute();

        $result = $stmt->get_result();

        $row = $result->fetch_all();

        $progress = 0;

        for($i=0; $i <= count($row[0]) ;$i++){

            $progress+=$row[0][$i];
        }

        return $progress;

    }

    function getMaxLessons(){
        return 6;
    }

    function tutorialCompleted($user_id, $tutorial_id, $correct_answers){
        $sql = "SELECT user_id
                  from user_progress
                  WHERE user_id=? AND tutorial_id=?;" ;

        //insert into user_progress values (1,2,20);


        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param('ii', $user_id, $tutorial_id);

        $stmt->execute();

        $result = $stmt->get_result();

        $row = $result->fetch_assoc();

        if($row != NULL){

            if($correct_answers === 100){
                $sql = "UPDATE user_progress
                  SET tutorial_finished=TRUE, progress=?
                  WHERE user_id=? AND tutorial_id=?;" ;

                //update user_progress set tutorial_finished = true;


                $stmt = $this->conn->prepare($sql);

                $stmt->bind_param('iii', $correct_answers, $user_id, $tutorial_id);

                return $stmt->execute();
            }

            $sql = "UPDATE user_progress
                  SET progress=?
                  WHERE user_id=? AND tutorial_id=?;" ;

            //update user_progress set tutorial_finished = true;


            $stmt = $this->conn->prepare($sql);

            $stmt->bind_param('iii', $correct_answers, $user_id, $tutorial_id);

            return $stmt->execute();

        } else {
            if($correct_answers === 100){
                $sql = "INSERT INTO user_progress
                  (user_id, tutorial_id, progress, tutorial_finished)
                  VALUES (?,?,?,TRUE);" ;

                //update user_progress set tutorial_finished = true;


                $stmt = $this->conn->prepare($sql);

                $stmt->bind_param('iii', $user_id, $tutorial_id, $correct_answers);

                return $stmt->execute();
            }

            $sql = "INSERT INTO user_progress
                  (user_id, tutorial_id, progress)
                  VALUES (?,?,?);" ;

            //insert into user_progress values (1,2,20);


            $stmt = $this->conn->prepare($sql);

            $stmt->bind_param('iii', $user_id, $tutorial_id, $correct_answers);

            return $stmt->execute();

        }

    }

    function getProgress($user_id, $tutorial_id){

        $sql = "SELECT progress
                  from user_progress
                  WHERE user_id=? AND tutorial_id=?;" ;

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param('ii', $user_id, $tutorial_id);

        $stmt->execute();

        $result = $stmt->get_result();

        $row = $result->fetch_assoc();

        if($row['progress'] == NULL){
            return 0;
        }

        return $row['progress'];
    }

}

?>
