<?php 
$did = $pdo->query('DELETE FROM featuredresturants WHERE fr_id = '.$_GET['did']);
		    header('location: featuredresturants');


?>