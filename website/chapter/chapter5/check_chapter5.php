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

    $question=2;
    $max_points=3;
    $tutorial=5;

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
        $percentage=100/$max_points*$sum;

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
                                        <a href="../chapter1/tutorial_chapter1.php">Lesson 1</a>
                                    </li>
                                    <li>
                                        <a href="../chapter2/tutorial_chapter2.php">Lesson 2</a>
                                    </li>
                                    <li>
                                        <a href="../chapter3/tutorial_chapter3.php">Lesson 3</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><label>Advanced</label></li>
                                    <li>
                                        <a href="../chapter4/tutorial_chapter4.php">Lesson 4</a>
                                    </li>
                                    <li>
                                        <a href="../chapter5/tutorial_chapter5.php">Lesson 5</a>
                                    </li>
                                    <li>
                                        <a href="../chapter6/tutorial_chapter6.php">Lesson 6</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="../../user.php">See all →</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li class="has-dropdown">
                                <a href="#">Select Quizes</a>
                                <ul class="dropdown">
                                    <li><label>Startes</label></li>
                                    <li>
                                        <a href="#">Quiz 1</a>
                                    </li>
                                    <li>
                                        <a href="#">Quiz 2</a>
                                    </li>
                                    <li>
                                        <a href="#">Quiz 3</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><label>Advanced</label></li>
                                    <li>
                                        <a href="#">Quiz 4</a>
                                    </li>
                                    <li>
                                        <a href="#">Quiz 5</a>
                                    </li>
                                    <li>
                                        <a href="#">Quiz 6</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li class="has-dropdown">
                                <a href="#"> <?php echo $user->data['username']; ?> </a>
                                <ul class="dropdown">
                                    <li>
                                        <a href="http://127.0.0.1:80/memberlist.php?mode=viewprofile&u=<?php echo $user->data['user_id'] ?>">Profile</a>
                                    </li>
                                    <li>
                                        <a href="http://127.0.0.1:80/ucp.php?i=pm&folder=inbox">Inbox</a>
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
            <p><b>Question 1:What tag is needed to indicate javascript in html?</b></p>
            <ul>
                <li  id="answer1[0]" hidden> &lt;javascript&gt;&lt;/javascript&gt;</li>
                <li  id="answer1[1]" hidden> &lt;script&gt;&lt;/script&gt; with any html version.</li>
                <li  id="answer1[2]" hidden> &lt;script&gt;&lt;/script&gt; since html version 5.x.</li>
                <li  id="answer1[3]" hidden> &lt;script type=text/javascript&gt;&lt;/script&gt; any html version</li>
            </ul>
            <p><b>Question 2:Which attribute can incluede an external Javascript field?</b></p>
            <ul>
                <li  id="answer2[0]" hidden> src</li>
                <li  id="answer2[1]" hidden> src()</li>
                <li  id="answer2[2]" hidden> type</li>
                <li  id="answer2[3]" hidden> type() </li>
            </ul>

        </article>


        <div class="split">
            <br>
        </div>
        <div class="row">
            <div class="small-3 columns small-centered">
                <a  href="live_editor_chapter1_part1.php" target="_blank">
                    <div class="button primary round radius text-center expand">
                        Try It!
                    </div>
                </a>
            </div>
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
                                <a href="#">Link 2</a>
                            </li>
                            <li>
                                <a href="#">Link 3</a>
                            </li>
                            <li>
                                <a href="#">Link 4</a>
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
