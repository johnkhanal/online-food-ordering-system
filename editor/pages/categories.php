<?php
$dat = new DatabaseTable('category');
if(isset($_POST['save'])){
    unset($_POST['save']);
    $finupdate = $dat->save($_POST, 'c_id');
    header('Location: categories');
}
	$title = 'Categories';
	$content = loadTemplate('../templates/categories_template.php', []);
?>