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

// ADD MY OWN FIELDS IN CHECKOUT PAGE 
/*add_action('woocommerce_after_order_notes', 'customise_checkout_field');

function customise_checkout_field($checkout)
{

$package_title = get_user_meta( get_current_user_id() , '_user_selected_package_title' ,true );
$package_price = get_user_meta( get_current_user_id() , '_user_selected_package_price' ,true );
echo $package_title;	
echo $package_price;

}*/

add_action( 'woocommerce_review_order_before_payment', 'skyverge_before_paying_notice',10,1 ); function skyverge_before_paying_notice() { 
$package_title = get_user_meta( get_current_user_id() , '_user_selected_package_Name' ,true );
update_user_meta( get_current_user_id() , '_user_selected_package_Name', $package_title );

echo "<ul class='wrap_package_details'>";
echo "<li><label> Package </label></li> <li class='packtitle'>". $package_title ."</li>";	
//echo "<li>". $package_price ."</li>";
echo "</ul>";
 }




// ADD TICKETS PANEL FIELDS
add_action( 'woocommerce_thankyou', 'bbloomer_add_content_thankyou' );

function bbloomer_add_content_thankyou() {
echo do_shortcode('[wpjit_tickets]');
    global $woocommerce;
	$order = new WC_Order(); 
	//echo global;
	echo $order->get_order_number();

//echo $order->get_order_number();
}

// ADD PRODUCT NOT MORE THAN 1
 add_filter ( 'woocommerce_before_cart' , 'allow_single_quantity_in_cart' );
    function allow_single_quantity_in_cart() {
            global $woocommerce;

            $cart_contents  =  $woocommerce->cart->get_cart();
            $keys           =  array_keys ( $cart_contents );

            foreach ( $keys as $key ) {
                    $woocommerce->cart->set_quantity ( $key, 1, true );
            }
    }


    