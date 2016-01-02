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
    <title> <?php echo "Chapter 2 for " . $user->data['username']; ?> </title>
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
        <h1>Variables and Data Types</h1>
        <div class="split">
            <br>
        </div>
        <article>
            Welcome back. I'm glad you made it to the second Chapter. <br>
            In this Chapter we will have a closer look on what we did the last time, but first some theories on variables. <br>
        </article>
        <div class="split">
            <br>
        </div>
        <article>
            <h3>Variables</h3>
            <div class="split">
                <br>
            </div>
            Maybe you remember the term variable from math class. You have a character which can take different values. But the same character can be reused multiple times in a calculation with the same value. Programming code can be very long. Reusing is a god concept keeping complicated code a little less complicate. You declare a variable with the keyword <span class="impor">var</span>.
            <div class="split">
                <br>
            </div>
            <div class="row">
                <div class="small-3 columns small-centered">
                    <a  href="live_editor_chapter2_part1.php" target="_blank">
                        <div class="button primary round radius text-center expand">
                            Try It!
                        </div>
                    </a>
                </div>
            </div>
        </article>
        <article>
            <h3>Oh, there are different types of variables!</h3>
            Java Script handles Data Types implicit, but that does not mean they don't exist here as well. Some of you might ask now what are even Data Types?
            Data Types are some what an agreement on which form a given variable or data has to be, to perform something with them. There are 9 basic Data Types in Java Script: <br>
            <div class="split">
                <br>
            </div>
            <ul>
                <ul>
                    <li>Number</li>
                    <li>String</li>
                    <li>array</li>
                    <li>object</li>
                    <li>Boolean</li>
                    <li>null</li>
                    <li>undefined</li>
                    <li>symbol(new since 20115)</li>
                    <li>Host Object</li>
                </ul>
            </ul>
        </article>
        <div class="split">
            <br>
        </div>
        <article>
            <h3>Why data types? Or they can't be all the same.</h3>
            <div class="split">
                <br>
            </div>
            In school you have mathematics and language lessons. You can't use the same rules for numbers an words. The same goes for a programming language. A program has to know if it should add two numbers or concatenate two words, which are called <span class="impor">strings</span> in computer languages.
        </article>
        <div class="split">
            <br>
        </div>
        <article>
            <h3>Dynamic type binding or var really means variable</h3>
            <div class="split">
                <br>
            </div>
            Java isn't Javascript. Types are a god way demonstrating it. In Java you have to <span class="impor">declare </span> your variable type at the beginning. If you try to store a word in a variable of kind <span class="impor">integer </span>, which only stores whole numbers, you get a wrong type error. Javascript is way more flexible. Once your variable is a String, the other time the same variable is a number, next time you'll meet it as a boolean object. Sounds nice but is also a way of tiny little nasty errors which can make you nearly insane. What may be really helpful is the <span class="impor"> operator typeof </span>. It allows you to check the type of a variable. I guess you didn't foreseen this ;) <br>
            Sadly it does not work for everything. The datatype array is treated as an object by JavaScript, so we have to check the constructor for a specific type. This works only for objects thou.
            <div class="split">
                <br>
            </div>
            <div class="row">
                <div class="small-3 columns small-centered">
                    <a  href="live_editor_chapter2_part2.php" target="_blank">
                        <div class="button primary round radius text-center expand">
                            Try It!
                        </div>
                    </a>
                </div>
            </div>
        </article>
        <div class="split">
            <br>
        </div>
        <article>
            <h3>Strings, not the instruments</h3>
            <div class="split">
                <br>
            </div>
            A string is a group of character or a single one. If you want to indicate, that you want to save a string in a variable, you have to indicate this <span class="impor">with single or double quotes </span>.
            <div class="split">
                <br>
            </div>
            <div class="row">
                <div class="small-3 columns small-centered">
                    <a  href="live_editor_chapter2_part3.php" target="_blank">
                        <div class="button primary round radius text-center expand">
                            Try It!
                        </div>
                    </a>
                </div>
            </div>
            <div class="split">
                <br>
            </div>
            You can use quotes inside a string, but the surrounding quotes must not match the quotes inside.
        </article>
        <div class="split">
            <br>
        </div>
        <article>
            <h3>Numbers, you can count on them</h3>
            <div class="split">
                <br>
            </div>
            If you save a number surrounded by quotes. Than it is a string. But if you need a number you have to save it without it. Numbers can be whole and with floating point.
            <div class="split">
                <br>
            </div>
            <div class="row">
                <div class="small-3 columns small-centered">
                    <a  href="live_editor_chapter2_part4.php" target="_blank">
                        <div class="button primary round radius text-center expand">
                            Try It!
                        </div>
                    </a>
                </div>
            </div>
            <div class="split">
                <br>
            </div>
            Notice: <span class="impor">never use a comma when you mean a floating point number </span>. It simply doesn't work.
        </article>
        <div class="split">
            <br>
        </div>
        <article>
            <h3>Booleans, the extremists</h3>
            <div class="split">
                <br>
            </div>
            Variables should be variable. The booleans are a little bit less variable. Exactly they have two kinds of values. <span class="impor">True or False </span>. Not much variability but at least a little ;) They are used to state if an expression is true or false. They are like a talking partner which only answers yes or no.
            <div class="split">
                <br>
            </div>
            <div class="row">
                <div class="small-3 columns small-centered">
                    <a  href="live_editor_chapter2_part5.php" target="_blank">
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
        <div class="split">
            <br>
        </div>
        <article>
            <h3>Arrays, the grouper</h3>
            <div class="split">
                <br>
            </div>
            There are times when you want to group variables. You can do this by writing all the variables in one direction or you use an array. These little helpers can group different information inside a variable. Because a group builds up walls around his environment the array uses the <span class="impor">square bracket </span>, but to have a little bit more space between each other they separate each one of them with a <span class="impor">comma </span>.
            <div class="split">
                <br>
            </div>
            Programmers are a strange kind of people. Therefore they start counting the <span class="impor">index from zero </span>. Maybe this is the first time you here this, but definitely not the last time ...
        </article>
        <div class="split">
            <br>
        </div>
        <article>
            <h3>The objects, watch them</h3>
            <div class="split">
                <br>
            </div>
            { : , : } looks a little bit like an UFO for you? Great, you've got your syntax for creating an Array object with curly brackets. Inside the round brackets are pairs of <span class="impor">name:value </span> separated by a comma.
            <div class="split">
                <br>
            </div>
            <div class="row">
                <div class="small-3 columns small-centered">
                    <a  href="live_editor_chapter2_part6.php" target="_blank">
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
        <div class="split">
            <br>
        </div>
        <article>
            <h3>Undefined doesn't mean empty</h3>
            <div class="split">
                <br>
            </div>
            I've you only declare a variable but doesn't use the equal sign to sign a value to it typeof will return <span class="impor">undefined </span>. Javascript doesn't know which type the variable has. I've you use the quotation marks to indicate a string but doesn't type any character, you really initialise a empty variable of type string but this variable knows that it is a string. Also you could sign undefined to a variable and it's of type undefined.
        </article>
        <div class="split">
            <br>
        </div>
        <article>
            <h3>Null, nothing but with type object</h3>
            <div class="split">
                <br>
            </div>
            And there is null ... Null means really nothing in Javascript but with the <span class="impor">type object </span>. Some people say it is kind of a bug in Javascript, but the programmer just got used to it ;-)
        </article>
        <div class="split">
            <br>
        </div>
        <article>
            <h3>Coming soon ...</h3>
            <div class="split">
                <br>
            </div>
            That's a lot of information but now this chapter is done. Remember those types and go on with the more interesting stuff.
            Next time we'll see what a function is and how we declare it.
        </article>
        <div class="row">
            <div class="columns pagination-centered">
                <ul class="button-group round ">
                    <li>
                        <a href="#" class="button secondary" >Test Knowledge</a>
                    </li>

                    <li>
                        <a href="../chapter3/tutorial_chapter3.php" class="button secondary">Next Chapter</a>
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