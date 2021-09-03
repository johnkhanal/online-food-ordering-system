<?php
$dat = new DatabaseTable('items');
if(isset($_POST['save'])){
    if($_FILES['i_image']['name'] == ''){
        $imgname = $_POST['i_image_name'];
    }else{
        
        if ($_FILES['i_image']['error'] == 0) {
            $imgname = $_FILES['i_image']['name'];
            move_uploaded_file($_FILES['i_image']['tmp_name'], '../../images/items/' . $imgname);
          }
    }
    $_POST['i_image'] = $imgname;
    unset($_POST['i_image_name'], $_POST['save']);
    $finupdate = $dat->save($_POST, 'i_id');
    header('Location: items');
}
	$title = 'Items';
	$content = loadTemplate('../templates/items_template.php', []);
?>