<?php
/**
Plugin Name: Disable Auto Updates
Plugin URI: http://clickwp.com/wordpress-support/
Description: Disables the auto updates feature so that we can backup before updating, and choose the best time to perform updates.
Author: ClickWP
Version: 1.0
Author URI: http://clickwp.com
*/

/**
 * Refer to the link below for details
 * @link http://codex.wordpress.org/Configuring_Automatic_Background_Updates
 *
 */

// To specifically enable development (nightly) updates, uncomment the following:
// add_filter( 'allow_dev_auto_core_updates', '__return_true' );

// To specifically disable minor updates, uncomment the following:
add_filter( 'allow_minor_auto_core_updates', '__return_false' );

// To specifically enable major updates, uncomment the following:
// add_filter( 'allow_major_auto_core_updates', '__return_true' );

// To enable automatic updates for plugins, uncomment the following:
// add_filter( 'auto_update_plugin', '__return_true' );

// To enable automatic updates for themes, uncomment the following:
// add_filter( 'auto_update_theme', '__return_true' );

// To disable translation file updates, uncomment the following:
// add_filter( 'auto_update_translation', '__return_false' );


/**
 * Hide update nag
 * @link http://www.wpbeginner.com/wp-tutorials/how-to-hide-the-wordpress-upgrade-message-in-the-dashboard/
 */
add_action('admin_menu','click_hidenag');
function click_hidenag() {
	remove_action( 'admin_notices', 'update_nag', 3 );
}