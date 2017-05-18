<div id="wpjit_standard">
<div class="wrap_all_packages">
<h3> Standard Advance Options </h3>
<form method="post" action="options.php">
    <?php settings_fields( 'wpjit-settings-group-advance' ); ?>
    <?php do_settings_sections( 'wpjit-settings-group-advance' ); ?>
    <table class="form-table">
     
        <tr valign="top">
        <td><input type="text" name="wpjit_package_title_advance" value="<?php echo esc_attr( get_option('wpjit_package_title_advance') ); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <td><input type="text" name="wpjit_package_sub_title_advance" value="<?php echo esc_attr( get_option('wpjit_package_sub_title_advance') ); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <td><input type="text" name="wpjit_package_price_advance" value="<?php echo esc_attr( get_option('wpjit_package_price_advance') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td><input type="text" name="wpjit_package_property_1_advance" value="<?php echo esc_attr( get_option('wpjit_package_property_1_advance') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td><input type="text" name="wpjit_package_property_2_advance" value="<?php echo esc_attr( get_option('wpjit_package_property_2_advance') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td><input type="text" name="wpjit_package_property_3_advance" value="<?php echo esc_attr( get_option('wpjit_package_property_3_advance') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td><input type="text" name="wpjit_package_property_4_advance" value="<?php echo esc_attr( get_option('wpjit_package_property_4_advance') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td><input type="text" name="wpjit_package_property_5_advance" value="<?php echo esc_attr( get_option('wpjit_package_property_5_advance') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td><input type="text" name="wpjit_package_property_6_advance" value="<?php echo esc_attr( get_option('wpjit_package_property_6_advance') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td><input type="text" name="wpjit_package_property_7_advance" value="<?php echo esc_attr( get_option('wpjit_package_property_7_advance') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td><input type="text" name="wpjit_package_property_8_advance" value="<?php echo esc_attr( get_option('wpjit_package_property_8_advance') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td><input type="text" name="wpjit_package_property_9_advance" value="<?php echo esc_attr( get_option('wpjit_package_property_9_advance') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <td><input type="text" name="wpjit_package_property_10_advance" value="<?php echo esc_attr( get_option('wpjit_package_property_10_advance') ); ?>" /></td>
        </tr>



    </table>
    
    <?php submit_button(); ?>

</form>
</div><!-- wrap_all_packages -->
</div><!--wpjit_standard-->
