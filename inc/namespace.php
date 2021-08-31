<?php
/**
 * Display Updates in WordPress admin.
 */

namespace UpdateDisplay;

/**
 * Bootstrap the plugin.
 *
 * @return void
 */
function bootstrap() {
	add_action( 'load-plugins.php', __NAMESPACE__ . '\\plugin_update_rows', 20 );
}

/**
 * Add plugin update rows for plugins with available updates.
 * This function is forked from plugin_update_rows() in wp-admin/includes/update.php.
 * We are just removing capability check.
 *
 * @return void
 */
function plugin_update_rows() {
	$plugins = get_site_transient( 'update_plugins' );

	if ( isset( $plugins->response ) && is_array( $plugins->response ) ) {
		$plugins = array_keys( $plugins->response );
		foreach ( $plugins as $plugin_file ) {
			add_action( "after_plugin_row_{$plugin_file}", 'wp_plugin_update_row', 10, 2 );
		}
	}
}

