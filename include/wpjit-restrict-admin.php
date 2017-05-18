<?php 
// INSERTING ADMINISTRATION PAGE WPJIT RESTRICT
function wpjit_add_admin_menu_page(){
add_menu_page( 'WPJIT Restrict', 'Packages', 'manage_options', 'wpjit_packages', 'wpjit_packages_info','dashicons-admin-network',30);
}

//call register settings function
	add_action( 'admin_init', 'register_wpjit_packages_info' );

add_action('admin_menu','wpjit_add_admin_menu_page');


function register_wpjit_packages_info() {
	//register settings for standard package
	register_setting( 'wpjit-settings-group-standard', 'wpjit_package_title_standard' );
	register_setting( 'wpjit-settings-group-standard', 'wpjit_package_sub_title_standard' );
	register_setting( 'wpjit-settings-group-standard', 'wpjit_package_price_standard' );

	register_setting( 'wpjit-settings-group-standard', 'wpjit_package_property_1' );
	register_setting( 'wpjit-settings-group-standard', 'wpjit_package_property_2' );
	register_setting( 'wpjit-settings-group-standard', 'wpjit_package_property_3' );
	register_setting( 'wpjit-settings-group-standard', 'wpjit_package_property_4' );
	register_setting( 'wpjit-settings-group-standard', 'wpjit_package_property_5' );
	register_setting( 'wpjit-settings-group-standard', 'wpjit_package_property_6' );
	register_setting( 'wpjit-settings-group-standard', 'wpjit_package_property_7' );
	register_setting( 'wpjit-settings-group-standard', 'wpjit_package_property_8' );
	register_setting( 'wpjit-settings-group-standard', 'wpjit_package_property_9' );
	register_setting( 'wpjit-settings-group-standard', 'wpjit_package_property_10' );

	//register settings for professional package
register_setting( 'wpjit-settings-group-professional', 'wpjit_package_title_professional' );
register_setting( 'wpjit-settings-group-professional', 'wpjit_package_sub_title_professional' );
register_setting( 'wpjit-settings-group-professional', 'wpjit_package_price_professional' );

register_setting( 'wpjit-settings-group-professional', 'wpjit_package_property_1_professional' );
register_setting( 'wpjit-settings-group-professional', 'wpjit_package_property_2_professional' );
register_setting( 'wpjit-settings-group-professional', 'wpjit_package_property_3_professional' );
register_setting( 'wpjit-settings-group-professional', 'wpjit_package_property_4_professional' );
register_setting( 'wpjit-settings-group-professional', 'wpjit_package_property_5_professional' );
register_setting( 'wpjit-settings-group-professional', 'wpjit_package_property_6_professional' );
register_setting( 'wpjit-settings-group-professional', 'wpjit_package_property_7_professional' );
register_setting( 'wpjit-settings-group-professional', 'wpjit_package_property_8_professional' );
register_setting( 'wpjit-settings-group-professional', 'wpjit_package_property_9_professional' );
register_setting( 'wpjit-settings-group-professional', 'wpjit_package_property_10_professional' );

//register settings for advance package
register_setting( 'wpjit-settings-group-advance', 'wpjit_package_title_advance' );
register_setting( 'wpjit-settings-group-advance', 'wpjit_package_sub_title_advance' );
register_setting( 'wpjit-settings-group-advance', 'wpjit_package_price_advance' );

register_setting( 'wpjit-settings-group-advance', 'wpjit_package_property_1_advance' );
register_setting( 'wpjit-settings-group-advance', 'wpjit_package_property_2_advance' );
register_setting( 'wpjit-settings-group-advance', 'wpjit_package_property_3_advance' );
register_setting( 'wpjit-settings-group-advance', 'wpjit_package_property_4_advance' );
register_setting( 'wpjit-settings-group-advance', 'wpjit_package_property_5_advance' );
register_setting( 'wpjit-settings-group-advance', 'wpjit_package_property_6_advance' );
register_setting( 'wpjit-settings-group-advance', 'wpjit_package_property_7_advance' );
register_setting( 'wpjit-settings-group-advance', 'wpjit_package_property_8_advance' );
register_setting( 'wpjit-settings-group-advance', 'wpjit_package_property_9_advance' );
register_setting( 'wpjit-settings-group-advance', 'wpjit_package_property_10_advance' );


}




function wpjit_packages_info() {
?>
<style type="text/css">
	
.wrap_all_packages {float: left;width: 32%;background: #fff;text-align: center; margin: 5px;
box-shadow: 1px 1px 1px #ddd,-1px -1px 1px #ddd;
}
.wrap_all_packages  .submit  { text-align: center; }

</style>
<div class="wrap">
<?php settings_errors(); ?>
<h1 style="text-align: center;"> <?php echo WPJIT_PLUGIN_NAME; ?> </h1> <hr>
<?php require WPJIT_PLUGIN_DIR.'/include/templates/package_standard_admin.php';  ?>
<?php require WPJIT_PLUGIN_DIR.'/include/templates/package_professional_admin.php';  ?>
<?php require WPJIT_PLUGIN_DIR.'/include/templates/package_advance_admin.php';  ?>

</div>
<?php } ?>
