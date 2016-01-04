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
    <title> <?php echo "Chapter 4 Quiz for " . $user->data['username']; ?> </title>
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
                                        <a href="../chapter1/quiz_chapter1.php">Quiz 1</a>
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
                                        <a href="#">Quiz 4</a>
                                    </li>
                                    <li>
                                        <a href="../chapter5/quiz_chapter5.php">Quiz 5</a>
                                    </li>
                                    <li>
                                        <a href="../chapter6/quiz_chapter6.php">Quiz 6</a>
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
        <h1>Chapter 4: Questions</h1>
        <div class="split">
            <br>
        </div>


        <form method="post" action="check_chapter4.php">
            <label for="answer[1]" ><b>Question 1:Where ist plain javascript executed?</b></label>
            <br>
            <input type="radio" id="answer[1]" name="answer[1]" value=0 > On the server side.
            <br>
            <input type="radio" name="answer[1]" value=1 > In the browser from the client.
            <br>
            <input type="radio" name="answer[1]" value=0 > It's a script language which doesn't need to be executed
            <br>
            <input type="radio" name="answer[1]" value=0 > On server an client side.
            <br>
            <br>
            <label for="answer[2]" ><b>Question 2:What can you manipulate with javascript?(multi)</b></label>
            <br>
            <input type="radio" id="answer[2]" name="answer[2][0]" value=1 > html attributes, tags and content.
            <br>
            <input type="radio" name="answer[2][1]" value=1 > CSS style.
            <br>
            <input type="radio" name="answer[2][2]" value=0 > The server.
            <br>
            <input type="radio" name="answer[2][3]" value=1 > The logic of a website client based.
            <br>
            <br>
            <label for="answer[6]" ><b>Question 3: Why should you check if an input field ist filled or not?</b></label>
            <br>
            <input type="radio" id="answer[6]" name="answer[6]" value=0 > You don't need to chlableeck an input field. It's useless.
            <br>
            <input type="radio" name="answer[6]" value=0 > You don't need to check an input field. It's automatically checked.
            <br>
            <input type="radio" name="answer[6]" value=1 > If you need the content of this field you should check if it's filled or not.
            <br>
            <input type="radio" name="answer[6]" value=0 > That's not possible with Javascript.
            <br>
            <br>
            <label for="answer[7]"><b>Question 4:Which property changes or gets the content of an html tag?</b></label>
            <br>
            <input type="radio" id="answer[7]" name="answer[7]" value=1 > element.innerHTML, but you should use element.textContent for security reasons.
            <br>
            <input type="radio" name="answer[7]" value=0 > It's html. You can only manipulate html with html.
            <br>
            <input type="radio" name="answer[7]" value=0 > innerHTML changes or gets only the text content of an html tag.
            <br>
            <input type="radio" name="answer[7]" value=0 > You can get the text content with a css function.
            <br>
            <br>
            <label for="answer[8]"" ><b>Question 5:Which keyword is used to change the appearance with Javascript?</b></label>
            <br>
            <input type="radio" id="answer[8]"  name="answer[8]" value=0>We haven't read anything about changing the appearance of an html element.
            <br>
            <input type="radio" name="answer[8]" value=0 >You shouldn't change the appearance of a website.
            <br>
            <input type="radio" name="answer[8]" value=1 >With style you can change the appearance of an element.
            <br>
            <input type="radio" name="answer[8]" value=0 >You can change the appearance only with css.






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