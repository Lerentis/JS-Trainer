<?php
ini_set('display_errors',1); ini_set('display_startup_errors',1);

define('IN_PHPBB', true);
$phpbb_root_path = '/usr/share/phpBB3/';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include('../../php/include/db_connect.php');
// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();

if($user->data['is_registered']){

    $question=$request->variable('quiz',0);
    $max_points=$request->variable('points',0);

    $tutorial=2;

    for($i=1;$i<=$question; $i++){
        $array_name =$i;
        $answer[$i] = $request->variable('answer' . $array_name, array(0));
    }

    $sum=0;
    $percentage=0;


    for($i = 1; $i<=count($answer); $i++)
        $sum_answer[$i]=array_sum($answer[$i]);

    for($i = 1; $i<=count($sum_answer); $i++)
        $sum+=$sum_answer[$i];

    if($sum > 0)
        $percentage=round(100/$max_points*$sum);

    $db = new db();
    $db->tutorialCompleted($user->data['user_id'],$tutorial,$percentage);

?>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../../css/foundation.css" />
    <script src="../../js/vendor/modernizr.js"></script>
    <script src="../../js/vendor/jquery.js"></script>
    <script src="../../js/foundation.min.js"></script>
    <script src="../../js/vendor/jquery.cookie.js"></script>
    <title> <?php echo "Quizz 4 for " . $user->data['username']; ?> </title>

    <script>
        <?php
        echo "var js_array=[];\n";
            for($i=1;$i<=count($answer); $i++) {
                $json_array[$i] = json_encode($answer[$i]);
                $name = "js_array[".$i."]=";
                echo $name.$json_array[$i] . ";\n";
            }
        ?>

        function changeQuiz() {
            for(var question in js_array) {
                for (var answer in js_array[question]) {
                    console.log('x:' + answer);
                    document.getElementById('answer'+question+'[' + answer + ']').hidden = false;
                    if (js_array[question][answer] != 1)
                        document.getElementById('answer'+question+'[' + answer + ']').style.color = "red";
                    else
                        document.getElementById('answer'+question+'[' + answer + ']').style.color = "green";
                }
            }
        }
    </script>
</head>
<body onload="changeQuiz()">
<div class="row">
    <div class="large-12 columns">
        <div class="row">
            <div class="large-12 columns">
                <nav class="top-bar" data-topbar>
                    <ul class="title-area">
                        <li class="name">
                            <h1><a href="../../user.php">Learn JavaScript within minutes</a></h1>
                        </li>
                        <li class="toggle-topbar menu-icon">
                            <a href="#"><span>menu</span></a>
                        </li>
                    </ul>
                    <section class="top-bar-section">
                        <ul class="right">
                            <li class="divider"></li>
                            <li class="has-dropdown">
                                <a href="#">Select Chapter</a>
                                <ul class="dropdown">
                                    <li><label>Startes</label></li>
                                    <li>
                                        <a href="../../chapter/chapter1/tutorial_chapter1.php">Lesson 1</a>
                                    </li>
                                    <li>
                                        <a href="../../chapter/chapter2/tutorial_chapter2.php">Lesson 2</a>
                                    </li>
                                    <li>
                                        <a href="../../chapter/chapter3/tutorial_chapter3.php">Lesson 3</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><label>Advanced</label></li>
                                    <li>
                                        <a href="../../chapter/chapter4/tutorial_chapter4.php">Lesson 4</a>
                                    </li>
                                    <li>
                                        <a href="../../chapter/chapter5/tutorial_chapter5.php">Lesson 5</a>
                                    </li>
                                    <li>
                                        <a href="../../chapter/chapter6/tutorial_chapter6.php">Lesson 6</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">See all →</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li class="has-dropdown">
                                <a href="#">Select Quizes</a>
                                <ul class="dropdown">
                                    <li><label>Startes</label></li>
                                    <li>
                                        <a href="../../chapter/chapter1/quiz_chapter1.php">Quiz 1</a>
                                    </li>
                                    <li>
                                        <a href="../../chapter/chapter2/quiz_chapter2.php">Quiz 2</a>
                                    </li>
                                    <li>
                                        <a href="../../chapter/chapter3/quiz_chapter3.php">Quiz 3</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><label>Advanced</label></li>
                                    <li>
                                        <a href="../../chapter/chapter4/quiz_chapter4.php">Quiz 4</a>
                                    </li>
                                    <li>
                                        <a href="../../chapter/chapter5/quiz_chapter5.php">Quiz 5</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><label>Advanced</label></li>
                                    <li>
                                        <a href="../../chapter/chapter6/quiz_chapter6.php">Quiz 6</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li class="has-dropdown">
                                <a href="#"> <?php echo $user->data['username']; ?> </a>
                                <ul class="dropdown">
                                    <li>
                                        <a href="http://forum.test.org/memberlist.php?mode=viewprofile&u=<?php echo $user->data['user_id'] ?>">Profile</a>
                                    </li>
                                    <li>
                                        <a href="http://forum.test.org/ucp.php?i=pm&folder=inbox">Inbox</a>
                                    </li>
                                    <li>
                                        <a href="../../php/handle_logout.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </section>
                </nav>
            </div>
        </div>
        <div class="split">
            <br>
        </div>
        <div class="split">
            <br>
        </div>
        <article>
            <h3>Your result:</h3>
            <?php echo "You've got ".$sum." out of ".$max_points." points in your Quiz!<br>That's ".$percentage."% correct"?>

            <br>
            <br>
            <h3>What you answered:</h3>
            <p><b>Question 1: What is a variable?</b></p>
            <ul>
                <li  id="answer1[0]" hidden> It saves a value and can be called later if needed multiple times.</li>
                <li  id="answer1[1]" hidden> It's only known in math science. </li>
                <li  id="answer1[2]" hidden> It's a function. </li>
                <li  id="answer1[3]" hidden> It's a method. </li>
            </ul>
            <p><b>Question 2:What is a variable type in javascript?</b></p>
            <ul>
                <li  id="answer2[0]" hidden> alphabet </li>
                <li  id="answer2[1]" hidden> number </li>
                <li  id="answer2[2]" hidden> String </li>
                <li  id="answer2[3]" hidden> null </li>
            </ul>
            <p><b>Question 3: The + operator can be used with strings and numbers ?</b></p>
            <ul>
                <li  id="answer3[0]" hidden> Yes and with the same effect.  </li>
                <li  id="answer3[1]" hidden> No, they are different types of variables and therefore string needs a different operator </li>
                <li  id="answer3[2]" hidden> Yes, but the effect differs. You can concatenate strings but add number.</li>
                <li  id="answer3[3]" hidden> There is no + operator for strings. </li>
            </ul>
            <p><b>Question 4:If a variables type is set it can't be changed?</b></p>
            <ul>
                <li  id="answer4[0]" hidden> Yes, if a type is set you can't change it later.  <br></li>
                <li  id="answer4[1]" hidden> Javascript has dynamic type binding. Therefore a variable type can be changed later. </li>
                <li  id="answer4[2]" hidden> You can change the type but only if you explicit typecast it.  </li>
                <li  id="answer4[3]" hidden> There are no types in javascript.  </li>
            </ul>
            <p><b>Question 5: Which keyword is needed to assign a variable?</b></p>
            <ul>
                <li  id="answer5[0]" hidden> You don't need one. </li>
                <li  id="answer5[1]" hidden> variable  </li>
                <li  id="answer5[2]" hidden> It depends on which type your variable is.  </li>
                <li  id="answer5[3]" hidden> var </li>
            </ul>



        </article>


        <div class="split">
            <br>
        </div>

        <div class="split">
            <br>
        </div>
        <article>

        </article>
        <div class="split">
            <br>
        </div>

            <div class="row">
                <div class="columns pagination-centered">
                    <ul class="button-group round ">
                        <li>
                            <a href="#" class="button secondary" >Test Knowledge</a>
                        </li>

                        <li>
                            <a href="../chapter2/tutorial_chapter2.php" class="button secondary">Next Chapter</a>
                        </li>
                    </ul>

                </div>
            </div>

        <footer class="row">
            <div class="large-12 columns">
                <hr>
                <div class="row">
                    <div class="large-6 columns">
                    </div>
                    <div class="large-6 columns">
                        <ul class="inline-list right">
                            <li>
                                <a href="../../impressum.php">Impressum</a>
                            </li>
                            <li>
                                <a href="../../datenschutz.php">Datenschutzerklärung</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script>
    $(document).foundation();
    var doc = document.documentElement;
    doc.setAttribute('data-useragent', navigator.userAgent);
</script>
</body>
</html>
    <?php
}else{
    header('refresh:0,../../index.php');
}
?>
