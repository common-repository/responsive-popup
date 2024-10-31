<?php
/*
Plugin Name: Responsive PopUp
Plugin URI:  http://plugin-boutique.com/responsive-popup/
Description: Create your own unique responsive PopUps through our visual interface. Customizable. Seo Optimized. Beautiful. Easy to use. Responsive.
Version:     1.0
Author:      PopUpJones
Author URI:  http://plugin-boutique.com/responsive-popup/
 */

function inc_popup_pro_init() {
	if ( ! defined( 'PO_LANG' ) ) {
		// Used for more readable i18n functions: __( 'text', PO_LANG );
		define( 'PO_LANG', 'popover' );
		define( 'PO_VERSION', 'pro' );

		/**
		 * The current DB/build version. NOT THE SAME AS THE PLUGIN VERSION!
		 * Increase this when DB structure changes, migration code is required, etc.
		 * See IncPopupDatabase: db_is_current() and db_update()
		 */
		define( 'PO_BUILD', 6 );

		$plugin_dir = trailingslashit( dirname( __FILE__ ) );
		$plugin_dir_rel = trailingslashit( dirname( plugin_basename( __FILE__ ) ) );
		$plugin_url = plugin_dir_url( __FILE__ );

		define( 'PO_LANG_DIR', $plugin_dir_rel . 'lang/' );
		define( 'PO_TPL_DIR', $plugin_dir . 'css/tpl/' );
		define( 'PO_INC_DIR', $plugin_dir . 'inc/' );
		define( 'PO_JS_DIR', $plugin_dir . 'js/' );
		define( 'PO_CSS_DIR', $plugin_dir . 'css/' );
		define( 'PO_VIEWS_DIR', $plugin_dir . 'views/' );

		define( 'PO_TPL_URL', $plugin_url . 'css/tpl/' );
		define( 'PO_JS_URL', $plugin_url . 'js/' );
		define( 'PO_CSS_URL', $plugin_url . 'css/' );
		define( 'PO_IMG_URL', $plugin_url . 'img/' );

		// Include function library.
		require_once PO_INC_DIR . 'external/wpmu-lib/core.php';

		lib2()->translate_plugin( PO_LANG, PO_LANG_DIR );

		require_once( PO_INC_DIR . 'config-defaults.php');
		if ( is_admin() ) {
			// Defines class 'IncPopup'.
			require_once( PO_INC_DIR . 'class-popup-admin.php');
		} else {
			// Defines class 'IncPopup'.
			require_once( PO_INC_DIR . 'class-popup-public.php');
		}

		// Initialize the plugin as soon as we have identified the current user.
		IncPopup::instance();
	}
}

inc_popup_pro_init();