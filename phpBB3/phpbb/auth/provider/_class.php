<?php
namespace phpbb\auth\provider;

/**
*
* @package auth
* @copyright (c) 2013 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
    exit;
}

/**
 * Database authentication provider for phpBB3
 *
 * This is for authentication via the integrated user table
 *
 * @package auth
 */

$phpbb_root_path = '/usr/share/nginx/html/docker/docker-phpbb/app/phpBB3/';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
echo $phpbb_root_path;
echo $phpEx;
include($phpbb_root_path . 'common.' . $phpEx);



class phpBB_custom_login extends base
{

    /**
     * Database Authentication Constructor
     *
     * @param    \phpbb\db\driver\driver_interface    $db
     */
    public function __construct(\phpbb\db\driver\driver_interface $db)
    {
        $this->db = $db;
    }

    /**
     * {@inheritdoc}
     */
    public function login($username, $password)
    {
        // Auth plugins get the password untrimmed.
        // For compatibility we trim() here.
        $password = trim($password);

        // do not allow empty password
        if (!$password)
        {
            return array(
                'status'    => LOGIN_ERROR_PASSWORD,
                'error_msg'    => 'NO_PASSWORD_SUPPLIED',
                'user_row'    => array('user_id' => ANONYMOUS),
            );
        }

        if (!$username)
        {
            return array(
                'status'    => LOGIN_ERROR_USERNAME,
                'error_msg'    => 'LOGIN_ERROR_USERNAME',
                'user_row'    => array('user_id' => ANONYMOUS),
            );
        }

        $username_clean = utf8_clean_string($username);

        $sql = 'SELECT user_id, username, user_password, user_passchg, user_pass_convert, user_email, user_type, user_login_attempts
            FROM ' . USERS_TABLE . "
            WHERE username_clean = '" . $this->db->sql_escape($username_clean) . "'";
        $result = $this->db->sql_query($sql);
        $row = $this->db->sql_fetchrow($result);
        $this->db->sql_freeresult($result);

        // Successful login... set user_login_attempts to zero...
        return array(
            'status'        => LOGIN_SUCCESS,
            'error_msg'        => false,
            'user_row'        => $row,
        );
    }
}

?>