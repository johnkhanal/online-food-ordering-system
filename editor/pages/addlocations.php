<?php
$dat = new DatabaseTable('locations');
if(isset($_POST['save'])){
    unset($_POST['save']);
    $ins = $dat->save($_POST, '');
    header('Location: addlocations');
}
	$title = 'Add Locations';
	$content = loadTemplate('../templates/addlocations_template.php', []);
?>