<?php 
$did = $pdo->query('DELETE FROM category WHERE c_id = '.$_GET['did']);
		    header('location: categories');


?>