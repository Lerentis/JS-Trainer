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
<!--[if IE 9]>
<html class="lt-ie10" lang="en"> <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <title>Try It</title>
    <link rel="stylesheet" href="../../css/foundation.css"/>
    <script src="../../js/vendor/modernizr.js"></script>
</head>
<body>
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
                        <a href="../chapter1/quizz_chapter1.php">Quiz 1</a>
                    </li>
                    <li>
                        <a href="../chapter2/quizz_chapter2.php">Quiz 2</a>
                    </li>
                    <li>
                        <a href="../chapter3/quizz_chapter3.php">Quiz 3</a>
                    </li>
                    <li class="divider"></li>
                    <li><label>Advanced</label></li>
                    <li>
                        <a href="../chapter4/quizz_chapter4.php">Quiz 4</a>
                    </li>
                    <li>
                        <a href="../chapter5/quizz_chapter5.php">Quiz 5</a>
                    </li>
                    <li>
                        <a href="../chapter6/quizz_chapter6.php">Quiz 6</a>
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
<script src="../../js/vendor/jquery.js"></script>
<script src="../../js/foundation.min.js"></script>
<script>
    $(document).foundation();
    var doc = document.documentElement;
    doc.setAttribute('data-useragent', navigator.userAgent);
</script>
<iframe class="mainContent" src="../../js/liveeditor/chapter_four/part_three/live_editor_frame.html" width="100%" height="80%" style="float:top"></iframe>
</body>
</HTML>
    <?php
}else{
    header('refresh:0,../../index.php');
}
?>