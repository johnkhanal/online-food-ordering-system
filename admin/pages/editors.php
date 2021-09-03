<?php
$dat = new DatabaseTable('editor');
if(isset($_POST['save'])){
    if($_FILES['e_photo']['name'] == ''){
        $imgname = $_POST['e_photo_name'];
    }else{
        
        if ($_FILES['e_photo']['error'] == 0) {
            $imgname = $_FILES['e_photo']['name'];
            move_uploaded_file($_FILES['e_photo']['tmp_name'], '../../images/editors/' . $imgname);
          }
    }
    $_POST['e_photo'] = $imgname;
    unset($_POST['e_photo_name'], $_POST['save']);
    $finupdate = $dat->save($_POST, 'e_id');
    header('Location: editors');
}
	$title = 'Editors';
	$content = loadTemplate('../templates/editors_template.php', []);
?>