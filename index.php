<?php
/**
 * Plugin Name: WPJIT RESTRICT
 * Plugin URI:  https://www.wpjit.com/
 * Description: Plug and Play
 * Version:     1.0.0
 * Author:      Zaheer Abbas Aghani
 * Author URI:  https://www.wpjit.com/
 * Text Domain: wpjitrestrict
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

function wpjit_register_files_for_plugin(){
define ('WPJIT_PLUGIN_NAME','WPJIT RESTRICT');
define('WPJIT_PLUGIN_DIR', plugin_dir_path(__FILE__));

require WPJIT_PLUGIN_DIR .'/include/enqueue.php';
require WPJIT_PLUGIN_DIR .'/include/shortcode.php';
require WPJIT_PLUGIN_DIR .'/include/wpjit-restrict-admin.php';
require WPJIT_PLUGIN_DIR .'/include/wpjit_insert_user.php';
require WPJIT_PLUGIN_DIR .'/include/wpjit_tickets.php';
require WPJIT_PLUGIN_DIR .'/include/wpjit_insert_tickets_info.php';

}


add_action('init','wpjit_register_files_for_plugin');