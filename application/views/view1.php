<div id="brown">
	<h4>Featured Pieces | <?php echo anchor('Vieworg', 'Recent ') ?></h4>
<article>
<h1><?php 
 $this->load->helper('form'); 
 	$attributes = array('class' => 'formfix');
	echo form_open('user', $attributes);
	$data= array(
		'name' => 'u_name',
		'required' => 'required',
		'value' => $userinf['username'],
		'style' => 'display:none;'
	);
	echo form_input($data);
	$data = array(
		'name' => 'sub',
		'type' => 'submit',
		'value'=> $userinf['username'],
		'class' => 'buttonash1'
	);
	echo form_submit($data); 
	echo form_close(); 
?></h1>
<!---<section>
	<div id="imgcont">
		<img src="http://www.gettyimages.ca/gi-resources/images/Homepage/Category-Creative/UK/UK_Creative_462809583.jpg" alt="image 1">
	</div>
	<h3>Title of work goes here</h3>
	<p>Description 1 goes here</p>
	<div id="clearfix"></div>
</section>
-->
<section>
	<div id="imgcont">
		<?php 
		$this->load->database(); 
		$this->db->limit(1);
		$imageinf = $this->db->get_where('image', array('userid' => $userinf['userid']))->row_array();
		echo "<img src='".$imageinf['source']."' alt='image 1'>";
 ?>
	</div>
	<?php 
		echo "<h3>".$imageinf['title']."</h3>";
		echo "<p>".$imageinf['desc']."</p><br>";


		$this->db->select('favs');
		$this->db->where('username', $_SESSION['session_data']['Username']);
		$favolist = $this->db->get('users')->row_array();
		$k = $favolist['favs'];
		if (strpos($k, '-'.$imageinf['image_id']) !== false) {
		    echo 'already in favorites';
		}else{
			$attributes = array('class' => 'formfix');
			echo form_open('Addfav', $attributes);
			$data = array(
				'name' => 'favid',
				'required' => 'required',
				'value' => $imageinf['image_id'],
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

<h2><?php echo $userinf['contactinfo'];
?></h2>
</article>

</div>

<?php //print_r($userinf); ?>


<p>hi database should be above this line</p><p>hi</p><p>hi</p><p>hi</p><p>hi</p><p>hi</p>


