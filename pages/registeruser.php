<?php
$dat = new DatabaseTable('users');
if(isset($_POST['signup'])){
    $_POST['u_reg_date'] = date("Y-m-d");
    if ($_FILES['u_profile']['error'] == 0) {
        $fileName = $_FILES['u_profile']['name'];
        move_uploaded_file($_FILES['u_profile']['tmp_name'], '../images/users/' . $fileName);
      }
    $_POST['u_password'] = password_hash($_POST['u_password'],PASSWORD_DEFAULT);
    $_POST['u_profile'] = $_FILES['u_profile']['name'];
    unset($_POST['signup']);
    $ins = $dat->save($_POST, '');
    session_start();
    $_SESSION['user_loggedin'] = true;
    $_SESSION['u_profile'] = $_POST['u_profile'];
    $_SESSION['u_id'] = $signin['u_id'];
    header('Location: index');
}
?>