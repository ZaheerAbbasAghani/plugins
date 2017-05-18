<?php 

function wpjit_add_admin_menu_page(){
add_menu_page( 'WPJIT Restrict', 'Packages', 'manage_options', 'wpjit_packages', 'wpjit_packages_info','dashicons-admin-network',30);
}

//call register settings function
	add_action( 'admin_init', 'register_wpjit_packages_info' );

add_action('admin_menu','wpjit_add_admin_menu_page');


function register_wpjit_packages_info() {
	//register our settings
	register_setting( 'wpjit-settings-group', 'wpjit_package_title_standard' );
	register_setting( 'wpjit-settings-group', 'wpjit_package_sub_title_standard' );
	register_setting( 'wpjit-settings-group', 'wpjit_package_price_standard' );

	register_setting( 'wpjit-settings-group', 'wpjit_package_property_1' );
	register_setting( 'wpjit-settings-group', 'wpjit_package_property_2' );
	register_setting( 'wpjit-settings-group', 'wpjit_package_property_3' );
	register_setting( 'wpjit-settings-group', 'wpjit_package_property_4' );
	register_setting( 'wpjit-settings-group', 'wpjit_package_property_5' );
	register_setting( 'wpjit-settings-group', 'wpjit_package_property_6' );
	register_setting( 'wpjit-settings-group', 'wpjit_package_property_7' );
	register_setting( 'wpjit-settings-group', 'wpjit_package_property_8' );
	register_setting( 'wpjit-settings-group', 'wpjit_package_property_9' );
	register_setting( 'wpjit-settings-group', 'wpjit_package_property_10' );
}




function wpjit_packages_info() {
?>
<div class="wrap">
<h1> <?php echo WPJIT_PLUGIN_NAME; ?> </h1> <hr>
<?php
require WPJIT_PLUGIN_DIR.'/include/templates/package_standard_admin.php'; 
?>

</div>
<?php } ?>
