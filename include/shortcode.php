<?php

function wpjit_shortcode_for_tables(){
	require WPJIT_PLUGIN_DIR.'/include/templates/package_tables.php';
}

add_shortcode( 'wpjit_restrict','wpjit_shortcode_for_tables' );


function wpjit_shortcode_display_woo_products(){

require WPJIT_PLUGIN_DIR.'/include/wpjit_woo_products.php';

}

add_shortcode( 'wpjit_woo', 'wpjit_shortcode_display_woo_products' );


function wpjit_create_tickets(){

require WPJIT_PLUGIN_DIR.'/include/templates/insert_tickets.php';

}

add_shortcode('wpjit_tickets','wpjit_create_tickets');