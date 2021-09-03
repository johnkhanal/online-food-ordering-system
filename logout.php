<?php
session_start();
session_destroy();
header('location: login.php');
$_SESSION['readerloggedin'] = false;
$_SESSION['admin_loggedin'] = false;
$_SESSION['accloggedin'] = false;
$_SESSION['hodloggedin'] = false;
?>