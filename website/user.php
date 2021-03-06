<?php

define('IN_PHPBB', true);
$phpbb_root_path = '/usr/share/phpBB3/';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();

if($user->data['is_registered']){
    include ('php/include/db_connect.php');
    $db = new db();
    $progress = $db->getTotalProgress($user->data['user_id']);
    $maxLessons = $db->getMaxLessons();

?>

<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/foundation/foundation.joyride.js"></script>
    <script src="js/foundation/foundation.slider.js"></script>
    <script src="js/vendor/jquery.cookie.js"></script>
    <title> <?php echo "Hello " . $user->data['username']; ?> </title>
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
                                        <a href="chapter/chapter1/tutorial_chapter1.php">Lesson 1</a>
                                    </li>
                                    <li>
                                        <a href="chapter/chapter2/tutorial_chapter2.php">Lesson 2</a>
                                    </li>
                                    <li>
                                        <a href="chapter/chapter3/tutorial_chapter3.php">Lesson 3</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><label>Advanced</label></li>
                                    <li>
                                        <a href="chapter/chapter4/tutorial_chapter4.php">Lesson 4</a>
                                    </li>
                                    <li>
                                        <a href="chapter/chapter5/tutorial_chapter5.php">Lesson 5</a>
                                    </li>
                                    <li>
                                        <a href="chapter/chapter6/tutorial_chapter6.php">Lesson 6</a>
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
                                        <a href="chapter/chapter1/quiz_chapter1.php">Quiz 1</a>
                                    </li>
                                    <li>
                                        <a href="chapter/chapter2/quiz_chapter2.php">Quiz 2</a>
                                    </li>
                                    <li>
                                        <a href="chapter/chapter3/quiz_chapter3.php">Quiz 3</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><label>Advanced</label></li>
                                    <li>
                                        <a href="chapter/chapter4/quiz_chapter4.php">Quiz 4</a>
                                    </li>
                                    <li>
                                        <a href="chapter/chapter5/quiz_chapter5.php">Quiz 5</a>
                                    </li>
                                    <li>
                                        <a href="chapter/chapter6/quiz_chapter6.php">Quiz 6</a>
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
                                        <a href="php/handle_logout.php">Logout</a>
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
        <div class="row">
            <div class="large-4 small-12 columns">
                <?php
                    if(empty($user->data['user_avatar'])){
                ?>
                        <img src="http://placehold.it/500x500&amp;text=Avatar">
                <?php
                    } else {
                ?>
                      <img src="http://forum.test.org/download/file.php?avatar= <?php echo $user->data['user_avatar']; ?>" height="500" width="500">
                <?php
                    }
                ?>
                <div class="hide-for-small panel">
                    <h3>Hello Again <?php echo $user->data['username']; ?></h3>
                    <h5 class="subheader">Looks like you completed <?php echo round(100 / $maxLessons  * $progress) ?> % of all lessons so far. Keep it up!</h5>
                </div>
                <div class="panel callout radius" id="first-step">
                    <h6>You have <?php echo $maxLessons - $progress ?> lessons to go</h6>
                    <div class="range-slider round" data-slider>
                        <span class="range-slider-handle" role="slider" tabindex="0"></span>
                        <span class="range-slider-active-segment"></span>
                        <input type="hidden">
                    </div>
                </div>
            </div>

            <div class="large-8 columns">
                <div class="row">
                    <div class="large-4 small-6 columns">
                        <a href="chapter/chapter1/tutorial_chapter1.php">
                            <img src="img/1.png">
                        </a>
                        <div class="panel">
                            <h5><a href="chapter/chapter1/tutorial_chapter1.php">Cours JS Part 1</a></h5>
                            <h6 class="subheader"><?php echo $db->getProgress($user->data['user_id'],1) ?> %</h6>
                        </div>
                    </div>
                    <div class="large-4 small-6 columns">
                        <a href="chapter/chapter2/tutorial_chapter2.php">
                            <img src="img/2.png">
                        </a>
                        <div class="panel">
                            <h5><a href="chapter/chapter2/tutorial_chapter2.php">Cours JS Part 2</a></h5>
                            <h6 class="subheader"><?php echo $db->getProgress($user->data['user_id'],2) ?> %</h6>
                        </div>
                    </div>
                    <div class="large-4 small-6 columns">
                        <a href="chapter/chapter3/tutorial_chapter3.php">
                            <img src="img/3.png">
                        </a>
                        <div class="panel">
                            <h5><a href="chapter/chapter3/tutorial_chapter3.php">Cours JS Part 3</a></h5>
                            <h6 class="subheader"><?php echo $db->getProgress($user->data['user_id'],3) ?> %</h6>
                        </div>
                    </div>
                    <div class="large-4 small-6 columns">
                        <a href="chapter/chapter4/tutorial_chapter4.php">
                            <img src="img/4.png">
                        </a>
                        <div class="panel">
                            <h5><a href="chapter/chapter4/tutorial_chapter4.php">Cours JS Part 4</a></h5>
                            <h6 class="subheader"><?php echo $db->getProgress($user->data['user_id'],4) ?> %</h6>
                        </div>
                    </div>
                    <div class="large-4 small-6 columns">
                        <a href="chapter/chapter5/tutorial_chapter5.php">
                            <img src="img/5.png">
                        </a>
                        <div class="panel">
                            <h5><a href="chapter/chapter5/tutorial_chapter5.php">Cours JS Part 5</a></h5>
                            <h6 class="subheader"><?php echo $db->getProgress($user->data['user_id'],5) ?> %</h6>
                        </div>
                    </div>
                    <div class="large-4 small-6 columns">
                        <a href="chapter/chapter6/tutorial_chapter6.php">
                            <img src="img/6.png">
                        </a>
                        <div class="panel">
                            <h5><a href="chapter/chapter6/tutorial_chapter6.php">Cours JS Part 6</a></h5>
                            <h6 class="subheader"><?php echo $db->getProgress($user->data['user_id'],6) ?> %</h6>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="large-12 columns">
                        <div class="panel">
                            <div class="row">
                                <div class="large-2 small-6 columns"><img src="http://placehold.it/300x300&amp;text=Site%20Owner"></div>
                                <div class="large-10 small-6 columns" id="third-step">
                                    <strong>If you have questions, be sure to visit our forum</strong>
                                    <hr>
                                    <a href="http://forum.test.org" target="_blank">
                                        <div class="panel callout radius medium-text-center">
                                            <h6>Click here to visit it right now</h6>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <a href="impressum.php">Impressum</a>
                            </li>
                            <li>
                                <a href="datenschutz.php">Datenschutzerklärung</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<ol class="joyride-list" data-joyride>
    <li data-id="first-step" data-text="Next" data-options="tip_location: top; prev_button: false">
        <p>Hello and welcome to JS Trainer (: <br>Here you can see your progress.</p>
    </li>
    <li data-id="second-step" data-class="custom so-awesome" data-text="Next" data-prev-text="Prev">
        <h4>The Chapter</h4>
        <p>Every Chapter introduces you to another part of JavaScript</p>
    </li>
    <li data-id="third-step" data-button="Next" data-prev-text="Prev" data-options="tip_location:top;tip_animation:fade">
        <h4>Forum</h4>
        <p>If you have questions, please feel free to visit our Forum.</p>
    </li>
    <li data-button="End" data-prev-text="Prev">
        <h4>Remember</h4>
        <p>CODING IS FUN (:</p>
    </li>
</ol>

<script>
    $(document).foundation();
    var doc = document.documentElement;
    doc.setAttribute('data-useragent', navigator.userAgent);
    if (!localStorage['tutorial']) {
        localStorage['tutorial'] = 'yes';
        $(document).foundation('joyride', 'start');
    }
    var progress_value = <?php echo round(100 / $maxLessons  * $progress) ?>;

    $(document).foundation({
        slider: {
            on_change: function(){
                $('.range-slider').foundation('slider', 'set_value', progress_value);
            }
        }
    });
    $('.range-slider').foundation('slider', 'set_value', progress_value);

</script>
</body>
</html>
<?php
}else{
    header('refresh:0,../index.php');
}
?>
