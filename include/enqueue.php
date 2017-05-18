<?php 

function wpjit_enqueue_script() {

// STYLESHEETS FILES
	wp_enqueue_style( 'wpjitStyle', plugins_url().'/wpjit-restrict/css/wpjit_restrict.css');

wp_enqueue_style( 'wpjitBootstrapStyle', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');


// JAVASCRIPT FILES
wp_enqueue_script( 'wpjitBootstrapScript', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');

// JAVASCRIPT FILES
wp_enqueue_script( 'wpjitCustom',  plugins_url().'/wpjit-restrict/js/wpjit_custom.js'); 


}

add_action( 'wp_enqueue_scripts', 'wpjit_enqueue_script' );

if( ! is_user_logged_in()){
function custom_add_to_cart_redirect() { 
    return 'http://localhost/demos/packages/'; 
}
add_filter( 'woocommerce_add_to_cart_redirect', 'custom_add_to_cart_redirect' );
}


if(is_user_logged_in()){

function wpjit_redirect_checkout_add_cart( $url ) {
	$url = get_permalink( get_option( 'woocommerce_checkout_page_id' ) ); 
	return $url;
}

add_filter( 'woocommerce_add_to_cart_redirect', 'wpjit_redirect_checkout_add_cart' );

}

/*  NOT REDIRECT IF USER LOGIN IS_CART || IS_CHECKOUT  */
function wpjit_redirect_cart_and_checkout() {
    if (! is_user_logged_in() && (is_cart() || is_checkout()) ) {
        	wp_redirect(wp_login_url());
        exit;
    }
}
add_action('template_redirect', 'wpjit_redirect_cart_and_checkout');

/* Add the field to the checkout page 
add_action('woocommerce_after_order_notes', 'customise_checkout_field');

function customise_checkout_field($checkout)
{
	echo '<div id="customise_checkout_field"><h2>' . __('Heading') . '</h2>';
	woocommerce_form_field('customised_field_name', array(
		'type' => 'text',
		'class' => array(
			'my-field-class form-row-wide'
		) ,
		'label' => __('Customise Additional Field') ,
		'placeholder' => __('Guidence') ,
		'required' => true,
	) , $checkout->get_value('customised_field_name'));
	echo '</div>';
}*/

add_action( 'woocommerce_thankyou', 'bbloomer_add_content_thankyou' );

function bbloomer_add_content_thankyou() {
echo do_shortcode('[wpjit_tickets]');
}
