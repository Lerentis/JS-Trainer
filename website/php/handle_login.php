<?php

define('IN_PHPBB', true);
$phpbb_root_path = '/usr/share/phpBB3/';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

// Start session management

$user->session_begin();
$auth->acl($user->data);
$user->setup();


$username=$request->variable('username','');

$password=$request->variable('password','');

$result=$auth->login($username,$password , true);

$state = null;

if($result['status'] == LOGIN_SUCCESS ){
    $state = "login success";
    header('refresh:2,../user.php');
}
else{
    $state = "login failed";
    header('refresh:2,../login.php');
}
?>

<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
<head>
	<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <title>Login</title>
    <link rel="stylesheet" href="../css/foundation.css" />
    <!--<script src="../js/vendor/modernizr.js"></script>-->
</head>
<body>
	<div class="row">
    <div class="large-12 columns">
        <div class="row">
            <div class="large-12 columns">
                <nav class="top-bar" data-topbar>
                    <ul class="title-area">
                        <li class="name">
                            <h1><a href="../user.php">Learn JavaScript within minutes</a></h1>
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
                                        <a href="../chapter/chapter1/tutorial_chapter1.php">Lesson 1</a>
                                    </li>
                                    <li>
                                        <a href="../chapter/chapter2/tutorial_chapter2.php">Lesson 2</a>
                                    </li>
                                    <li>
                                        <a href="../chapter/chapter3/tutorial_chapter3.php">Lesson 3</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><label>Advanced</label></li>
                                    <li>
                                        <a href="../chapter/chapter4/tutorial_chapter4.php">Lesson 4</a>
                                    </li>
                                    <li>
                                        <a href="../chapter/chapter5/tutorial_chapter5.php">Lesson 5</a>
                                    </li>
                                    <li>
                                        <a href="../chapter/chapter6/tutorial_chapter6.php">Lesson 6</a>
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
                                        <a href="../chapter/chapter1/quiz_chapter1.php">Quiz 1</a>
                                    </li>
                                    <li>
                                        <a href="../chapter/chapter2/quiz_chapter2.php">Quiz 2</a>
                                    </li>
                                    <li>
                                        <a href="../chapter/chapter3/quiz_chapter3.php">Quiz 3</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><label>Advanced</label></li>
                                    <li>
                                        <a href="../chapter/chapter4/quiz_chapter4.php">Quiz 4</a>
                                    </li>
                                    <li>
                                        <a href="../chapter/chapter5/quiz_chapter5.php">Quiz 5</a>
                                    </li>
                                    <li>
                                        <a href="../chapter/chapter6/quiz_chapter6.php">Quiz 6</a>
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
                                        <a href="handle_logout.php">Logout</a>
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
        <div class="large-3 large-centered columns">
<?php
	echo $state;
?>
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
                                <a href="../impressum.php">Impressum</a>
                            </li>
                            <li>
                                <a href="../datenschutz.php">Datenschutzerklärung</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

</body>
<script src="../js/vendor/jquery.js"></script>
<script src="../js/foundation.min.js"></script>
</html>

