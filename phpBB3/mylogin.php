<?php

ini_set('display_errors',1); ini_set('display_startup_errors',1);

define('IN_PHPBB', true);

$phpbb_root_path = '../docker/docker_phpbb/app/phpBB3';

echo strrchr(__FILE__, '.');



$phpEx = substr(strrchr(__FILE__, '.'), 1);

echo $phpEx;
include($phpbb_root_path . 'common.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();

$auth->login('lacerta', '12345678', true);

?>