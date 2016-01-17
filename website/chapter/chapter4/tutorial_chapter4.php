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
        <h1>Chapter 4: What can you do with javascript?</h1>
        <div class="split">
            <br>
        </div>
        <article>
            <h3>Where to put JavaScript?</h3>
            <div class="split">
                <br>
            </div>
            <!--Img: Big Why with question mark-->
            Congratulations, you are able to use a webbrowser an lost your way to this side. Maybe it was an accident but if not you possibly want to learn why for heavens sake you should learn a new language beside html and css. Maybe you've already learned a server based language like php, but, as the word server word suggests, happens on the server. There ist the user, which ist called a client.l If you want to control his experience, you should use a client side language. For example you can test data on the server, but the way would be: <br>
            client → server → datatesting → server → client . <br>
            With Javascript it looks more like: <br>
            client → datatesting → client<br>
            <div class="split">
                <br>
            </div>
            We are skipping the server side here.
            <div class="split">
                <br>
            </div>
            </article>
        <article>
            <h3>Testing an Inputfield</h3>
            <div class="split">
                <br>
            </div>
            We will demonstrate this in a example below. An input field ist tested if it is empty or not. You don't need to understand every single line. Grab what you can. We explain a lot of details later.
            <div class="split">
                <br>
            </div>
            <div class="row">
                <div class="small-3 columns small-centered">
                    <a  href="live_editor_chapter4_part1.php" target="_blank">
                        <div class="button primary round radius text-center expand">
                            Try It!
                        </div>
                    </a>
                </div>
            </div>
            <div class="split">
                <br>
            </div>
            Remember the basic structure of most html elements.
            <div class="split">
                <br>
            </div>
            <div class="panel">
                <p><img  height="15" width="15" hspace="20">
                    <span class="script">&lt;tagname</span> <span class="keyword"> attribute </span> = <span class="number"> value </span> , ... <span class="script"> > </span>content goes here <span class="script">&lt;/tagname&gt;</span>
                </p>
            </div>
            <div class="split">
                <br>
            </div>
        </article>
        <article>
            <h3>Manipulate html tags and content</h3>
            <div class="split">
                <br>
            </div>
            And what else? Maybe you've recognised that a pure html side with css is very static, there aren't the fancy boinzing and moving pictures. Well those things can be done, too. But before we are making a new wining motion full website we are simpling changing the appearing text with a click on a html button.
            <div class="split">
                <br>
            </div>
            <div class="row">
                <div class="small-3 columns small-centered">
                    <a  href="live_editor_chapter4_part2.php" target="_blank">
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
            <h3>Manipulate html attribute</h3>
            <div class="split">
                <br>
            </div>
            More fancy stuff can be done with changing attributes. We will now change with a click on an image the image. And will change from night to day. Horray, we are the master of time. At least on a webpage ;)
            <div class="split">
                <br>
            </div>
            <div class="row">
                <div class="small-3 columns small-centered">
                    <a  href="live_editor_chapter4_part3.php" target="_blank">
                        <div class="button primary round radius text-center expand">
                            Try It!
                        </div>
                    </a>
                </div>
            </div>
            <div class="split">
                <br>
            </div>
            Remember the basic css syntax:
            <div class="split">
                <br>
            </div>

            <p>
                <span class="script">Selector1</span> ( <span class="keyword">tag, .class, #id</span>[,<span class="script">selector2</span>[,…] <br>
                { <br>
                <span class="script"> (Declaration) </span> <span class="keyword"> property</span>:<span class="number">value</span> ; <br>
                <span class="script"> (next Declaration) </span> <span class="keyword"> property1</span>:<span class="number">value</span>; ... <br>
                } <br>
            </p>
            <div class="split">
                <br>
            </div>
            Don't forget a semicolon at every end of line!!!!!
            <div class="split">
                <br>
            </div>
        </article>
        <article>
            <h3>Manipulate css</h3>
            <div class="split">
                <br>
            </div>
            Ok, we can change content and attributes, but the actual style is done by css. Fortunately javascript enables us to change this language, too.
            <div class="split">
                <br>
            </div>
            <div class="row">
                <div class="small-3 columns small-centered">
                    <a  href="live_editor_chapter4_part4.php" target="_blank">
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
            <h3>Coming soon ...</h3>
            <div class="split">
                <br>
            </div>
            Your first glimpse on the language are done. Maybe you've already seen the big toolbox you are going to get. Have fun and learn. You could be the one, who saves a page from really bad experience. There are still enough of them in the wild, wild web :D
        </article>
        <div class="split">
            <br>
        </div>
        <div class="row">
            <div class="columns pagination-centered">
                <ul class="button-group round ">
                    <li>
                        <a href="quiz_chapter4.php" class="button secondary" >Test Knowledge</a>
                    </li>

                    <li>
                        <a href="../chapter5/tutorial_chapter5.php" class="button secondary">Next Chapter</a>
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