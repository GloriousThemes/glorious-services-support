<?php
/**
 * The main file of the Glorious Services & Support
 *
 * Plugin Name: Glorious Services & Support by GloriousThemes
 * Plugin URI: https://wordpress.org/plugins/glorious-services-support/
 * Description: WordPress Services for GloriousThemes customers that enables the customer to get services like installing the themes or plugins of GloriousThemes. It also allows customer to get support directly from GloriousThemes Support team for all gloriousthemes products!
 * Author: GloriousThemes
 * Author URI: https://gloriousthemes.com/
 * Version: 1.0.0
 * Text Domain: glorious-services-support
 */

// If this file is called directly, abort.
if (! defined('WPINC')) die;

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
     add_menu_page('Glorious WordPress Services & Support', 'Glorious Support', 'administrator', __FILE__, 'glorious_services_settings_page' , plugins_url('/images/icon24.png', __FILE__), 2 );
     
     //add_menu_page( string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '', string $icon_url = '', int $position = null )

     //call register settings function
     // THIS FUNCTION REGISTERS THE SETTINGS FUNCTIONALITY OF THE PLUGIN
	add_action( 'admin_init', 'register_glorious_services_settings' );
}



function register_glorious_services_settings() {
	//register our settings
	register_setting( 'glorious-services-settings-group', 'is_chat_active' );
	//register_setting( 'glorious-services-settings-group', 'some_other_option' );
	//register_setting( 'glorious-services-settings-group', 'option_etc' );
}

function glorious_services_settings_page() {

include 'includes/template.php';

?>
<div class="wrap">
<h1>Glorious Services and Support by GloriousThemes</h1>

<form method="post" action="options.php">
    <?php settings_fields( 'glorious-services-settings-group' ); ?>
    <?php do_settings_sections( 'glorious-services-settings-group' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Activate Support via Chat</th>
        <td>
            <select id="is_chat_active" style="width: 10%;" name="is_chat_active">
                <option value="1" <?php echo get_option('is_chat_active')==1 ? 'selected' : ''; ?>>Enable</option>
                <option value="0" <?php echo get_option('is_chat_active')==0 ? 'selected' : ''; ?>>Disable</option>
            </select>
            <?php // echo esc_attr( get_option('is_chat_active') ); ?>
            <!-- <input type="text" name="is_chat_active" value="<?php // echo esc_attr( get_option('is_chat_active') ); ?>" /> -->
        </td>
        </tr>
    </table>
    
    <?php submit_button(); ?>

</form>
</div>

<?php 

} //function ends here


/**
 * Register and enqueue a custom stylesheet in the WordPress admin.
 */
function glorious_services_admin_style() {
    wp_register_style( 'glorious_grid_admin_css', plugins_url('assets/css/grid.css',__FILE__ ), '1.0.0' );
    wp_enqueue_style( 'glorious_grid_admin_css' );

    wp_register_style( 'glorious_main_admin_css', plugins_url('assets/css/main.css',__FILE__ ), '1.0.0' );
    wp_enqueue_style( 'glorious_main_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'glorious_services_admin_style' );

?>