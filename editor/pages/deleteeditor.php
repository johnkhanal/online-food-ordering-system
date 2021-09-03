<?php 
$did = $pdo->query('DELETE FROM editor WHERE e_id = '.$_GET['did']);
		    header('location: editors');


?>