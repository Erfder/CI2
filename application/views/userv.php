<div id="brown">
<?php 
echo "<h3 style='text-align: center;'>Welcome to ".$user."'s page</h3>";
foreach ($thedata as $row) {
$this->load->database(); 
$res = $this->db->get_where('dainfo', array('imgid' => $row['image_id']))->row_array();
	if (empty($res)) {
		echo "<article>";
		echo "<h1>".$row['title']."</h1>";
		echo "<section>";
		echo "<img src='".$row['source']."' style='float:left;margin:15px;'><br>";
		echo $row['desc']."<br><br>";
		echo $row['media']."<br>";
		$this->load->helper('form'); 
		$this->db->select('favs');
			$this->db->where('username', $_SESSION['session_data']['Username']);
			$favolist = $this->db->get('users')->row_array();
			$k = $favolist['favs'];
			if (strpos($k, '-'.$row['image_id']) !== false) {
			    echo '<h6>This is in your favorites</h6>';
			}else{
				$attributes = array('class' => 'formfix');
				echo form_open('Addfav', $attributes);
				$data = array(
					'name' => 'favid',
					'required' => 'required',
					'value' => $row['image_id'],
					'style' => 'display:none;'
				);
				echo form_input($data);
				$data = array(
					'name' => 'ufid',
					'required' => 'required',
					'value' => $row['userid'],
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
		echo "<div id='clearfix'></div>";
		echo "</section>";
		echo "</article>";
	}else{
		echo "<article>";
		echo "<h1>".$row['title']."</h1>";
		echo "<section>";
		echo "<img src='".$row['source']."' style='float:left;margin:15px;'><br>";
		echo $row['desc']."<br><br>";
		echo $row['media']."<br>";
		$this->load->helper('form'); 
		$this->db->select('favs');
			$this->db->where('username', $_SESSION['session_data']['Username']);
			$favolist = $this->db->get('users')->row_array();
			$k = $favolist['favs'];
			if (strpos($k, '-'.$row['image_id']) !== false) {
			    echo '<h6>This is in your favorites</h6>';
			}else{
				$attributes = array('class' => 'formfix');
				echo form_open('Addfav', $attributes);
				$data = array(
					'name' => 'favid',
					'required' => 'required',
					'value' => $row['image_id'],
					'style' => 'display:none;'
				);
				echo form_input($data);
				$data = array(
					'name' => 'ufid',
					'required' => 'required',
					'value' => $row['userid'],
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
		echo "<div id='clearfix'></div>";
		echo "</section>";
		echo "<script>
			  var oembed_url = 'http://backend.deviantart.com/oembed?url=http%3A%2F%2Ffav.me%2Fd9neuen&format=jsonp&callback=?';
			  $.getJSON(oembed_url, function(data) {
			    document.getElementById('image').src = data.url;
			  });
			</script>
			<div class='thumb'></div>
			<div class='thumb'>
				<div class='thumbinner'>
					<img id='image' src=''>
				</div>
			</div>
			<p>This image was uploaded to <a href='https://www.deviantart.com' >Deviant Art.</a></p>
			<div id='clearfix'></div>";
		echo "</article>";
	}
}
?>

</div>