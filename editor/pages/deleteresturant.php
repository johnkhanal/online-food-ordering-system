<?php 
$did = $pdo->query('DELETE FROM resturants WHERE r_id = '.$_GET['did']);
		    header('location: resturants');


?>