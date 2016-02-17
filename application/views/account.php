<div id="brown">
<h1><?php echo $_SESSION['session_data']['Username']." ";  ?></h1>
<p>Here is your account. At this time you may only upload images. Sorry about that.</p>
	<?php $this->load->helper('form');
echo form_open_multipart('Control'); 

	echo form_label('Choose an image from your computer', 'asdf')."<br>";
		$data= array(
			'name' => 'asdf',
			'type' => 'file',
			'required' => 'required'
		);
		echo form_input($data);
		echo "<br>";

	echo form_label('Title:', 'ti');
		$data= array(
			'name' => 'ti',
		);
		echo form_input($data);
		echo "<br>";
	
	$data = array(
		'name' => 'beamSword',
		'type' => 'submit',
		'value'=> 'Submit',
		'class'=> 'button'
	);
	echo form_submit($data); 
	?>
	

<?php echo form_close(); ?>

<?php if (isset($superSpicyCurry)) {
	echo "Successfully submitted " . $superSpicyCurry;
}?>

</div>