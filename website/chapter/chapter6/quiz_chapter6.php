<?php
ini_set('display_errors',1); ini_set('display_startup_errors',1);

define('IN_PHPBB', true);
$phpbb_root_path = '/usr/share/phpBB3/';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();

if($user->data['is_registered']){

?>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)"
      xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../../css/foundation.css" />
    <script src="../../js/vendor/modernizr.js"></script>
    <script src="../../js/vendor/jquery.js"></script>
    <script src="../../js/foundation.min.js"></script>
    <script src="../../js/vendor/jquery.cookie.js"></script>
    <title> <?php echo "Chapter 5 Quiz for " . $user->data['username']; ?> </title>
</head>
<body>
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
                                        <a href="../chapter2/quiz_chapter2.php">Quiz 2</a>
                                    </li>
                                    <li>
                                        <a href="../chapter3/quiz_chapter3.php">Quiz 3</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><label>Advanced</label></li>
                                    <li>
                                        <a href="../chapter4/quiz_chapter4.php">Quiz 4</a>
                                    </li>
                                    <li>
                                        <a href="../chapter5/quiz_chapter5.php">Quiz 5</a>
                                    </li>
                                    <li>
                                        <a href="../chapter6/quiz_chapter6.php">Quiz 6</a>
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
        <h1>Chapter 6: Questions</h1>
        <div class="split">
            <br>
        </div>


        <form method="post" action="check_chapter6.php">
            <label for="answer[1]" ><b>Question 1: Can you use a function without an object?</b></label>
            <br>
            <input type="checkbox" id="answer[1]" name="answer1[0]" value=-1 >Yes, if you use alert(), than it is a function without an object.
            <br>
            <input type="checkbox" name="answer1[1]" value=1 >No, because you use window as an default object if no object is specified.
            <br>
            <input type="checkbox" name="answer1[2]" value=-1 >Javascript isn't an object oriented programming language. Objects doesn't exist.
            <br>
            <input type="checkbox" name="answer1[3]" value=-1 >You have to type document before a function. There is only this object.
            <br>
            <br>
            <label for="answer[2]" ><b>Question 2: Which functions do you know to print text?</b></label>
            <br>
            <input type="checkbox" id="answer[2]" name="answer2[0]" value=1 >alert() from object window.
            <br>
            <input type="checkbox" name="answer2[1]" value=1 >write() from object document.
            <br>
            <input type="checkbox" name="answer2[2]" value=-1 >post() from object window.
            <br>
            <input type="checkbox" name="answer2[3]" value=1 >log() from object window.
            <br>
            <br>
            <label for="answer[3]" ><b>Question 3: What does the . do?</b></label>
            <br>
            <input type="checkbox" id="answer[3]" name="answer3[0]" value=-1 >It's only a separator without meaning.
            <br>
            <input type="checkbox" name="answer3[1]" value=-1 > This is a common typo. The . isn't used in Javascript.
            <br>
            <input type="checkbox" name="answer3[2]" value=1 >It's indicating that the following belongs to the
            <br>
            <input type="checkbox" name="answer3[3]" value=-1 >The . concatenates two strings
            <br>
            <br>
            <label for="answer[4]"><b>Question 4:Which methods allow you to select a html element?</b></label>
            <br>
            <input type="checkbox" id="answer[4]" name="answer4[0]" value=1 >document.getElementById(id)
            <br>
            <input type="checkbox" name="answer4[1]" value=1 >document.getElementsByName[Index](name)
            <br>
            <input type="checkbox" name="answer4[2]" value=1 >document.getElementByClassName[Index](name)
            <br>
            <input type="checkbox" name="answer4[3]" value=-1 >You can't select an html tag with javascript
            <br>
            <br>
            <label for="answer[5]"" ><b>Question 5:How can you print messages inside the console tag from the debugger?</b></label>
            <br>
            <input type="checkbox" id="answer[5]"  name="answer5[0]" value=-1>log.console()
            <br>
            <input type="checkbox" name="answer5[1]" value=-1 >You can only print on your website.
            <br>
            <input type="checkbox" name="answer5[2]" value=1 >console.log()
            <br>
            <input type="checkbox" name="answer5[3]" value=-1 >log()
            <br>
            <br>
            <div class="row">
                <div class="columns pagination-centered">
                    <input type="submit" class="button round" value="Check your answers!">
                </div>
            </div>

        </form>

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