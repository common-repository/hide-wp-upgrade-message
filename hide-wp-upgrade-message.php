<?php
/**
 * Plugin Name: Hide WP Upgrade Message
 * Plugin URI: http://tell.com.sg/hide-wp-upgrade-message.zip
 * Description: This plugin hides the wordpress upgrade message in the dashboard
 * Author: Arshad Hussain
 * Version: 1.0.0
 * Author URI: http://hussainarsh.blogspot.in
 */

// Remove upgrade link from dashboard of wordpress
add_action('admin_menu','wphideupgrademsg');

function wphideupgrademsg() {
	
remove_action( 'admin_notices', 'update_nag', 3 );

}