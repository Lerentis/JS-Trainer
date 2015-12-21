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
        <article>
            <h3>Variables</h3>
            Maybe you remember the term variable from math class. You have a charakter wich can take different values. But the same charakter can be reused multiple times in a calculation with the same value. Programming code can be very long. Reusing is a god concept keeping complicated code a little less complicatet. You declare a varable with the keyword var.

            CODE GOES HERE

        </article>
        <article>
            <h3>Oh, there are different types of variables!</h3>
            Java Script handles Data Types implicit, but that does not mean they don't exist here as well. Some of you might ask now what are even Data Types?
            Data Types are some what an agreement on which form a given variable or data has to be, to perform something with them. There are 5 basic Data Types in Java Script: <br>
            <ul>
                <br>
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
                    <li>object Function</li>
                    <li>Object</li>
                </ul>
            </ul>
        </article>
        <article>
            <h3>Why data types? or they can't be all the same.</h3>
            In school you have mathematics and language lessosns. You can't use the same rules for numbers an words. The same goes for a programming language. A program has to know if it should add two numbers or concatenate two words, which are called strings in computer languages.
            <br>
            CODE GOES HERE
            <br>
        </article>
        <article>
            <h3>Dynamic type binding or var realy means variable</h3>

            Java isn't Javascript. Types are a god way demonstrating it. In Java you have to declare your variable type at the beginning. If you try to store a word in a variable of kind integer, which only stores whole numbers, you get a wrong type error. Javascript ist way more flexible. Once your variable is a String, the other time the same variable is a number, next time you'll met it as a boolean object. Sounds nice but is also a way of tiny little nasty errors which can make you nearly insane. What may be really helpful ist the operator typeof. It allows you to check the type of a variable. I guess you didn't foreseen this ;)

            CODE GOES HERE
        </article>
        <article>
            <h3>Strings, not the instruments</h3>
            A string is a group of character or a single one. If you want to indicate, that you want to save a string in a variable, you have to indicate this with single or double quotes.
            <br>
            CODE GOES HERE
            <br>
            You can use quotes inside a string, but the surrounding quotes must not math the quotes inside.
        </article>

        <aricle>
            <h3>Numbers, you can count on them</h3>
            If you save a number surrounded by quotes. Than it is a string. But if you need a number you have to save it without it. Numbers can be whole and with floating point.
            <br>
            CODE GOES HERE
            <br>
            Notice: never use a comma when you mean a floating point number. It simply doesn't work.
        </aricle>
        <article>
            <h3>Booleans, the extremists</h3>
            Variables should be variable. The booleans are a little bit less variable. Exactly they have two kinds of values. True or False. Not much variability but at least a little ;) They are used to state if an expression is true or false. They are like a talking partner which only answers yes or no.
            <br>
            CODE GOES HERE
            <br>
        </article>
        <article>
            <h3>Arrays, the grouper</h3>
            There are times when you want to group variables. You can do this by writing all the variables in one direction or you use an array. These little helpers can group different information inside a variable. Because a group builds up walls around his environment the array uses the square bracket, but to have a little bit more space between each other they separate each one of them with a comma.
            <br>
            CODE GOES HERE
            <br>
            Programmers are a strange kind of people. Therefore they start counting the index from zero. Maybe this is the first time you here this, but definitely not the last time ...
        </article>
        <article>
            <h3>The objects, watch them</h3>
            { : , : } looks a little bit like an UFO for you? Great, you've got your syntax for creating an object with curly brackets. Inside the round brackets are pairs of name:value separated by a comma.
            <br>
            CODE GOES HERE
            <br>
        </article>
        <aricle>
            <h3>Undefined doesn't mean empty</h3>
            I've you only declare a variable but doesn't use the equal sign to sign a value to it typeof will return undefined. Javascript doesn't know which type the variable has. I've you use the quotation marks to indicate a string but doesn't type any character, you really initialise a empty variable of type string but this variable knows that it is a string. Also you could sign undefined to a variable and it's of type undefine.
        </aricle>
        <article>
            <h3>Null, nothing but with type object</h3>
            And there is null ... Null means really nothing in Javascript but with the type object.
        </article>


        <article>
            <h3>Coming soon ...</h3>
            That's a lot of information but now this chapter is done. Remember those types and go on with the more interesting stuff.
            Next time we'll see what a function is and how we declare it.
        </article>


        </article>
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