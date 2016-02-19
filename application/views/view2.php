<div id="brown">
	<h4>Recent Pieces | <?php echo anchor('View', 'Featured ') ?></h4>

<article>
<h1><?php 
    echo $imginf[0]['username'];
 ?></h1>
<section>
	<div id="imgcont">
		<?php echo "<img src='".$imginf[0]['source']."' alt='image 1'>";  ?>
	</div>
	<h3><?php echo $imginf[0]['title']; ?></h3>
	<p><?php echo $imginf[0]['desc']; ?></p>
	<div id="clearfix"></div>
</section>
<h2><?php echo $imginf[0]['contactinfo']; ?></h2>
</article>

<article>
<h1><?php 
    echo $imginf[1]['username'];
 ?></h1>
<section>
	<div id="imgcont">
		<?php echo "<img src='".$imginf[1]['source']."' alt='image 1'>";  ?>
	</div>
	<h3><?php echo $imginf[1]['title']; ?></h3>
	<p><?php echo $imginf[1]['desc']; ?></p>
	<div id="clearfix"></div>
</section>
<h2><?php echo $imginf[1]['contactinfo']; ?></h2>
</article>

<article>
<h1><?php 
    echo $imginf[2]['username'];
 ?></h1>
<section>
	<div id="imgcont">
		<?php echo "<img src='".$imginf[2]['source']."' alt='image 1'>";  ?>
	</div>
	<h3><?php echo $imginf[2]['title']; ?></h3>
	<p><?php echo $imginf[2]['desc']; ?></p>
	<div id="clearfix"></div>
</section>
<h2><?php echo $imginf[2]['contactinfo']; ?></h2>
</article>

</div>



<p>hi database should be above this line</p><p>hi</p><p>hi</p><p>hi</p><p>hi</p><p>hi</p>


