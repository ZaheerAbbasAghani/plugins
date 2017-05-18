
<div class="wpjit_wrapper">
	
	<div class="wpjit-table-starter"> <div class="col-md-4">
		<div id="tableStandard" class="wpjit_package_tables ">
			
			<div class="package_title_standard"> 
				<h1> <?php echo get_option('wpjit_package_title_standard'); ?> </h1>
				<span> <?php echo get_option('wpjit_package_sub_title_standard'); ?> </span>
			</div><!--pricing_title_standard-->

			<div class="package_price_standard">
			<h1 class="package_price"> <?php echo get_option('wpjit_package_price_standard'); ?> </h1>
			</div><!--package_price_standard-->
			<div class="package_features_standard"> 

			<ul>
				<li> <?php echo get_option('wpjit_package_property_1'); ?> </li>
				<li> <?php echo get_option('wpjit_package_property_2'); ?> </li>
				<li> <?php echo get_option('wpjit_package_property_3'); ?> </li>
				<li> <?php echo get_option('wpjit_package_property_4'); ?> </li>
				<li> <?php echo get_option('wpjit_package_property_5'); ?> </li>
				<li> <?php echo get_option('wpjit_package_property_6'); ?> </li>
				<li> <?php echo get_option('wpjit_package_property_7'); ?> </li>
				<li> <?php echo get_option('wpjit_package_property_8'); ?> </li>
				<li> <?php echo get_option('wpjit_package_property_9'); ?> </li>
			</ul>

			</div><!--package_features_standard-->	
			
			<div class="package_submit_standard"> 
				<a href="#" name="submitPackage"  id="submitPackage" class="button" data-toggle="modal" data-target="#myModal1">Get Started</a>
				 <!-- data-toggle="modal" data-target="#myModal" -->
			</div><!--package_submit_standard-->	
	
		</div><!--wpjit-table-starter -->	</div><!--4-->
		</div>
		<!---  END STANDARD --> 


	<div class="wpjit-table-professional "> 	<div class="col-md-4">
		<div id="tableProfessional" class="wpjit_package_tables">
	
			<div class="package_title_standard"> 
				<h1> <?php echo get_option('wpjit_package_title_professional'); ?> </h1>
				<span> <?php echo get_option('wpjit_package_sub_title_professional'); ?> </span>
			</div><!--pricing_title_standard-->

			<div class="package_price_standard">
			<h1 class="package_price"> <?php echo get_option('wpjit_package_price_professional'); ?></h1>
			</div><!--package_price_standard-->
			<div class="package_features_standard"> 

			<ul>
				<li> <?php echo get_option('wpjit_package_property_1_professional'); ?></li>
				<li> <?php echo get_option('wpjit_package_property_2_professional'); ?></li>
				<li> <?php echo get_option('wpjit_package_property_3_professional'); ?></li>
				<li> <?php echo get_option('wpjit_package_property_4_professional'); ?></li>
				<li> <?php echo get_option('wpjit_package_property_5_professional'); ?></li>
				<li> <?php echo get_option('wpjit_package_property_6_professional'); ?></li>
				
			</ul>

			</div><!--package_features_standard-->	
			
			<div class="package_submit_standard"> 
				<a href="#" name="submitPackage"  id="submitPackage" class="button" data-toggle="modal" data-target="#myModal2">Get Started</a>
			
			</div><!--package_submit_standard-->	
		
		</div><!-- tableProfessional -->	</div><!--4-->
	</div><!--wpjit-table-professional -->


	<div class="wpjit-table-advance "> 
	
	<div class="col-md-4">
	<div id="tableProfessional" class="wpjit_package_tables">
	
			<div class="package_title_advance"> 
				<h1> <?php echo get_option('wpjit_package_title_advance'); ?> </h1>
				<span> <?php echo get_option('wpjit_package_sub_title_advance'); ?>  </span>
			</div><!--pricing_title_standard-->

			<div class="package_price_standard">
			<h1 class="package_price"> <?php echo get_option('wpjit_package_price_advance'); ?> </h1>
			</div><!--package_price_standard-->
			<div class="package_features_standard"> 

			<ul>
				<li> <?php echo get_option('wpjit_package_property_1_advance'); ?> </li>
				<li> <?php echo get_option('wpjit_package_property_2_advance'); ?> </li>
				<li> <?php echo get_option('wpjit_package_property_3_advance'); ?> </li>
				<li> <?php echo get_option('wpjit_package_property_4_advance'); ?> </li>
				<li> <?php echo get_option('wpjit_package_property_5_advance'); ?> </li>
				<li> <?php echo get_option('wpjit_package_property_6_advance'); ?> </li>
				<li> <?php echo get_option('wpjit_package_property_7_advance'); ?> </li>
				
			</ul>

			</div><!--package_features_standard-->	
			
			<div class="package_submit_standard"> 
				<a href="#" name="submitPackage"  id="submitPackage" class="button" data-toggle="modal" data-target="#myModal3">Get Started</a>
			
			</div><!--package_submit_standard-->	
	
		</div><!-- tableProfessional -->		</div><!--4-->


	</div><!--wpjit-table-advance -->

