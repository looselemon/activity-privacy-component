<?php 
/*
Plugin Name: Activity Privacy Component
Plugin URI: http://www.wordpress.com
Description: Modifies the activity stream so you only see your friends and your own activities. Admins see all site activity.
Version: 1.0
Requires at least: WordPress 3.2.1 / BuddyPress 1.5.1
Tested up to: WordPress 3.5.1 / BuddyPress 1.7 beta 2
License: GNU/GPL 2
Author: Rich Fuller
Author URI: http://www.wordpress.com
*/

function bphelp_my_activity_privacy_init() {
	require( dirname( __FILE__ ) . '/activity-privacy-component.php' );
}
add_action( 'bp_include', 'bphelp_my_activity_privacy_init' );
?>