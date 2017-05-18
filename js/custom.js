jQuery(document).ready(function() {
//INSERT USER
	jQuery('#btnSubmit').click(function(e) {

		//alert('Working');
		e.preventDefault();
	 var firstName = jQuery('#examplefirstName').val();
	 var lastName = jQuery('#examplelastName').val();
	 var email = jQuery('#exampleInputEmail1').val();
	 var password = jQuery('#exampleInputPassword1').val();
	 var ajaxUrl = jQuery('#formRegister').data('url');
 	 var url = 'http://localhost/demos/checkout/'

	jQuery.ajax({

		url: ajaxUrl,
		type:'post',
		data:{firstName:firstName,
		lastName:lastName,
		email:email,
		password:password,
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

	alert(formUrl);
});


});