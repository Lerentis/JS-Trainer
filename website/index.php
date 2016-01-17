<?php

define('IN_PHPBB', true);
$phpbb_root_path = '/usr/share/phpBB3/';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();

if(!$user->data['is_registered']){

?>
<!doctype html>
<!--[if IE 9]>
<html class="lt-ie10" lang="en"> <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <title>JS Trainer</title>
    <link rel="stylesheet" href="css/foundation.css"/>
    <script src="js/vendor/modernizr.js"></script>
</head>
<body>
<div class="row">
    <div class="large-12 columns">
        <div class="row">
            <div class="large-12 columns">
                <nav class="top-bar" data-topbar>
                    <ul class="title-area">
                        <li class="name">
                            <h1><a href="index.php">Learn JavaScript within minutes</a></h1>
                        </li>
                        <li class="toggle-topbar menu-icon">
                            <a href="#"><span>menu</span></a>
                        </li>
                    </ul>
                    <section class="top-bar-section">
                        <ul class="right">
                            <li class="divider"></li>
                            <li>
                                <a href="login.php">Login</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="register.php">Register</a>
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
            <div class="large-12 columns">
                <ul class="example-orbit" data-orbit>
                    <li><img src="img/shoes-js.png"></li>
                    <li><img src="img/training.png"></li>
                    <li><img src="img/technology.png"></li>
                </ul>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="large-12 columns">
                <article>
                    <h3>Hello there Friend</h3>

                    <div class="row">
                        <div class="large-6 columns">
                            <p>Do you have a moment to talk about JavaScript?</p>

                            <p>I guess you have never hared this question before, and feel a little bit confused of what I
                                want to tell you now. <br>But don't worry. I will tell you!</p>

                            <p>In modern Web-Technologie are three basic languages involved. One of them is JavaScript.
                                JavaScript provides basic logic for a website or even a full on application in your
                                browser. </p>
                        </div>
                        <div class="large-6 columns">
                            <img src="img/coffee.png"/>
                        </div>
                    </div>
                    <p>There are even Video-Games which are partly writen in JavaScript!</p>

                    <p>Now you will think that this language must be hard to learn, but I can ensure you that it is not.</p>

                    <p>With our help you can master this language within a few days and become a developer on your own! <br>
                        What are you waiting for?</p>
                </article>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="large-4 columns">
                <img src="img/icon-909830_960_720.png" width="235"/>
                <h4>What is JavaScript</h4>

                <p>JavaScript is a high level, dynamic, untyped, and interpreted programming language. It has been
                    standardized in the <a href="https://en.wikipedia.org/wiki/ECMAScript" title="ECMAScript">ECMAScript</a>
                    language specification. Alongside HTML and CSS, it is one of the three essential technologies of World
                    Wide Web content production; the majority of websites employ it and it is supported by all modern web
                    browsers without plug-ins.</p>
            </div>
            <div class="large-4 columns">
                <img src="img/js-icon.png" width="282" />
                <h4>Why should you learn</h4>

                <p>JavaScript is irreplaceable in modern Web-Technology and can help you to build a WebApp on your own as
                    well as be an easy start to the world of programming. If you are more business-oriented, be ensured that
                    even a little bit of programming knowledge can boost your resume by a lot. </p>
            </div>
            <div class="large-4 columns">
                <img src="img/Wikipedia_logo_svg.png"  width="235"/>
                <h4>Knowledge if free</h4>

                <p>We build this platform in the spirit that knowledge is and should be free, so we do not charge anything
                    to provide you this service. If you like what we are doing here, you can donate what you think is the
                    value of this project to you and help us to keep the Servers running and the knowledge coming.</p>
            </div>
        </div>

        <div class="row">
            <div class="large-12 columns">
                <div class="panel">
                    <h4>Sign Up!</h4>

                    <div class="row">
                        <div class="large-9 columns">
                            <p>Sign up today and write your own JavaScript tomorrow</p>
                        </div>
                        <div class="large-3 columns">
                            <a href="register.php" class="radius button right">Register</a>
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

<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
    $(document).foundation();
    var doc = document.documentElement;
    doc.setAttribute('data-useragent', navigator.userAgent);
</script>
</body>
</html>
<?php
}else{
    header('refresh:0,../user.php');
}
?>