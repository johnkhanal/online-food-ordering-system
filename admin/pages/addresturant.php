<?php
$dat = new DatabaseTable('resturants');
if(isset($_POST['save'])){
    $_POST['r_o_name'] = $_POST['f_name'].' '.$_POST['l_name'];
    unset($_POST['f_name'], $_POST['l_name'], $_POST['save']);
    if ($_FILES['r_logo']['error'] == 0) {
        $fileName = $_FILES['r_logo']['name'];
        move_uploaded_file($_FILES['r_logo']['tmp_name'], '../../images/resturants/' . $fileName);
	  }
	$_POST['r_logo'] = $_FILES['r_logo']['name'];
    $ins = $dat->save($_POST, '');
    header('Location: addresturant');
}
	$title = 'Add Resturants';
	$content = loadTemplate('../templates/addresturant_template.php', []);
?>