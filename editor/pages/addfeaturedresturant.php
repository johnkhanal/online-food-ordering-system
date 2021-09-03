<?php
$dat = new DatabaseTable('featuredresturants');
if(isset($_POST['save'])){
    unset($_POST['save']);
    $_POST['fr_date'] = date("Y-m-d H:i:sa");
    $ins = $dat->save($_POST, '');
    header('Location: addfeaturedresturant');
}
	$title = 'Add Featured Resturants';
	$content = loadTemplate('../templates/addfeaturedresturant_template.php', []);
?>