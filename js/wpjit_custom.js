jQuery(document).ready(function() {
//INSERT USER
	jQuery('.btnSubmit1').click(function(e) {

	//alert('Working');
		e.preventDefault();
	 var firstName = jQuery('#standard_firstName').val();
	 var lastName = jQuery('#standard_lastName').val();
	 var email = jQuery('#standard_email').val();
	 var password = jQuery('#standard_password').val();
	 var ajaxUrl = jQuery('#standard_formRegister').data('url');
 	 var url = 'http://localhost/demos/checkout/';
 	 var packageName_standard = jQuery('#packageName_standard').val();
	 //var standardPrice = jQuery('#standardPrice').val();

//alert(packageName);

	jQuery.ajax({

		url: ajaxUrl,
		type:'post',
		data:{firstName:firstName,
		lastName:lastName,
		email:email,
		password:password,
		packageName:packageName_standard,
		//standardPrice:standardPrice,
		action:'wpjit_insert_user'

		},

		success:function(response){
			alert(response);
			window.location= url;
		},

		error: function(response){
			alert(response);
		},

	}); 

	//end Ajax



	});


jQuery('.btnSubmit2').click(function(e) {

	//alert('Working');
		e.preventDefault();
	 var firstName = jQuery('#professional_firstName').val();
	 var lastName = jQuery('#professional_lastName').val();
	 var email = jQuery('#professional_Email').val();
	 var password = jQuery('#professional_Password').val();
	 var ajaxUrl = jQuery('#professional_formRegister').data('url');
 	 var url = 'http://localhost/demos/checkout/';
 	 var packageName_professional = jQuery('#packageName_professional').val();
	 //var standardPrice = jQuery('#standardPrice').val();

//alert(packageName);

	jQuery.ajax({

		url: ajaxUrl,
		type:'post',
		data:{firstName:firstName,
		lastName:lastName,
		email:email,
		password:password,
		packageName:packageName_professional,
		//standardPrice:standardPrice,
		action:'wpjit_insert_user'

		},

		success:function(response){
			alert(response);
			window.location= url;
		},

		error: function(response){
			alert(response);
		},

	}); 

	//end Ajax



	});


jQuery('.btnSubmit3').click(function(e) {

	//alert('Working');
		e.preventDefault();
	 var firstName = jQuery('#advance_firstName').val();
	 var lastName = jQuery('#advance_lastName').val();
	 var email = jQuery('#advance_Email').val();
	 var password = jQuery('#advance_Password').val();
	 var ajaxUrl = jQuery('#formRegister_advance').data('url');
 	 var url = 'http://localhost/demos/checkout/';
 	 var packageName_advance = jQuery('#packageName_advance').val();
	 //var standardPrice = jQuery('#standardPrice').val();

//alert(packageName);

	jQuery.ajax({

		url: ajaxUrl,
		type:'post',
		data:{firstName:firstName,
		lastName:lastName,
		email:email,
		password:password,
		packageName:packageName_advance,
		//standardPrice:standardPrice,
		action:'wpjit_insert_user'

		},

		success:function(response){
			alert(response);
			window.location= url;
		},

		error: function(response){
			alert(response);
		},

	}); 

	//end Ajax



	});




// INSERT TICKETS

jQuery('#submitTicket').click(function(e){
	e.preventDefault();
	var formUrl = jQuery('#formTickets').data('url');
	var ticketName = jQuery('#ticketName').val();
	var ticketEmail = jQuery('#ticketEmail').val();
	var ticketDetails = jQuery('#ticketDetails').val();

	jQuery.ajax({

		url: formUrl,
		type:'post',
		data: {
			ticketName: ticketName,
			ticketEmail:ticketEmail,
			ticketDetails:ticketDetails,
			action:'wpjit_insert_tickets',
			},

		success:function(response){
				alert(response);
		},

		error:function(response){
				alert(response);
		},

	});


});


});