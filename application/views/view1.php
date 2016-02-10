
<header>
	here is a header.
</header>
<p>hi</p><p>hi</p><p>hi</p><p>hi</p><p>hi</p><p>hi</p><p>hi</p><p>hi</p><p>hi</p><p>hi</p><p>hi</p><p>hi</p><p>hi</p><p>hi</p><p>hi</p><p>hi</p><p>hi</p><p>hi</p><p>hi</p><p>hi</p>

<?php 
$this->load->database(); 
$query = $this->db->query('SELECT slug, title, id FROM news');
foreach ($query->result() as $row)
{
        echo $row->title;
        echo $row->slug;
        echo $row->id;
}

echo 'Total Results: ' . $query->num_rows();
?>

<p>hi database should be above this line</p><p>hi</p><p>hi</p><p>hi</p><p>hi</p><p>hi</p>


