<div id="brown">
<h1><?php echo $_SESSION['session_data']['Username']." ";  ?></h1>
<p>Here is your account. At this time you may upload new images or update your past images.</p>
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

	echo form_label('Description:', 'descr');
		$data= array(
			'name' => 'descr',
		);
		echo form_input($data);
		echo "<br>";

	echo form_label('Media:', 'medi');
		$data= array(
			'name' => 'medi',
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
	echo "<div style='width: 30%; margin: auto; background-color: #58351a; color: white;'>Successfully submitted " . $superSpicyCurry."</div>";
}

/*echo form_open_multipart('Control'); 

	echo form_label('Edit Title', 'asdf')."<br>";
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

	echo form_label('Description:', 'descr');
		$data= array(
			'name' => 'descr',
		);
		echo form_input($data);
		echo "<br>";

	echo form_label('Media:', 'medi');
		$data= array(
			'name' => 'medi',
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
	

<?php echo form_close(); */
foreach ($thedata as $row) {
	echo form_open_multipart('Control'); 

	echo form_label('Edit Title', 'titl')."<br>";
		$data= array(
			'name' => 'titl',
			'required' => 'required'
		);
		echo form_input($data, $row['title']);
		echo "<br>";

	echo form_label('Edit Description', 'des')."<br>";
		$data= array(
			'name' => 'des',
			'required' => 'required'
		);
		echo form_input($data, $row['desc']);
		echo "<br>";

	echo form_label('Edit Media', 'me')."<br>";
		$data= array(
			'name' => 'me',
			'required' => 'required'
		);
		echo form_input($data, $row['media']);
		echo "<br>";

	$data = array(
		'name' => 'rincrud',
		'type' => 'submit',
		'value'=> 'Update',
		'class'=> 'button'
	);
	echo form_submit($data); 

	echo form_close();
}
 ?>


</div>