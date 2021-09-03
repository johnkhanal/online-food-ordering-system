<?php 
$did = $pdo->query('DELETE FROM items WHERE i_id = '.$_GET['did']);
		    header('location: items');


?>