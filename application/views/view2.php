<div id="brown">
	<h4>Recent Pieces | <?php echo anchor('View', 'Featured ') ?></h4>

<article>
<h1><?php 
 $this->load->helper('form'); 
 	$attributes = array('class' => 'formfix');
	echo form_open('user', $attributes);
	$data= array(
		'name' => 'u_name',
		'required' => 'required',
		'value' => $imginf[0]['username'],
		'style' => 'display:none;'
	);
	echo form_input($data);
	$data = array(
		'name' => 'sub',
		'type' => 'submit',
		'value'=> $imginf[0]['username'],
		'class' => 'buttonash1'
	);
	echo form_submit($data); 
	echo form_close(); 
?></h1>
<section>
	<div id="imgcont">
		<?php echo "<img src='".$imginf[0]['source']."' alt='image 1'>";  ?>
	</div>
	<h3><?php echo $imginf[0]['title']; ?></h3>
	<p><?php echo $imginf[0]['desc']; ?></p>
	<?php 
$this->db->select('favs');
		$this->db->where('username', $_SESSION['session_data']['Username']);
		$favolist = $this->db->get('users')->row_array();
		$k = $favolist['favs'];
		if (strpos($k, '-'.$imginf[0]['image_id']) !== false) {
		    echo 'This is in your favorites';
		}else{
			$attributes = array('class' => 'formfix');
			echo form_open('Addfav', $attributes);
			$data = array(
				'name' => 'favid',
				'required' => 'required',
				'value' => $imginf[0]['image_id'],
				'style' => 'display:none;'
			);
			echo form_input($data);
			$data = array(
				'name' => 'ufid',
				'required' => 'required',
				'value' => $imginf[0]['userid'],
				'style' => 'display:none;'
			);
			echo form_input($data);
			$data = array(
				'name' => 'usrn',
				'required' => 'required',
				'value' => $_SESSION['session_data']['Username'],
				'style' => 'display:none;'
			);
			echo form_input($data);
			$data = array(
				'name' => 'sub',
				'type' => 'submit',
				'value'=> 'Add to favorites',
				'class' => 'button'
			);
			echo form_submit($data); 
			echo form_close(); 
		};
	?>
	<div id="clearfix"></div>
</section>
<h2><?php echo $imginf[0]['contactinfo']; ?></h2>
</article>

<article>
<h1><?php 
 $this->load->helper('form'); 
 	$attributes = array('class' => 'formfix');
	echo form_open('user', $attributes);
	$data= array(
		'name' => 'u_name',
		'required' => 'required',
		'value' => $imginf[1]['username'],
		'style' => 'display:none;'
	);
	echo form_input($data);
	$data = array(
		'name' => 'sub',
		'type' => 'submit',
		'value'=> $imginf[1]['username'],
		'class' => 'buttonash1'
	);
	echo form_submit($data); 
	echo form_close(); 
?></h1>
<section>
	<div id="imgcont">
		<?php echo "<img src='".$imginf[1]['source']."' alt='image 1'>";  ?>
	</div>
	<h3><?php echo $imginf[1]['title']; ?></h3>
	<p><?php echo $imginf[1]['desc']; ?></p>
	<?php 
$this->db->select('favs');
		$this->db->where('username', $_SESSION['session_data']['Username']);
		$favolist = $this->db->get('users')->row_array();
		$k = $favolist['favs'];
		if (strpos($k, '-'.$imginf[1]['image_id']) !== false) {
		    echo 'This is in your favorites';
		}else{
			$attributes = array('class' => 'formfix');
			echo form_open('Addfav', $attributes);
			$data = array(
				'name' => 'favid',
				'required' => 'required',
				'value' => $imginf[1]['image_id'],
				'style' => 'display:none;'
			);
			echo form_input($data);
			$data = array(
				'name' => 'ufid',
				'required' => 'required',
				'value' => $imginf[1]['userid'],
				'style' => 'display:none;'
			);
			echo form_input($data);
			$data = array(
				'name' => 'usrn',
				'required' => 'required',
				'value' => $_SESSION['session_data']['Username'],
				'style' => 'display:none;'
			);
			echo form_input($data);
			$data = array(
				'name' => 'sub',
				'type' => 'submit',
				'value'=> 'Add to favorites',
				'class' => 'button'
			);
			echo form_submit($data); 
			echo form_close(); 
		};
	?>
	<div id="clearfix"></div>
</section>
<h2><?php echo $imginf[1]['contactinfo']; ?></h2>
</article>

<article>
<h1><?php 
 $this->load->helper('form'); 
 	$attributes = array('class' => 'formfix');
	echo form_open('user', $attributes);
	$data= array(
		'name' => 'u_name',
		'required' => 'required',
		'value' => $imginf[2]['username'],
		'style' => 'display:none;'
	);
	echo form_input($data);
	$data = array(
		'name' => 'sub',
		'type' => 'submit',
		'value'=> $imginf[2]['username'],
		'class' => 'buttonash1'
	);
	echo form_submit($data); 
	echo form_close(); 
?></h1>
<section>
	<div id="imgcont">
		<?php echo "<img src='".$imginf[2]['source']."' alt='image 1'>";  ?>
	</div>
	<h3><?php echo $imginf[2]['title']; ?></h3>
	<p><?php echo $imginf[2]['desc']; ?></p>
	<?php 
$this->db->select('favs');
		$this->db->where('username', $_SESSION['session_data']['Username']);
		$favolist = $this->db->get('users')->row_array();
		$k = $favolist['favs'];
		if (strpos($k, '-'.$imginf[2]['image_id']) !== false) {
		    echo 'This is in your favorites';
		}else{
			$attributes = array('class' => 'formfix');
			echo form_open('Addfav', $attributes);
			$data = array(
				'name' => 'favid',
				'required' => 'required',
				'value' => $imginf[2]['image_id'],
				'style' => 'display:none;'
			);
			echo form_input($data);
			$data = array(
				'name' => 'ufid',
				'required' => 'required',
				'value' => $imginf[2]['userid'],
				'style' => 'display:none;'
			);
			echo form_input($data);
			$data = array(
				'name' => 'usrn',
				'required' => 'required',
				'value' => $_SESSION['session_data']['Username'],
				'style' => 'display:none;'
			);
			echo form_input($data);
			$data = array(
				'name' => 'sub',
				'type' => 'submit',
				'value'=> 'Add to favorites',
				'class' => 'button'
			);
			echo form_submit($data); 
			echo form_close(); 
		};
	?>
	<div id="clearfix"></div>
</section>
<h2><?php echo $imginf[2]['contactinfo']; ?></h2>
</article>

</div>