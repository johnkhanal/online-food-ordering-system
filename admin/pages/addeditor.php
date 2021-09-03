<?php
$dat = new DatabaseTable('editor');
if(isset($_POST['save'])){
    unset($_POST['save']);
    if ($_FILES['e_photo']['error'] == 0) {
        $fileName = $_FILES['e_photo']['name'];
        move_uploaded_file($_FILES['e_photo']['tmp_name'], '../../images/editors/' . $fileName);
      }
    $_POST['e_password'] = password_hash($_POST['e_password'],PASSWORD_DEFAULT);
    $_POST['e_photo'] = $_FILES['e_photo']['name'];
    $ins = $dat->save($_POST, '');
    header('Location: addeditor');
}
	$title = 'Add Editor';
	$content = loadTemplate('../templates/addeditor_template.php', []);
?>