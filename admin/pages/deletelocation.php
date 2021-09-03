<?php 
$did = $pdo->query('DELETE FROM locations WHERE l_id = '.$_GET['did']);
		    header('location: locations');


?>