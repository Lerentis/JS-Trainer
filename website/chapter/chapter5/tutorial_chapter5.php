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
        <title> <?php echo "Chapter 5 for " . $user->data['username']; ?> </title>
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
            <h1>Chapter 5: Javascript implementation or where to put the toolbox</h1>
            <div class="split">
                <br>
            </div>
            <article>
                <h3>The Script tag</h3>
                <div class="split">
                    <br>
                </div>
                Remember basic structure of an html document from the previous examples.<br>
                Javascript can be helpful. But where should you insert your code. At first we introduce the html script tag. It ist needed for interaction between html and javascript. Like most tags the structure ist opening tag and closing tag
                <div class="split">
                    <br>
                </div>
                <div class="panel">
                    <p><img  height="15" width="15" hspace="20">
                        <span class="script">&lt;script&gt;</span> CODE <span class="script">&lt;&#47;script&gt;</span> <br>
                    </p>
                </div>
                <div class="split">
                    <br>
                </div>
                This tag can be placed in the head or the body tag of the side.You can place it everywhere  and multiple scripttags there. But it is a good idea to keep the code together in one section of your side. You easily lost the track of your code if you scatter it around. If you place the tag in the body tag, you can improve your page loading speed, because it is not blocked by other script loading.
                <div class="split">
                    <br>
                </div>
                <div class="row">
                    <div class="small-3 columns small-centered">
                        <a  href="live_editor_chapter5_part1.php" target="_blank">
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
                <h3>Excluding Javascript</h3>
                <div class="split">
                    <br>
                </div>
                The above methods closely connect the side with the javascript code. For more separation between html and javascript you can save your code in external files. This files have the extension .js and no script tag ist allowed in this file. You have to use the src (=source) attribute to insert the external file in your side like this.
                <div class="split">
                    <br>
                </div>
                <div class="panel">
                    <p><img  height="15" width="15" hspace="20">
                        <span class="script">&lt;script</span><span class="keyword"> src= </span>"<span class="number">externalJavascriptFile.js</span>"<span class="script"> &gt;</span><span class="script">&lt;&#47;script&gt;</span> <br>
                    </p>
                </div>
                <div class="split">
                    <br>
                </div>
                But for learning advantages we will use the javascript code inside the html side.
                Sometimes you may see the style=“text/javascript“ attribute within a script tag. That's nice, but since html5 javascript is the default script language and therefore the attribute isn't needed anymore. Of course if you don't use html5 you have to indicate, that you are going to use javascript.
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
                            <a href="../chapter6/tutorial_chapter6.php" class="button secondary">Next Chapter</a>
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