<?php
session_start();
session_destroy();
header('location: public_html/');
$_SESSION['user_loggedin'] = false;
?>