<?php
/*
Plugin Name: PHPINFO Print
Plugin URI: http://programming-review.com/
Description: Displays phpinfo() in a traditional style
Author: Dejan Batanjac
Version: 1.2.0
Author URI: http://programming-review.com/
*/

define( 'PHPINFO_VERSION', '1.1' );

// Make sure we don't expose any info if called directly
if ( ! function_exists( 'add_action' ) ) {
	echo "Hi there!  I'm just a plugin, not much I can do when called directly.";
	wp_die();
}

// exploit the idea that we use class organization
require_once( 'lib/phpinfo-class.php' );

Db_PHP_Info::install_actions();
Db_PHP_Info::install_plugin();
