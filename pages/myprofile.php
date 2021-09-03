<?php
$dat = new DatabaseTable('users');
    if(isset($_POST['save'])){
        if($_FILES['u_profile_new']['name'] != ''){
            if ($_FILES['u_profile_new']['error'] == 0) {
                $imgname = $_FILES['u_profile_new']['name'];
                move_uploaded_file($_FILES['u_profile_new']['tmp_name'], '../../images/users/' . $imgname);
              }
            $_POST['u_profile'] = $_FILES['u_profile_new']['name'];
        }else{
            $_POST['u_profile'] = $_POST['u_profile'];
        }
        if($_POST['u_password_new'] != ''){
            $_POST['u_password'] = $_POST['u_password_new'];
            $_POST['u_password'] = password_hash($_POST['u_password'],PASSWORD_DEFAULT);
        }else{
            $_POST['u_password'] = $_POST['u_password'];           
        }
        unset($_POST['save'], $_POST['u_password_new']);
        $_POST['u_id'] = $_SESSION['u_id'];
        $abc = $dat->save($_POST, 'u_id');
        header('Location: myprofile');
    }
	$title = 'User- Profile';
	$content = loadTemplate('../templates/myprofile_template.php', []);
?>