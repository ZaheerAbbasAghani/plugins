<div id="wpjit_standard">
<div class="wrap_all_packages">
<h3> Professional Package Options </h3>
<form method="post" action="options.php">
    <?php settings_fields( 'wpjit-settings-group-professional' ); ?>
    <?php do_settings_sections( 'wpjit-settings-group-professional' ); ?>
    <table class="form-table">
     
        <tr valign="top">
        <td><input type="text" name="wpjit_package_title_professional" value="<?php echo esc_attr( get_option('wpjit_package_title_professional') ); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <td><input type="text" name="wpjit_package_sub_title_professional" value="<?php echo esc_attr( get_option('wpjit_package_sub_title_professional') ); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <td><input type="text" name="wpjit_package_price_professional" value="<?php echo esc_attr( get_option('wpjit_package_price_professional') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td><input type="text" name="wpjit_package_property_1_professional" value="<?php echo esc_attr( get_option('wpjit_package_property_1_professional') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td><input type="text" name="wpjit_package_property_2_professional" value="<?php echo esc_attr( get_option('wpjit_package_property_2_professional') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td><input type="text" name="wpjit_package_property_3_professional" value="<?php echo esc_attr( get_option('wpjit_package_property_3_professional') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td><input type="text" name="wpjit_package_property_4_professional" value="<?php echo esc_attr( get_option('wpjit_package_property_4_professional') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td><input type="text" name="wpjit_package_property_5_professional" value="<?php echo esc_attr( get_option('wpjit_package_property_5_professional') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td><input type="text" name="wpjit_package_property_6_professional" value="<?php echo esc_attr( get_option('wpjit_package_property_6_professional') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td><input type="text" name="wpjit_package_property_7_professional" value="<?php echo esc_attr( get_option('wpjit_package_property_7_professional') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td><input type="text" name="wpjit_package_property_8_professional" value="<?php echo esc_attr( get_option('wpjit_package_property_8_professional') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td><input type="text" name="wpjit_package_property_9_professional" value="<?php echo esc_attr( get_option('wpjit_package_property_9_professional') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td><input type="text" name="wpjit_package_property_10_professional" value="<?php echo esc_attr( get_option('wpjit_package_property_10_professional') ); ?>" /></td>
        </tr>



    </table>
    
    <?php submit_button(); ?>

</form>
</div><!-- wrap_all_packages -->
</div><!--wpjit_standard-->
