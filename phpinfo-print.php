<?php
/**
 * Plugin Name: PHPINFO Print
 * Plugin URI: http://programming-review.com/
 * Description: Displays phpinfo() in a traditional style
 * Author: Dejan Batanjac
 * Version: 1.3.0
 * Author URI: http://programming-review.com/

 * PHPINFO Print is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * PHPINFO Print is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with PHPINFO Print. If not, see <http://www.gnu.org/licenses/>.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) { exit; }

define( 'PHPINFO_VERSION', '1.1' );

// Make sure we don't expose any info if called directly
if ( ! function_exists( 'add_action' ) ) {
  echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
  wp_die();
}

// exploit the idea that we use class organization
require_once( 'lib/phpinfo-class.php' );

Db_PHP_Info::install_actions();
Db_PHP_Info::install_plugin();
