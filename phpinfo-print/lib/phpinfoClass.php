<?php

class phpinfo {
	
	public static function installPlugin(){/*currerntly empty  */}
	public static function uninstallPlugin(){/*currerntly empty  */}
	
	
	public static function installActions(){	
		add_action('admin_menu', 'phpinfo::admin_menus');
	
	}
	public static function isAdmin(){		
		return current_user_can('manage_options');
	}
	public static function admin_menus(){
		if(! (self::isAdmin() && is_admin()) ){	return; }
		add_menu_page('PHPINFO', 'PHPINFO', 'activate_plugins', 'phpinfo', 'phpinfo::menu' ); 
	}
	public function menu(){
		require('phpinfoMenu.php');
	}
	
	
	}
?>
