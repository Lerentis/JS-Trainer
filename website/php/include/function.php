<?php

function mysession()
{
	define('IN_PHPBB', true);
	$phpbb_root_path = '/usr/share/phpBB3/';
	$phpEx = substr(strrchr(__FILE__, '.'), 1);
	include($phpbb_root_path . 'common.' . $phpEx);

	// Start session management

	$user->session_begin();
	$auth->acl($user->data);
	$user->setup();
}

?>