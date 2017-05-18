<?php 
// inserting user
add_action('wp_ajax_wpjit_insert_user', 'wpjit_insert_user' );
add_action('wp_ajax_nopriv_wpjit_insert_user','wpjit_insert_user');

function wpjit_insert_user(){
//print_r($_POST);
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$fullName = $firstName.' '. $lastName;
$email = $_POST['email'];
$password = $_POST['password'];
$packageName = $_POST['packageName'];
//print_r($_POST);

//echo $packageName;
$userdata = array(
	'user_login' => $fullName,
	'first_name' => $firstName, 
	'last_name' => $lastName, 
	'user_email' => $email, 
	'user_pass' => $password, 
	'role' => 'subscriber',
	);

//var_dump($userdata);
$user_id = wp_insert_user( $userdata );

 if(!is_wp_error($user_id)){
 	wp_set_current_user($user_id);
 	wp_set_auth_cookie( $user_id);
 	add_user_meta( $user_id , "_user_selected_package_Name", $packageName , true );
 	echo "Success";
    
 }
 else{
 	echo "Something went wrong";
 }

wp_die();
}