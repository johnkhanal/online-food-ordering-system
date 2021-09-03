<?php
$dat = new DatabaseTable('category');
if(isset($_POST['save'])){
    unset($_POST['save']);
    $ins = $dat->save($_POST, '');
    header('Location: addcategories');
}
	$title = 'Add Categories';
	$content = loadTemplate('../templates/addcategories_template.php', []);
?>