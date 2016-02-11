<div id="brown">
	<h1>Start viewing art today!</h1>
	<section class="home">
		<strong>Returning user</strong>

		<?php $this->load->helper('form');
		echo form_open('logged'); 
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
	</section>
	<section class="home">
		<strong>New User</strong>
		<p>Sign up is free and easy. Click <?php echo anchor('Signup', 'here');?> to create your account and sign up now.</p>
	</section>
</div>