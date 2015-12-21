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
    <title> <?php echo "Chapter 4 for " . $user->data['username']; ?> </title>
</head>
<body>
<div class="row">
    <div class="large-12 columns">
        <div class="row">
            <div class="large-12 columns">
                <nav class="top-bar" data-topbar>
                    <ul class="title-area">
                        <li class="name">
                            <h1><a href="user.php">Learn JavaScript within minutes</a></h1>
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
        <h1>Loops a round thing</h1>
        <div class="split">
            <br>
        </div>
        <article>

            Chapter 1: What can you do with javascript?

            Img: Big Why with question mark

            Congratulations, you are able to use a webbrowser an lost your way to this side. Maybe it was an accident but if not you possibly want to learn why for heavens sake you should learn a new language beside html and css. Maybe you've already learned a server based language like php, but, as the word server word suggests, happens on the server. There ist the user, which ist called a client.l If you want to control his experience, you should use a client side language. For example you can test data on the server, but the way would be:
            client → server →datatesting → server → client .
            With Javascript it looks more like
            client → datatesting → client.

            We've skipped the server side.

            Testing an Inputfield

            We will demonstrate this in a example below. An input field ist tested if it is empty or not. You don't need to understand every single line. Grab what you can. We explain a lot of details later.

            CODE GOES HERE

            Remember the basic structure of most html elements.

            <tagname [[attribute[=value]], ...]> content goes here </tagname>

            Manipulate html tags and content

            And what else? Maybe you've recognised that a pure html side with css is very static, there aren't the fancy boinzing and moving pictures. Well those things can be done, too. But bevore we ar making a new wining motionfull website we are simpling changing the appearing text with a click on a html button.

            CODE GOES HERE

            Manipulate html attribute

            More fancy stuff can be done with changing attributes. We will now change with a click on an image the image. And will change from night to day. Horray, we are the master of time. At least on a webpage ;)
            Code goes here

            Remember the basic css syntax
            Selector1 (tag, .class, #id)[,selector2[,…]
            {
            (Declaration) property:value ;
            [(next Declaration) property1:value; …]
            }

            Don't forget a semicolon at every end of line!!!!!


            Manipulate css

            Ok, we can change content and attributes, but the actual style is done by css. Fortunately javascript enables us to change this language, too.


            CODE GOES HERE

            Your first glimpse on the language are done. Maybe you've already seen the big toolbox you are going to get. Have fun and learn. You could be the one, who saves a page from really bad experience. There are still enough of them in the wild, wild web :D

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