<?php
$dat = new DatabaseTable('resturants');
if(isset($_POST['save'])){
    if($_FILES['r_logo']['name'] == ''){
        $imgname = $_POST['r_logo_name'];
    }else{
        
        if ($_FILES['r_logo']['error'] == 0) {
            $imgname = $_FILES['r_logo']['name'];
            move_uploaded_file($_FILES['r_logo']['tmp_name'], '../../images/resturants/' . $imgname);
          }
    }
    $_POST['r_logo'] = $imgname;
    unset($_POST['r_logo_name'], $_POST['save']);
    $finupdate = $dat->save($_POST, 'r_id');
    header('Location: resturants');
}
	$title = 'Resturants';
	$content = loadTemplate('../templates/resturants_template.php', []);
?>