<?php
/**
 * Plugin Name: WPJIT RESTRICT
 * Plugin URI:  https://www.wpjit.com/
 * Description: Plug and Play
 * Version:     1.0.0
 * Author:      Zaheer Abba Aghani
 * Author URI:  https://www.wpjit.com/
 * Text Domain: wpjitrestrict
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

function wpjit_enqueue_files_for_plugin(){

define('WPJIT_PLUGIN_DIR', plugin_dir_path(__FILE__));

require WPJIT_PLUGIN_DIR .'/include/enqueue.php';


}




add_action('init','wpjit_enqueue_files_for_plugin');