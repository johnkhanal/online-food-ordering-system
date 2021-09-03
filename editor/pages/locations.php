<?php
$dat = new DatabaseTable('locations');
if(isset($_POST['save'])){
    unset($_POST['save']);
    $finupdate = $dat->save($_POST, 'l_id');
    header('Location: locations');
}
	$title = 'Locations';
	$content = loadTemplate('../templates/locations_template.php', []);
?>