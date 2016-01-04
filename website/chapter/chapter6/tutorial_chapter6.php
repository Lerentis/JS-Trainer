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
    <title> <?php echo "Chapter 6 for " . $user->data['username']; ?> </title>
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
                                        <a href="quiz_chapter1.php">Quiz 1</a>
                                    </li>
                                    <li>
                                        <a href="quiz_chapter2.php">Quiz 2</a>
                                    </li>
                                    <li>
                                        <a href="quiz_chapter3.php">Quiz 3</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><label>Advanced</label></li>
                                    <li>
                                        <a href="quiz_chapter4.php">Quiz 4</a>
                                    </li>
                                    <li>
                                        <a href="quiz_chapter5.php">Quiz 5</a>
                                    </li>
                                    <li>
                                        <a href="quiz_chapter6.php">Quiz 6</a>
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
        <h1>Chapter 6: Fun with text messages in your page</h1>
        <div class="split">
            <br>
        </div>
        <article>
            <h3>JavaScript Functions</h3>
            <div class="split">
                <br>
            </div>
            Now we are going to learn our first useful lines of code. If you want to change, show or manipulate the text of your side with javascript, you will need a function to do so. <br>
            A function in Javascript follows a simple pattern, where the specific function is called by:
            <div class="split">
                <br>
            </div>
            <p><img  height="15" width="15" hspace="20">
                <span class="script">Object</span>.<span class="keyword">FunctionName</span>(<span class="number">Parameter</span>);<br>
            </p>
            <div class="split">
                <br>
            </div>
            There are some functions in JavaScript where you don't have to write the Object of the Class that inheres the function. alert() for example, but we will do here just for clarification purposes ;)
            <div class="split">
                <br>
            </div>
        </article>
        <article>
            <h3>window.alert() - or how to annoy the user</h3>
            <div class="split">
                <br>
            </div>
            You know them. The tiny little windows which pop up on a side and want to give you a full workout for your mousetabbing finger. Therefore use them carefully and only when it is really important to cache your users attention. It's also a god for debugging uses.
            <div class="split">
                <br>
            </div>
            <div class="row">
                <div class="small-3 columns small-centered">
                    <a  href="live_editor_chapter6_part1.php" target="_blank">
                        <div class="button primary round radius text-center expand">
                            Try It!
                        </div>
                    </a>
                </div>
            </div>
            <div class="split">
                <br>
            </div>
            <span class="impor">Remember:</span><br>
            window.alert() means object.method(). You are using an object of type window and use it's method alert().
            <div class="split">
                <br>
            </div>
        </article>
        <article>
            <h3>How to manipulate a page more directly</h3>
            <div class="split">
                <br>
            </div>
            Instead of presenting every change trough a window you could present your message within a script tag. This ist achieved with the <span class="impor"> document.write()</span> command.
            <div class="split">
                <br>
            </div>
            <div class="row">
                <div class="small-3 columns small-centered">
                    <a  href="live_editor_chapter6_part2.php" target="_blank">
                        <div class="button primary round radius text-center expand">
                            Try It!
                        </div>
                    </a>
                </div>
            </div>
            <div class="split">
                <br>
            </div>
            But like mentioned in chapter 5 this would scatter your html tags all over your code and shouldn't be used. Instead you could directly modify the content of an html tag with the innerHTML() method. This needs an object witch it can modify at first. The document class has three different methods to search a html tag and returns an object. <br>
            While ID is an unique identifier, Name and Class are not. That means you can have multiple elements with the same name and / or class. In comprehension of this behavior, the two functions for name and class return an array of matches, which we can sort in our programming logic.
            <div class="split">
                <br>
            </div>
            <ul>
                <ul>
                    <li><span class="script">document</span>.<span class="keyword">getElementById</span>(<span class="number">id</span>)</li>
                    <li><span class="script">document</span>.<span class="keyword">getElementsByName</span>[Index](<span class="number">name</span>)</li>
                    <li><span class="script">document</span>.<span class="keyword">getElementByClassName</span>[Index](<span class="number">name</span>)</li>
                </ul>
            </ul>
            <div class="split">
                <br>
            </div>
            <div class="row">
                <div class="small-3 columns small-centered">
                    <a  href="live_editor_chapter6_part3.php" target="_blank">
                        <div class="button primary round radius text-center expand">
                            Try It!
                        </div>
                    </a>
                </div>
            </div>
            <div class="split">
                <br>
            </div>
            <span class="impor">Notice</span>: There is no method which allows you to search for the name value of an html tag.
            <div class="split">
                <br>
            </div>
        </article>
        <article>
            <h3>Less for the user  more use for you – console.log()</h3>
            <div class="split">
                <br>
            </div>
            Maybe you won't make ever any mistake while using javascript. Congratulations and skip the rest from the chapter :D<br>
            For the rest of us there ist a quite handy tool called the debugging tool. Each browser has one. Simply press F12 or click right an click „inspect Element“. Next the inspector tag you will see a tag called console. With javascript you can directly send the output from a variable there. Also you can read error messages if your code simply doesn't work. The nice command is <span class="impor">console.log()</span>.
            <div class="split">
                <br>
            </div>
            <div class="row">
                <div class="small-3 columns small-centered">
                    <a  href="live_editor_chapter6_part4.php" target="_blank">
                        <div class="button primary round radius text-center expand">
                            Try It!
                        </div>
                    </a>
                </div>
            </div>
            <div class="split">
                <br>
            </div>
        </article>
        <article>
            <h3>Finished</h3>
            <div class="split">
                <br>
            </div>
            Looks like you have reached the end of things we can teach you here. You can go back to other chapters and recap the lectures there to finish up your knowledge in the Quizes. If you have mastered them already as well please check out our Forum to help other users with programming problems or tell us what you would like to know about JavaScript, what we have not yet taught you here. JavaScript is huge and the world of programming is a lot more than "just" JavaScript. Keep learning and keep coding ;-)
            <div class="split">
                <br>
            </div>
        </article>
        <div class="row">
            <div class="columns pagination-centered">
                <ul class="button-group round ">
                    <li>
                        <a href="#" class="button secondary" >Test Knowledge</a>
                    </li>

                    <li>
                        <a href="../../user.php" class="button secondary">Profile</a>
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