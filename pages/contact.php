<?php
$abc = new DatabaseTable('feedback');
if(isset($_POST['save'])){
	// print_r($_POST);
	unset($_POST['save']);
	// print_r($_POST);
    $abcd = $abc->insert($_POST, '');
    header('Location: contact');
}
	$title = 'Contact Us';
	$content = loadTemplate('../templates/contact_template.php', []);
?>