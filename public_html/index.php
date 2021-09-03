<?php
session_start();
	require '../db/connect.php';
	require '../functions/load_template.php';
	require '../classes/databasetable.php';

	if(isset($_GET['msg'])){
		echo $_GET['msg'];
	}

	if(isset($_GET['page'])){
		require '../pages/' . $_GET['page'] . '.php';
	}
	else{
		require '../pages/index.php';
	}
	// if(!$_GET['page'] == 'signinuser'){
	$tempVars = [
		'title' => $title,
		'content' => $content
	];
	echo loadTemplate('../templates/layout.php', $tempVars);
// }
?>