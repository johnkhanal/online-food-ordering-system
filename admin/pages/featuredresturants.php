<?php
$dat = new DatabaseTable('featuredresturants');
if(isset($_POST['save'])){
    unset($_POST['save']);
    $finupdate = $dat->save($_POST, 'fr_id');
    header('Location: featuredresturants');
}
	$title = 'Featured Resturants';
	$content = loadTemplate('../templates/featuredresturants_template.php', []);
?>