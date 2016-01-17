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

    $question=5;
    $max_points=9;
    $tutorial=6;

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
    <title> <?php echo "Evaluation for Quiz 5 for " . $user->data['username']; ?> </title>

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
            <p><b>Question 1: Can you use a function without an object?</b></p>
            <ul>
                <li  id="answer1[0]" hidden> Yes, if you use alert(), than it is a function without an object. </li>
                <li  id="answer1[1]" hidden> No, because you use window as an default object if no object is specified. </li>
                <li  id="answer1[2]" hidden> Javascript isn't an object oriented programming language. Objects doesn't exist. </li>
                <li  id="answer1[3]" hidden> You have to type document before a function. There is only this object.</li>
            </ul>
            <p><b>Question 2: Which functions do you know to print text?</b></p>
            <ul>
                <li  id="answer2[0]" hidden> alert() from object window. </li>
                <li  id="answer2[1]" hidden> write() from object document. </li>
                <li  id="answer2[2]" hidden> post() from object window. </li>
                <li  id="answer2[3]" hidden> log() from object window.  </li>
            </ul>
            <p><b>Question 3: What does the . do?</b></p>
            <ul>
                <li  id="answer3[0]" hidden> It's only a separator without meaning.  </li>
                <li  id="answer3[1]" hidden> This is a common typo. The . isn't used in Javascript. </li>
                <li  id="answer3[2]" hidden> It's indicating that the following belongs to the left side.</li>
                <li  id="answer3[3]" hidden> The . concatenates two strings. </li>
            </ul>
            <p><b>Question 4: Which methods allow you to select a html element?</b></p>
            <ul>
                <li  id="answer4[0]" hidden> document.getElementById(id)  <br></li>
                <li  id="answer4[1]" hidden> document.getElementsByName[Index](name)  </li>
                <li  id="answer4[2]" hidden> document.getElementByClassName[Index](name)  </li>
                <li  id="answer4[3]" hidden> You can't select an html tag with javascript   </li>
            </ul>
            <p><b>Question 5:How can you print messages inside the console tag from the debugger.</b></p>
            <ul>
                <li  id="answer5[0]" hidden> log.console() </li>
                <li  id="answer5[1]" hidden> You can only print on your website.  </li>
                <li  id="answer5[2]" hidden> console.log()</li>
                <li  id="answer5[3]" hidden> log() </li>
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
