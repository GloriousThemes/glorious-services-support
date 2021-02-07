<?php
/**
 * The main file of the Glorious Services & Support
 *
 * Plugin Name: Glorious Services & Support
 * Plugin URI: https://wordpress.org/plugins/glorious-services-support/
 * Description: WordPress Services for GloriousThemes customers that enables the customer to get services like installing the themes or plugins of GloriousThemes. It also allows customer to get support directly from GloriousThemes Support team for all gloriousthemes products!
 * Author: GloriousThemes
 * Author URI: https://gloriousthemes.com/
 * Version: 1.0.0
 * Text Domain: glorious-services-support
 */

// If this file is called directly, abort.
if (! defined('WPINC')) die;
if (! defined('ABSPATH')) die;

// Define constant with current version
if (!defined('GLORIOUS_SERVICE_VERSION'))
    define('GLORIOUS_SERVICE_VERSION', '1.0.0');

define('GLORIOUS_PLUGIN',plugin_dir_url( __FILE__ ));


// create custom plugin settings menu
/** *************** 
 * Create a Menu for the Admin Dashboard
 * This is to access the plugin directly, using New WordPress Settings API
** ********************** */
add_action('admin_menu', 'glorious_services_create_menu');

function glorious_services_create_menu() {

	//create new top-level menu
     add_menu_page('Glorious WordPress Services & Support', 'Glorious Support', 'administrator', 'glorious-services-support', 'glorious_services_settings_page' , plugins_url('/images/icon24.png', __FILE__), 2 );
     
     //add_menu_page( string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '', string $icon_url = '', int $position = null )

     //call register settings function
     // THIS FUNCTION REGISTERS THE SETTINGS FUNCTIONALITY OF THE PLUGIN
	add_action( 'admin_init', 'register_glorious_services_settings' );
}



function register_glorious_services_settings() {
	//register our settings
	register_setting( 'glorious-services-settings-group', 'is_chat_active' );
	register_setting( 'glorious-services-settings-group', 'is_promotion_active' );
	register_setting( 'glorious-services-settings-group', 'is_services_active' );
}

function glorious_services_settings_page() {
    //require_once 'includes/template.php';
    require_once( plugin_dir_path( __FILE__ ) . '/includes/template.php');
} //function ends here


/**
 * Register and enqueue a custom stylesheet in the WordPress admin.
 */
function glorious_services_admin_style() {
    wp_register_style( 'glorious_grid_admin_css', plugins_url('assets/css/grid.min.css',__FILE__ ), '1.0.0' );
    wp_enqueue_style( 'glorious_grid_admin_css' );

    wp_register_style( 'glorious_main_admin_css', plugins_url('assets/css/main.css',__FILE__ ), '1.0.0' );
    wp_enqueue_style( 'glorious_main_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'glorious_services_admin_style' );




if ( ! function_exists( 'gss_fs' ) ) {
    // Create a helper function for easy SDK access.
    function gss_fs() {
        global $gss_fs;

        if ( ! isset( $gss_fs ) ) {
            // Include Freemius SDK.
            require_once dirname(__FILE__) . '/freemius/start.php';

            $gss_fs = fs_dynamic_init( array(
                'id'                  => '7586',
                'slug'                => 'glorious-services-support',
                'type'                => 'plugin',
                'public_key'          => 'pk_7908de6823339b01daa866681003f',
                'is_premium'          => false,
                'has_addons'          => false,
                'has_paid_plans'      => false,
                'menu'                => array(
                    'slug'           => 'glorious-services-support',
                    'support'        => false,
                ),
            ) );
        }

        return $gss_fs;
    }

    // Init Freemius.
    gss_fs();
    // Signal that SDK was initiated.
    do_action( 'gss_fs_loaded' );
}



/* allows customers and users to contact Glorious Support team
* 24x7 via Chat Support, but the user needs to activate the service
* via the settings api
*/
add_action('admin_head', 'glorious_chat_code');
function glorious_chat_code(){
    if(get_option('is_chat_active') == 1 ){
    ?>
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="2ba7322a-3946-4920-af5d-eff26031f254";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
    <?php
    }
}

