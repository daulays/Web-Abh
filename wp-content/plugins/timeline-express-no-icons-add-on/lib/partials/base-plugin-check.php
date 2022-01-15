<?php
/**
 * Functions to check if the Timeline Express base plugin is active
 * If it's not, abort, self-deactivate this add-on and display a warning.
 *
 * @since 1.0.0
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {

	die;

}

// Include plugin.php
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

// Deactivaate this add-on
deactivate_plugins( TIMELINE_EXPRESS_NO_ICONS_BASENAME );

// Display the admin notice
add_action( 'admin_notices', 'timeline_express_no_icons_addon_display_activation_notice_error' );

/**
* Admin notice when the base plugin is not installed.
*
* @hooked   admin_notices
*
* @since    1.0.0
*/
function timeline_express_no_icons_addon_display_activation_notice_error() {
	?>

		<!-- Hide the 'Plugin Activated' default message -->
		<style>
		#message.updated {

			display: none;

		}
		</style>

		<!-- Display the error -->
		<div class="error">

			<p><?php printf( /* translators: This add-on name. */ esc_attr__( '%s could not be activated because Timeline Express is not installed and active.', 'timeline-express-no-icons-add-on' ), '<strong>Timeline Express - No Icons Add-On</strong>' ); ?></p>

			<p><?php printf( /* translators: Timeline Express wrapped in anchor tags. */ esc_attr__( 'Please install and activate %s before activating this addon.', 'timeline-express-no-icons-add-on' ) , '<a href="' . wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=timeline-express' ), 'install-plugin_timeline-express' ) . '" title="Timeline Express">Timeline Express</a>' ); ?></p>

		</div>

	<?php
}
