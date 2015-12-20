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
            <h1><a href="../../user.html">Learn JavaScript and QT5 within minutes</a></h1>
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
<script src="../../js/vendor/jquery.js"></script>
<script src="../../js/foundation.min.js"></script>
<script>
    $(document).foundation();
    var doc = document.documentElement;
    doc.setAttribute('data-useragent', navigator.userAgent);
</script>
<iframe class="mainContent" src="../../js/liveeditor/chapter_one/part_one/live_editor_frame.html" width="100%" height="80%" style="float:top"></iframe>
</body>
</HTML>
    <?php
}else{
    header('refresh:0,../../index.php');
}
?>