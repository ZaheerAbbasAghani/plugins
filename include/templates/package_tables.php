
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
				<a href="#" name="submitPackage"  id="submitPackage" class="button" data-toggle="modal" data-target="#myModal">Get Started</a>
				 <!-- data-toggle="modal" data-target="#myModal" -->
			</div><!--package_submit_standard-->	
	
		</div><!--wpjit-table-starter -->	</div><!--4-->
		</div>
		<!---  END STANDARD --> 


	<div class="wpjit-table-professional "> 	<div class="col-md-4">
		<div id="tableProfessional" class="wpjit_package_tables">
	
			<div class="package_title_standard"> 
				<h1> Professional </h1>
				<span> DESIGNED FOR SMALL BUSINESS </span>
			</div><!--pricing_title_standard-->

			<div class="package_price_standard">
			<h1 class="package_price"> $199/mo </h1>
			</div><!--package_price_standard-->
			<div class="package_features_standard"> 

			<ul>
				<li> Everything includes standard +</li>
				<li> E-commerce Support </li>
				<li> Daily Cloud Backups </li>
				<li> Complete Performance audit </li>
				<li> 3 Hours of Development</li>
				<li> Support Through Ticket </li>
				
			</ul>

			</div><!--package_features_standard-->	
			
			<div class="package_submit_standard"> 
					<input type="submit" name="submitPackage"  id="submitPackage" value="Get Started" />
			</div><!--package_submit_standard-->	
		
		</div><!-- tableProfessional -->	</div><!--4-->
	</div><!--wpjit-table-professional -->


	<div class="wpjit-table-advance "> 
	
	<div class="col-md-4">
	<div id="tableProfessional" class="wpjit_package_tables">
	
			<div class="package_title_advance"> 
				<h1> Advance </h1>
				<span> DESIGNED FOR SMALL BUSINESS </span>
			</div><!--pricing_title_standard-->

			<div class="package_price_standard">
			<h1 class="package_price"> $299/mo </h1>
			</div><!--package_price_standard-->
			<div class="package_features_standard"> 

			<ul>
				<li> + Everything includes Pro</li>
				<li> Ecommerce Support </li>
				<li> Advance Security </li>
				<li> Malware Protection </li>
				<li> Security Monitoring </li>
				<li> Complete Performance Audit </li>
				<li> 10 hour of Development </li>
				
			</ul>

			</div><!--package_features_standard-->	
			
			<div class="package_submit_standard"> 
					<input type="submit" name="submitPackage"  id="submitPackage" value="Get Started" />
			</div><!--package_submit_standard-->	
	
		</div><!-- tableProfessional -->		</div><!--4-->


	</div><!--wpjit-table-advance -->

</div><!--wpjit_wrapper-->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="modal-title" id="myModalLabel"> Sign Up</span>
      </div>
      <div class="modal-body">
     
	<form method="post" action="#" data-url="<?php echo admin_url('admin-ajax.php') ?>" id="formRegister">

		<div class="form-group">
			<input type="text" class="form-control" id="examplefirstName" placeholder="First Name" required>
		</div>

		<div class="form-group">
			<input type="text" class="form-control" id="examplelastName" placeholder="Last Name" required>
		</div>

		<div class="form-group">
			<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required>
		</div>

		<div class="form-group">
			<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required >
		</div>

	 
	 	 <button type="submit" class="btn btn-default" id="btnSubmit"> Submit </button>
	
	</form>



      </div>
    
    </div>
  </div>
</div>