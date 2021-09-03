<?php
$dat = new DatabaseTable('editor');
    if(isset($_POST['save'])){
       
        if($_FILES['e_photo_new']['name'] != ''){
            if ($_FILES['e_photo_new']['error'] == 0) {
                $imgname = $_FILES['e_photo_new']['name'];
                move_uploaded_file($_FILES['e_photo_new']['tmp_name'], '../../images/editors/' . $imgname);
              }
            $_POST['e_photo'] = $_FILES['e_photo_new']['name'];
        }else{
            $_POST['e_photo'] = $_POST['e_photo'];
        }
        if($_POST['e_password_new'] != ''){
            $_POST['e_password'] = $_POST['e_password_new'];
            $_POST['e_password'] = password_hash($_POST['e_password'],PASSWORD_DEFAULT);
        }else{
            $_POST['e_password'] = $_POST['e_password'];           
        }
        unset($_POST['save'], $_POST['e_password_new']);
        $_POST['e_id'] = $_SESSION['eid'];
        $abc = $dat->save($_POST, 'e_id');
        header('Location: profile');
    }
	$title = 'Editor- Profile';
	$content = loadTemplate('../templates/profile_template.php', []);
?>