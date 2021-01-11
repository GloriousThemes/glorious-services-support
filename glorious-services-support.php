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
	register_setting( 'my-cool-plugin-settings-group', 'new_option_name' );
	register_setting( 'my-cool-plugin-settings-group', 'some_other_option' );
	register_setting( 'my-cool-plugin-settings-group', 'option_etc' );
}

function glorious_services_settings_page() {
?>
<div class="wrap">
<h1>Your Plugin Name</h1>

<form method="post" action="options.php">
    <?php settings_fields( 'my-cool-plugin-settings-group' ); ?>
    <?php do_settings_sections( 'my-cool-plugin-settings-group' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">New Option Name</th>
        <td><input type="text" name="new_option_name" value="<?php echo esc_attr( get_option('new_option_name') ); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Some Other Option</th>
        <td><input type="text" name="some_other_option" value="<?php echo esc_attr( get_option('some_other_option') ); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Options, Etc.</th>
        <td><input type="text" name="option_etc" value="<?php echo esc_attr( get_option('option_etc') ); ?>" /></td>
        </tr>
    </table>
    
    <?php submit_button(); ?>

</form>
</div>
<?php } ?>