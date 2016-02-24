<?php 
print_r($thedata);
foreach ($thedata as $row) {
	echo "<article>";
	echo "<h1>".$row['title']."</h1>";
	echo "<section>";

	echo "<img src='".$row['source']."' style='float:left;margin:15px;'><br>";

	echo "<div id='clearfix'></div>";
	echo "</section>";
	echo "</article>";
?>