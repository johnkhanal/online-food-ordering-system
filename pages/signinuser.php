<?php 
require '../db/connect.php';
if(isset($_POST['signin'])){
   
    $u_email = $_POST['email'];
$password = $_POST['password'];
    $sin = $pdo->prepare('SELECT * FROM users WHERE u_email=?');
    
    $sin->execute([$u_email]);
    $signin = $sin->fetch();
    $counsinin = $sin->rowCount();
    
    if($counsinin>0){
        
            if(password_verify($password, $signin['u_password'])){
                session_start();
                $_SESSION['user_loggedin'] = true;
                $_SESSION['u_profile'] = $signin['u_profile'];
                $_SESSION['u_id'] = $signin['u_id'];
                header('Location: index.php');
            }else{
                echo "<script>
        alert('Invalid Password. Please Check and reenter');
        window.location.href='http://localhost/dissertation_project/public_html/';
        </script>";
            }
        
    }else{
        echo "<script>
        alert('Invalid Email and Password.');
        window.location.href='http://localhost/dissertation_project/public_html/';
        </script>";
    }
}

?>