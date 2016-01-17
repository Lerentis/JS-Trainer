<?php

define('IN_PHPBB', TRUE);
define('FORUM_ADD',TRUE);
define('IN_PORTAL',TRUE);
$phpbb_root_path = '/usr/share/phpBB3/';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . '/includes/functions_user.' . $phpEx);
include($phpbb_root_path . '/phpbb/passwords/manager.' . $phpEx);

// Start session management

$user->session_begin();
$auth->acl($user->data);
$user->setup();

$state = null;

$data = array(
    #'username'              => $request->variable('username',''),
    'firstname'             => $request->variable('firstname',''),
    'lastname'              => $request->variable('lastname',''),
    'password'              => $request->variable('password',''),
    'email'                 => $request->variable('email','')
);

$passwords_manager = $phpbb_container->get('passwords.manager');
$hashPass = $passwords_manager->hash($data['password']);


$user_row = array(
    'username'              => $data['firstname'],
    'user_password'         => $hashPass,
    'user_email'            => $data['email'],
    'group_id'              => 2, // by default, the REGISTERED user group is id
    'user_type'             => USER_NORMAL,
    'user_ip'               => $user->ip,
    'user_regdate'          => time()
);

    if($user_id = user_add($user_row,$cp_data=false)){
        $state =  $data['firstname'] . " successfully registered";
        $auth->login($data['firstname'],$data['password']);
        header('refresh:2,../user.php');
    }
    else{
        $state = "registration failed";
        header('refresh:2,../register.php');
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
                            <h1><a href="../index.php">Learn JavaScript within minutes</a></h1>
                        </li>
                        <li class="toggle-topbar menu-icon">
                            <a href="#"><span>menu</span></a>
                        </li>
                    </ul>
                    <section class="top-bar-section">
                        <ul class="right">
                            <li class="divider"></li>
                            <li>
                                <a href="../login.php">Login</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="../register.php">Register</a>
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