</div><!--wpjit_wrapper-->


<!-- Modal 1 -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="modal-title" id="myModalLabel"> Sign Up </span>
      </div>
      <div class="modal-body">
     
	<form method="post" action="#" data-url="<?php echo admin_url('admin-ajax.php') ?>" id="standard_formRegister">

	<input type="hidden" value="<?php echo get_option('wpjit_package_title_standard'); ?>" id="packageName_standard">
	<!-- <input type="hidden" value="<?php //echo get_option('wpjit_package_price_standard'); ?>" 	id="standardPrice"> -->
		<div class="form-group">
			<input type="text" class="form-control" id="standard_firstName" placeholder="First Name" required>
		</div>

		<div class="form-group">
			<input type="text" class="form-control" id="standard_lastName" placeholder="Last Name" required>
		</div>

		<div class="form-group">
			<input type="email" class="form-control" id="standard_email" placeholder="Email" required>
		</div>

		<div class="form-group">
			<input type="password" class="form-control" id="standard_password" placeholder="Password" required >
		</div>

	 
	 	 <button type="submit" class="btn btn-default btnSubmit1"> Submit </button>
	
	</form>



      </div>
    
    </div>
  </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="modal-title" id="myModalLabel"> Sign Up  </span>
      </div>
      <div class="modal-body">
     
	<form method="post" action="#" data-url="<?php echo admin_url('admin-ajax.php') ?>" id="professional_formRegister">

	<input type="hidden" value="<?php echo get_option('wpjit_package_title_professional'); ?>" id="packageName_professional">
	<!--input type="hidden" value="<?php //echo get_option('wpjit_package_price_professional'); ?>" 	id="standardPrice"-->
		<div class="form-group">
			<input type="text" class="form-control" id="professional_firstName" placeholder="First Name" required>
		</div>

		<div class="form-group">
			<input type="text" class="form-control" id="professional_lastName" placeholder="Last Name" required>
		</div>

		<div class="form-group">
			<input type="email" class="form-control" id="professional_Email" placeholder="Email" required>
		</div>

		<div class="form-group">
			<input type="password" class="form-control" id="professional_Password" placeholder="Password" required >
		</div>

	 
	 	 <button type="submit" class="btn btn-default btnSubmit2" > Submit </button>
	
	</form>



      </div>
    
    </div>
  </div>
</div>

<!-- Modal 3 -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="modal-title" id="myModalLabel"> Sign Up </span>
      </div>
      <div class="modal-body">
     
	<form method="post" action="#" data-url="<?php echo admin_url('admin-ajax.php') ?>" id="formRegister_advance">

	<input type="hidden" value="<?php echo get_option('wpjit_package_title_advance'); ?>" id="packageName_advance">
	<!--input type="hidden" value="<?php //echo get_option('wpjit_package_price_advance'); ?>" 	id="standardPrice"-->
		<div class="form-group">
			<input type="text" class="form-control" id="advance_firstName" placeholder="First Name" required>
		</div>

		<div class="form-group">
			<input type="text" class="form-control" id="advance_lastName" placeholder="Last Name" required>
		</div>

		<div class="form-group">
			<input type="email" class="form-control" id="advance_Email" placeholder="Email" required>
		</div>

		<div class="form-group">
			<input type="password" class="form-control" id="advance_Password" placeholder="Password" required >
		</div>

	 
	 	 <button type="submit" class="btn btn-default btnSubmit3" > Submit </button>
	
	</form>



      </div>
    
    </div>
  </div>
</div>