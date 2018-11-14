<?php
/* Plugin Name: Limit Login Roles Plugin URI: http://ultrafunk.com Description: Only allow users with specified roles to log in. (Admin always ok.) Author: UltrafunkAuthor URI: http://ultrafunk.com Version: 0.1 License: GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html */ 

defined('ABSPATH')or die("Sorry..."); 

function ultrafunk_llr_auth_login($user, $password) 
{   
    $valid_roles=array('administrator', 'editor');   
    $allow_login=false;  
    if(0!=count(array_intersect($user->roles, $valid_roles)))     
        $allow_login=true; 
    if(true == $allow_login) 
        return $user; 
    else 
        return new WP_Error('role_not_allowed', "User role not allowed to log in!"); 

} add_filter('wp_authenticate_user','ultrafunk_llr_auth_login',10,2); 

?>