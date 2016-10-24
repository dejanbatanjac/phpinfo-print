<?php

if ( ! class_exists( 'Db_PHP_Info' ) ) {
	class Db_PHP_Info {

		public static function install_plugin() {}
	  public static function uninstall_plugin() {}

		public static function install_actions() {
			add_action( 'admin_menu', 'Db_PHP_Info::admin_menus' );
		}
		public static function is_admin() {
			return current_user_can( 'manage_options' );
		}
		public static function admin_menus() {
			if ( ! ( self::is_admin() && is_admin() ) ) {
				return;
			}
			add_menu_page( 'PHPINFO', 'PHPINFO', 'activate_plugins', 'phpinfo', 'Db_PHP_Info::menu' );
		}

		public function menu() {
			require( 'phpinfo_menu.php' );
		}

	}// End class{}.
}// End if().
