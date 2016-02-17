<div id="brown">
	<h4>Featured Pieces</h4>
<article>
<h1><?php echo $userinf['username'];
	//echo "Erfder";
 ?></h1>
<section>
	<div id="imgcont">
		<img src="http://www.gettyimages.ca/gi-resources/images/Homepage/Category-Creative/UK/UK_Creative_462809583.jpg" alt="image 1">
	</div>
	<h3>Title of work goes here</h3>
	<p>Description 1 goes here</p>
	<div id="clearfix"></div>
</section>

<section>
	<div id="imgcont">
		<?php 
		$this->load->database(); 
		$this->db->limit(1);
		$imageinf = $this->db->get_where('image', array('userid' => $userinf['userid']))->row_array();
		echo "<img src='".$imageinf['source']."' alt='image 1'>";

 ?>
	</div>
	<h3>Title of work 2 goes here</h3>
	<p>Description 2 goes here</p>
	<div id="clearfix"></div>
</section>

<h2><?php echo $userinf['contactinfo'];
	//echo "Email: super@hero.org";
?></h2>
</article>

</div>

<?php print_r($userinf); ?>


<p>hi database should be above this line</p><p>hi</p><p>hi</p><p>hi</p><p>hi</p><p>hi</p>


