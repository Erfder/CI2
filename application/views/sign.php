<div id="brown">
	<h1>Thank you for signing up!</h1>
	<h2>Please take a moment to fill out the form, and your account will be on the way!</h2>
		<?php $this->load->helper('form');
		echo form_open('Welcome'); 
			echo form_label('Desired user Name:', 'su_name');
			$data= array(
				'name' => 'su_name',
				'required' => 'required'
			);
			echo form_input($data);

			echo "<br>";
//---------------------------------------	
			echo form_label('Password:', 'spassword');
			$data= array(
				'type' => 'password',
				'name' => 'spassword',
				'required' => 'required'
			);
			echo form_input($data);

			echo "<br>";
//---------------------------------------
			echo form_label('Email:', 'ema');
			$data= array(
				'type' => 'email',
				'name' => 'ema',
				'required' => 'required'
			);
			echo form_input($data);

			echo "<br>";
//---------------------------------------
			echo form_label('Phone (optional):', 'pho');
			$data= array(
				'type' => 'tel',
				'name' => 'pho',
			);
			echo form_input($data);

			echo "<br>";
//---------------------------------------

			$data = array(
				'type' => 'submit',
				'value'=> 'Submit',
				'class'=> 'button'
			);
			echo form_submit($data); ?>
			

		<?php echo form_close(); ?>
		<h2>When you're finished, just login!</h2>
		<p>ps I know this form is missing a lot of crucial elements like a confirm password and captcha. For now, I'm just trying to get the assignment done on time.
</div>