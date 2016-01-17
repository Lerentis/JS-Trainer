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
    $user->session_kill();
    $user->session_begin();
    header('refresh:0,../index.php');
}else{
    header('refresh:0,../index.php');
}
