<?php
$dat = new DatabaseTable('items');
if(isset($_POST['save'])){
    unset($_POST['save']);
    if ($_FILES['i_image']['error'] == 0) {
        $fileName = $_FILES['i_image']['name'];
        move_uploaded_file($_FILES['i_image']['tmp_name'], '../../images/items/' . $fileName);
	  }
    $_POST['i_image'] = $_FILES['i_image']['name'];
    $ins = $dat->save($_POST, '');
    header('Location: additems');
}
	$title = 'Add Items';
	$content = loadTemplate('../templates/additems_template.php', []);
?>