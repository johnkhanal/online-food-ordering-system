<?php 

require 'admin/db/connect.php';
if(isset($_POST['login'])){
  if(empty(trim($_POST["username"]))){
    $username_err = "Please enter username.";
} else{
    $username = trim($_POST["username"]);
}

// Check if password is empty
if(empty(trim($_POST["password"]))){
    $password_err = "Please enter your password.";
} else{
    $password = trim($_POST["password"]);
}
if(empty($username_err) && empty($password_err)){
  $udat = $pdo->prepare("SELECT * FROM editor WHERE e_username=:e_username");
  $data = ['e_username'=> $username];
	$udat -> execute($data);
  $udata = $udat->fetch();
  if($_POST['username'] == 'admin' && $_POST['password'] == 'admin'){
    session_start();
    $_SESSION['admin_loggedin'] = true;
    header('Location: admin/public_html/');
  }elseif(password_verify($password, $udata['e_password'])){
    session_start();
    $_SESSION['editor_loggedin'] = true;
    $_SESSION['eid'] = $udata['e_id'];
    header('Location: editor/public_html/');
  }else{
    echo 'Username and password doesnot match';
  }
}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Online Food Delivery-Login</title>
    <!-- Simple bar CSS -->
    <link rel="shortcut icon" href="images/logo/dark_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="admin/css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="admin/css/feather.css">
    <!-- Date Range Picker CSS -->
    <!-- <link rel="stylesheet" href="admin/css/daterangepicker.css"> -->
    <!-- App CSS -->
    <link rel="stylesheet" href="admin/css/app-light.css" id="lightTheme" disabled>
    <link rel="stylesheet" href="admin/css/app-dark.css" id="darkTheme">
  </head>
  <body class="dark ">
    <div class="wrapper vh-100">
      <div class="row align-items-center h-100">
        <form class="col-lg-3 col-md-4 col-10 mx-auto text-center" method="POST">
          <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
            <img src="images/logo/dark_logo.png" width="300px" height="200px"> 
          </a>
          <h1 class="h6 mb-3">Sign in</h1>
          <div class="form-group">
            <label for="inputEmail" class="sr-only">Username</label>
            <input type="text" id="inputEmail" name="username" class="form-control form-control-lg" placeholder="Email address" required="" autofocus="">
          </div>
          <div class="form-group">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="password" class="form-control form-control-lg" placeholder="Password" required="">
          </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Stay logged in </label>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
          <p class="mt-5 mb-3 text-muted">Copyright© 2020</p>
        </form>
      </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/simplebar.min.js"></script>
    <script src='js/daterangepicker.js'></script>
    <script src='js/jquery.stickOnScroll.js'></script>
    <script src="js/tinycolor-min.js"></script>
    <script src="js/config.js"></script>
    <script src="js/apps.js"></script>
  </body>
</html>
</body>
</html>