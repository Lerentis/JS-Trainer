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
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/foundation/foundation.joyride.js"></script>
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
        <div class="row">
            <div class="large-4 small-12 columns">
                <img src="http://placehold.it/500x500&amp;text=Logo">
                <div class="hide-for-small panel">
                    <h3>Hello Again <?php echo $user->data['username']; ?></h3>
                    <h5 class="subheader">Looks like you completed 0% of all lessons so far. Try one and maybe you like it.</h5>
                </div><a href="#">
                <div class="panel callout radius" id="first-step">
                    <h6>You have 99 lessons to go</h6>
                </div></a>
            </div>

            <div class="large-8 columns">
                <div class="row">
                    <div class="large-4 small-6 columns" id="second-step">
                        <img src="http://placehold.it/1000x1000&amp;text=Thumbnail">
                        <div class="panel">
                            <h5><a href="chapter/chapter1/tutorial_chapter1.php">Cours JS Part 1</a></h5>
                            <h6 class="subheader">0%</h6>
                        </div>
                    </div>
                    <div class="large-4 small-6 columns">
                        <img src="http://placehold.it/500x500&amp;text=Thumbnail">
                        <div class="panel">
                            <h5><a href="chapter/chapter1/live_editor_chapter1_part1.php">Cours JS Part 2</a></h5>
                            <h6 class="subheader">0%</h6>
                        </div>
                    </div>
                    <div class="large-4 small-6 columns">
                        <img src="http://placehold.it/500x500&amp;text=Thumbnail">
                        <div class="panel">
                            <h5><a href="chapter/chapter1/live_editor_chapter1_part1.php">Cours JS Part 3</a></h5>
                            <h6 class="subheader">0%</h6>
                        </div>
                    </div>
                    <div class="large-4 small-6 columns">
                        <img src="http://placehold.it/500x500&amp;text=Thumbnail">
                        <div class="panel">
                            <h5><a href="chapter/chapter1/live_editor_chapter1_part1.php">Cours JS Part 4</a></h5>
                            <h6 class="subheader">0%</h6>
                        </div>
                    </div>
                    <div class="large-4 small-6 columns">
                        <img src="http://placehold.it/500x500&amp;text=Thumbnail">
                        <div class="panel">
                            <h5><a href="chapter/chapter1/live_editor_chapter1_part1.php">Cours JS Part 5</a></h5>
                            <h6 class="subheader">0%</h6>
                        </div>
                    </div>
                    <div class="large-4 small-6 columns">
                        <img src="http://placehold.it/500x500&amp;text=Thumbnail">
                        <div class="panel">
                            <h5><a href="chapter/chapter1/live_editor_chapter1_part1.php">Cours JS Part 6</a></h5>
                            <h6 class="subheader">0%</h6>
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
                                    <a href="http://localhost:80" target="_blank">
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
</script>
</body>
</html>
<?php
}else{
    header('refresh:0,../index.php');
}
?>
