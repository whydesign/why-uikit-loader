<?php
/**
 * Plugin Name:       UIkit 3 Loader
 * Plugin URI:        https://github.com/whydesign
 * Description:       Load modular UIkit 3 front-end framework to your Wordpress. For more, visit the UIkit Documentation: <a href="https://getuikit.com/docs/installation">https://getuikit.com/docs/installation</a>
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           1.0.0
 * Author:            Whydesign
 * Author URI:        https://whydesign-halle.de
 * License:           WTFPL-2.0
 * License URI:       http://www.wtfpl.net/
 * Text Domain:       why-uikit-loader
 *
 * @package           whydesign-plugins
 */

function uikit_loader_enqueue_script() {
    wp_enqueue_script( 'uikit-js', plugin_dir_url( __FILE__ ) . 'includes/uikit-js.js', array(), '3.17.11' );
    wp_enqueue_script( 'uikit-icon', plugin_dir_url( __FILE__ ) . 'includes/uikit-icons.js', array(), '3.17.11' );
    wp_enqueue_script( 'uikit-css', plugin_dir_url( __FILE__ ) . 'includes/uikit-css.js', array(), '3.17.11' );
}

add_action('wp_enqueue_scripts', 'uikit_loader_enqueue_script');
add_action('admin_enqueue_scripts', 'uikit_loader_enqueue_script');