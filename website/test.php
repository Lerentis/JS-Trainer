<?php
ini_set('display_errors',1); ini_set('display_startup_errors',1);

define('IN_PHPBB', true);
$phpbb_root_path = '/usr/share/phpBB3/';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/functions_display.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();

//first we get the users avatar that is viewing this page but only if they are logged in and have one?
if ($user->data['is_registered'] && !$user->data['is_bot'])
{
    $user_avatar_img = !empty($user->data['user_avatar']) ? get_user_avatar($user->data['user_avatar'], $user->data['user_avatar_type'], $user->data['user_avatar_width'], $user->data['user_avatar_height']) : '';
    if(!empty($user_avatar_img))
    {
        echo $user->data['user_avatar'];
        echo get_user_avatar($user->data['user_avatar'], $user->data['user_avatar_type'],$user->data['user_avatar_width'], $user->data['user_avatar_height']);
        echo $user_avatar_img;
    }
}
else {
    echo "Not logged in";
}

