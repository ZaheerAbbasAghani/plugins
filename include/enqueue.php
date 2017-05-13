<?php 

function theme_name_scripts() {
wp_enqueue_script( '$handle', '$src', array( 'jquery' ), false, false);
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
