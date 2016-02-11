<div id="brown">
	<h1>Thank you for signing up!</h1>
	<h2>Please take a moment to fill out the form, and your account will be on the way!</h2>
		<?php $this->load->helper('form');
		echo form_open('Welcome'); 
			echo form_label('User Name :', 'u_name');
			$data= array(
				'name' => 'u_name',
			);
			echo form_input($data);

			echo "<br>";
	
			echo form_label('Password:', 'password');
			$data= array(
				'type' => 'password',
				'name' => 'password',
			);
			echo form_input($data);?>

			<div>
			<?php $data = array(
				'type' => 'submit',
				'value'=> 'Submit',
				'class'=> 'button'
			);
			echo form_submit($data); ?>
			</div>

		<?php echo form_close(); ?>
</div>