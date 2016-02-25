<div id="brown">
<h1><?php echo $_SESSION['session_data']['Username']." ";?></h1>
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

	echo form_label('DA sharing link:', 'link');
		$data= array(
			'name' => 'link',
			'type' => 'url',
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
	echo form_close(); ?>

<?php if (isset($superSpicyCurry)) {
	echo "<div style='width: 30%; margin: auto; background-color: #58351a; color: white;'>Successfully submitted " . $superSpicyCurry."</div>";
}

foreach ($thedata as $row) {
	echo "<article>";
	echo "<h1>".$row['title']."</h1>";
	echo "<section>";
	echo form_open('Control'); 
	echo "<img src='".$row['source']."' style='float:left;margin:15px;'><br>";
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
		);
		echo form_input($data, $row['desc']);
		echo "<br>";

	echo form_label('Edit Media', 'me')."<br>";
		$data= array(
			'name' => 'me',
		);
		echo form_input($data, $row['media']);
		echo "<br>";

	$data= array(
		'name' => 'iddd',
		'required' => 'required',
		'style' => 'display:none;'
	);
	echo form_input($data, $row['image_id']);

	$data = array(
		'name' => 'rincrud',
		'type' => 'submit',
		'value'=> 'Update',
		'class'=> 'button'
	);
	echo form_submit($data); 
	echo form_close();

	echo form_open('Control');
	$data= array(
		'name' => 'iddd',
		'required' => 'required',
		'style' => 'display:none;'
	);
	echo form_input($data, $row['image_id']);

	$data = array(
		'name' => 'dele',
		'type' => 'submit',
		'value'=> 'Delete',
		'class'=> 'button'
	);
	echo form_submit($data); 
	echo form_close(); 

	echo "<div id='clearfix'></div>";
	echo "</section>";
	echo "</article>";
}
$this->load->database(); 
$dog = $this->db->get_where('users', array('username' => $_SESSION['session_data']['Username']))->row_array();
//print_r($dog);
echo "<h2 style='margin-top: 30px;'>Favorited Images: <br>";
$favids = explode( '-', $dog['favs']);
foreach ($favids as $img) {
	$fish = $this->db->get_where('image', array('image_id' => $img))->row_array();
	echo "<div class='thumb'><a href='Accountredirected'><img src='".$fish['source']."'></a></div>";
};
echo "<div id='clearfix'></div></h2>"







 ?>










</div>