<?php 
add_action('wp_ajax_wpjit_insert_tickets','wpjit_insert_tickets');
add_action('wp_ajax_nopriv_wpjit_insert_tickets','wpjit_insert_tickets');

function wpjit_insert_tickets(){
//print_r($_POST);

$uName = $_POST['ticketName'];
$uEmail = $_POST['ticketEmail'];
$uDetails = $_POST['ticketDetails'];

$args = array(

	'post_title' => $uName,
	'post_content' => $uDetails,
	'post_status' => 'publish',
	'post_auhor' => 1,
	'post_type' => 'wpjit_tickets',
	


	);

$postID = wp_insert_post($args);
echo $postID;

wp_die();

}
