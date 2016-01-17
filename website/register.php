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
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <title>Register</title>
    <link rel="stylesheet" href="css/foundation.css" />
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
        <form data-abide action="php/handle_register.php">
            <div class="large-6 columns">
                <label>First Name </label>
                    <input type="text" name="firstname" placeholder="first name" />
            </div>
            <div class="large-6 columns">
                <label>Last Name </label>
                    <input type="text" name="lastname" placeholder="last name" />
            </div>
            <div class="large-6 columns">
                <label>Email Address*</label>
                <input type="email" name="email" id="email" placeholder="email" required />
            </div>
            <div class="large-6 columns">
                <label>Confirm Email* </label>
                <input type="email" name="emailconfirm" placeholder="email" required data-equalto="email" />
                <small class="error" data-error-message="">Emails did not match </small>
            </div>
            <div class="large-6 columns">
                <label>Password*</label>
                <input type="password" name="password" placeholder="password" id="password" required />
                <small class="error" data-error-message="">Password did not match the requirements </small>
                <medium class="input">Password should be at least 8 characters; Contain at least three character types: lowercase letters, uppercase letters, numbers, punctuation; Do not include your username.</medium>
            </div>
            <div class="large-6 columns">
                <label>Confirm Password*</label>
                <input type="password" name="passwordconfirm" placeholder="password" required data-equalto="password" />
                <small class="error" data-error-message="">Passwords must match.</small>
            </div>
            <div class="large-6 columns right-align">
                <input type="submit" formmethod="post" class="button expand" value="Register"/>
            </div>
        </form>
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
    header('refresh:1,../user.php');
}
?>
