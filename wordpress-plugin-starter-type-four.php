<?php
/**
 *
 * Starter project for building WordPress plugins that include tools and integrations for admin, debug, and test
 *
 * @author                  Gilad Ehven
 * @copyright               2018 Gilad Ehven (Ehventerprise LLC)
 * @license                 GNU General Public License 2.0+
 * @link                    https://github.com/GiladEhven/wordpress-plugin-starter-type-four
 * @package                 WordpressPluginStarterTypeFour
 * @since                   0.1.0
 *
 * @wordpress-plugin
 *
 * Plugin Name:             Wordpress Plugin Starter Type Four
 *
 * Author:                  Gilad Ehven
 * Author URI:              http://gilad-ehven.com
 * Contributors:            Mihal Ehven (Ehventerprise LLC)
 * Description:             Starter project for building WordPress plugins that include tools and integrations for admin, debug, and test. THIS DESCRIPTION SHOULD BE REPLACED WITH CONTENT THAT DESCRIBES ACTUAL PLUGIN. Also replace home/repo address, plugin description, plugin name, plugin namespace, and text domain in plugin main file, and corresponding fields in composer.json.
 * Domain Path:             /languages
 * License:                 GNU General Public License 2.0+
 * License URI:             http://www.gnu.org/licenses/gpl-2.0.txt
 * Network:                 False
 * Plugin URI:              https://github.com/GiladEhven/wordpress-plugin-starter-type-four
 * Privacy Policy:          https://gilad-ehven.com/privacy/
 * Terms of Use:            https://gilad-ehven.com/terms/
 * Text Domain:             wordpress-plugin-starter-type-four
 * Version:                 0.1.0
 *
 * 0. Assumes Composer has been installed globally
 * 1. Copy "wordpress-plugin-starter-type-four" (project includes all minimally required files and folders)
 * 2. Modify directory, file, and field values as required to match new project
 * 3. Modify composer.json as required
 * 4. Open shell to root of [this] project: $ composer install
 *
 */

namespace WordpressPluginStarterTypeFour;

if ( ! defined( 'ABSPATH' ) ) exit( "Nothing to see here." );



// if ( file_exists( __DIR__ . '/tools/dev/vendor/autoload.php' )) require_once( __DIR__ . '/tools/vendor/autoload.php' );


/*
if ( class_exists( '\Whoops\Handler\PrettyPageHandler' ) ) {
	$whoops_error_page = new \Whoops\Handler\PrettyPageHandler();
	$whoops_error_page->setEditor( 'sublime' );

	$whoops_app = new \Whoops\Run;
	$whoops_app->pushHandler( $whoops_error_page );
	$whoops_app->register();
}
*/

// -----------------------  START SANDBOX  ----------------------------------------------------------------------------------------------- //

/*
add_action( 'loop_start', function() {
	d( 'test' );
	d($_SERVER);
});
*/

// func_num_args();
