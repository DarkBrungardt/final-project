<div class="capsule-fluid">
	<form action="" id="manage-book">
		<input type="hidden" name="id" value="<?php echo isset($id) ? $id :'' ?>">
		<input type="hidden" name="venue_id" value="<?php echo isset($_GET['venue_id']) ? $_GET['venue_id'] :'' ?>">
		<div class="fgroup">
			<label for="" class="control-label">Full Name</label>
			<input type="text" class="fcontrol" name="name"  value="<?php echo isset($name) ? $name :'' ?>" required>
		</div>
		<div class="fgroup">
			<label for="" class="control-label">Address</label>
			<textarea cols="30" rows = "2" required="" name="address" class="fcontrol"><?php echo isset($address) ? $address :'' ?></textarea>
		</div>
		<div class="fgroup">
			<label for="" class="control-label">Email</label>
			<input type="email" class="fcontrol" name="email"  value="<?php echo isset($email) ? $email :'' ?>" required>
		</div>
		<div class="fgroup">
			<label for="" class="control-label">Contact #</label>
			<input type="text" class="fcontrol" name="contact"  value="<?php echo isset($contact) ? $contact :'' ?>" required>
		</div>
		<div class="fgroup">
			<label for="" class="control-label">Duration</label>
			<input type="text" class="fcontrol" name="duration"  value="<?php echo isset($duration) ? $duration :'' ?>" required>
		</div>
		<div class="fgroup">
			<label for="" class="control-label">Desired Event Schedule</label>
			<input type="text" class="fcontrol datetimepicker" name="schedule"  value="<?php echo isset($schedule) ? $schedule :'' ?>" required>
		</div>
	</form>
</div>
<script>
	 $('.datetimepicker').datetimepicker({
	      format:'Y/m/d H:i',
	      startDate: '+3d'
	  })
	$('#manage-book').submit(function(e){
		e.preventDefault()
		start_load()
		$('#msg').html('')
		$.ajax({
			url:'admin/ajax.php?action=save_book',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp==1){
					alert_toast("book Request Sent.",'success')
						end_load()
						uni_modal("","book_msg.php")

				}
			}
		})
	})
</script>