<div id="wpjit_standard">
<div class="wrap_all_packages">
<h3> Standard Package Options </h3>
<form method="post" action="options.php">
    <?php settings_fields( 'wpjit-settings-group-standard' ); ?>
    <?php do_settings_sections( 'wpjit-settings-group-standard' ); ?>
    <table class="form-table">
     
        <tr valign="top">
        <td><input type="text" name="wpjit_package_title_standard" value="<?php echo esc_attr( get_option('wpjit_package_title_standard') ); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <td><input type="text" name="wpjit_package_sub_title_standard" value="<?php echo esc_attr( get_option('wpjit_package_sub_title_standard') ); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <td><input type="text" name="wpjit_package_price_standard" value="<?php echo esc_attr( get_option('wpjit_package_price_standard') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td><input type="text" name="wpjit_package_property_1" value="<?php echo esc_attr( get_option('wpjit_package_property_1') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td><input type="text" name="wpjit_package_property_2" value="<?php echo esc_attr( get_option('wpjit_package_property_2') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td><input type="text" name="wpjit_package_property_3" value="<?php echo esc_attr( get_option('wpjit_package_property_3') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td><input type="text" name="wpjit_package_property_4" value="<?php echo esc_attr( get_option('wpjit_package_property_4') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td><input type="text" name="wpjit_package_property_5" value="<?php echo esc_attr( get_option('wpjit_package_property_5') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td><input type="text" name="wpjit_package_property_6" value="<?php echo esc_attr( get_option('wpjit_package_property_6') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td><input type="text" name="wpjit_package_property_7" value="<?php echo esc_attr( get_option('wpjit_package_property_7') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td><input type="text" name="wpjit_package_property_8" value="<?php echo esc_attr( get_option('wpjit_package_property_8') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td><input type="text" name="wpjit_package_property_9" value="<?php echo esc_attr( get_option('wpjit_package_property_9') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td><input type="text" name="wpjit_package_property_10" value="<?php echo esc_attr( get_option('wpjit_package_property_10') ); ?>" /></td>
        </tr>



    </table>
    
    <?php submit_button(); ?>

</form>

</div><!-- wrap_all_packages -->
</div><!--wpjit_standard-->
