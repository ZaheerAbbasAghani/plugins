<?php 

function wpjit_enqueue_script() {

// STYLESHEETS FILES
wp_enqueue_style( 'wpjitBootstrapStyle', get_template_directory_uri().'/css/bootstrap.min.css', array(), '3.2.0', true);


// JAVASCRIPT FILES
wp_enqueue_script( 'wpjitBootstrapScript', get_template_directory_uri().'js/bootstrap.min.js', array('jquery'), '3.2.0', true );


}

add_action( 'wp_enqueue_scripts', 'wpjit_enqueue_script' );
