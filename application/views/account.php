<div id="brown">
<h1><?php echo $_SESSION['session_data']['Username']." ";  ?></h1>
<p>Here is your account. At this time you may only upload images. Sorry about that.</p>
	<?php $this->load->helper('form');
echo form_open('Welcome'); 
	echo form_label('Choose an image from your computer', 'file')."<br>";
	$data= array(
		'name' => 'file',
		'type' => 'file',
		'required' => 'required'
	);
	echo form_input($data);

	echo "<br>";
	?>
	
		<?php $data = array(
			'type' => 'submit',
			'value'=> 'Submit',
			'class'=> 'button'
		);
		echo form_submit($data); ?>
	

<?php echo form_close(); ?>

</div>