<div id="brown">
<?php 
echo "<h3 style='text-align: center;'>Welcome to ".$user."'s page</h3>";
foreach ($thedata as $row) {
echo "<article>";
	echo "<h1>".$row['title']."</h1>";
	echo "<section>";
	echo "<img src='".$row['source']."' style='float:left;margin:15px;'><br>";
	echo $row['desc']."<br><br>";
	echo $row['media']."<br>";
	echo "<div id='clearfix'></div>";
	echo "</section>";
	echo "</article>";
}
echo "<p>hello</p>";
echo "<p>hello</p>";
echo "<p>hello</p>";
echo "<p>hello</p>";
//print_r($thedata);
?>
</div>