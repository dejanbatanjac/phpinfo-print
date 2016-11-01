<?php

if ( ! class_exists( 'Db_PHP_Info' ) ) {
  final class Db_PHP_Info {

    // Make sure no action on plugin install.
    public static function install_plugin() {}
    public static function uninstall_plugin() {}

    // Make sure we add functionality to the meny.
    public static function install_actions() {
      add_action( 'admin_menu', 'Db_PHP_Info::admin_menus' );
    }

    public static function is_admin() {
      return current_user_can( 'manage_options' );
    }

    // Only admin can access the menu.
    public static function admin_menus() {
      if ( ! ( self::is_admin() && is_admin() ) ) {
        return;
      }
      add_menu_page( 'PHPINFO', 'PHPINFO', 'activate_plugins', 'phpinfo', 'Db_PHP_Info::menu' );
    }

    public function menu() {
      require( 'phpinfo-menu.php' );
    }

  }// End class{}.
}// End if().
