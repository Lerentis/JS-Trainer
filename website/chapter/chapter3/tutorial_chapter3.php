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
    <script>document.title = "Javascript Tutorial Two for " + (getCoockieValue("username"))</script>
</head>
<body>
<div class="row">
    <div class="large-12 columns">
        <div class="row">
            <div class="large-12 columns">
                <nav class="top-bar" data-topbar>
                    <ul class="title-area">
                        <li class="name">
                            <h1><a href="../../user.html">Learn JavaScript within minutes</a></h1>
                        </li>
                        <li class="toggle-topbar menu-icon">
                            <a href="#"><span>menu</span></a>
                        </li>
                    </ul>
                    <section class="top-bar-section">
                        <ul class="right">
                            <li class="divider"></li>
                            <li class="has-dropdown">
                                <a href="#">Main Item 1</a>
                                <ul class="dropdown">
                                    <li><label>Section Name</label></li>
                                    <li class="has-dropdown">
                                        <a class="" href="#">Has Dropdown, Level 1</a>
                                        <ul class="dropdown">
                                            <li>
                                                <a href="#">Dropdown Options</a>
                                            </li>
                                            <li>
                                                <a href="#">Dropdown Options</a>
                                            </li>
                                            <li>
                                                <a href="#">Level 2</a>
                                            </li>
                                            <li>
                                                <a href="#">Subdropdown Option</a>
                                            </li>
                                            <li>
                                                <a href="#">Subdropdown Option</a>
                                            </li>
                                            <li>
                                                <a href="#">Subdropdown Option</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Dropdown Option</a>
                                    </li>
                                    <li>
                                        <a href="#">Dropdown Option</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><label>Section Name</label></li>
                                    <li>
                                        <a href="#">Dropdown Option</a>
                                    </li>
                                    <li>
                                        <a href="#">Dropdown Option</a>
                                    </li>
                                    <li>
                                        <a href="#">Dropdown Option</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">See all →</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">Main Item 2</a>
                            </li>
                            <li class="divider"></li>
                            <li class="has-dropdown">
                                <a href="#">Main Item 3</a>
                                <ul class="dropdown">
                                    <li>
                                        <a href="#">Dropdown Option</a>
                                    </li>
                                    <li>
                                        <a href="#">Dropdown Option</a>
                                    </li>
                                    <li>
                                        <a href="#">Dropdown Option</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">See all →</a>
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

            <h3>Variables</h3>
            Maybe you remember the term variable from math class. You have a charakter wich can take different values. But the same charakter can be reused multiple times in a calculation with the same value. Programming code can be very long. Reusing is a god concept keeping complicated code a little less complicatet. You declare a varable with the keyword var.

            CODE GOES HERE


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
                    <li>objectFunction</li>
                    <li>Object</li>
                </ul>
            </ul>
            <h3>Why data types? or they can't be all the same.</h3>
            In school you have mathematics and language lessosns. You can't use the same rules for numbers an words. The same goes for a programming language. A program has to know if it should add two numbers or concatenate two words, which are called strings in computer languages.

            CODE GOES HERE

            <h3>Dynamic type binding or var realy means variable</h3>

            Java isn't Javascript. Types are a god way demonstrating it. In Java you have to declare your variable type at the beginning. If you try to store a word in a variable of kind integer, wich only stores whole numbers, you get a wrong type error. Javascript ist way more flexible. Once your variable is a String, the other time the same variable is a number, next time you'll met it as a boolean object. Sounds nice but is also a way of tiny little nasty errors wich can make you nearly insane. What may be really helbfull ist the function typeof. It allows you to check the type of a variable. I guess you didn't foreseen this ;)

            CODE GOES HERE

Next time we'll see what a fuction is and how we declare it.



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
                                <a href="#">Link 1</a>
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