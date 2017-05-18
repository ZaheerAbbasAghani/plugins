<h2> Insert Your Tickets </h2>



<div class="wrap_ticket_form">
<form method="post" action="#" data-url="<?php echo admin_url('admin-ajax.php'); ?>" id="formTickets"> 

<form method="post" action="#" data-url="<?php admin_url('admin-ajax.php'); ?>">
  
	<div class="form-group">
    <input type="text" class="form-control" id="ticketName" placeholder="Full Name">
  </div>
  <div class="form-group">
    <input type="email" class="form-control" id="ticketEmail" placeholder="Email">
  </div>
  <div class="form-group">
  	<textarea class="form-control" id="ticketDetails" rows="6" cols="5"></textarea>
  </div>

  <button type="submit" class="btn btn-success" id="submitTicket">Insert Ticket </button>
</form>
	

</form>
</div><!--wrap_ticket_form-->