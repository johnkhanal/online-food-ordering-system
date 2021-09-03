<?php
$dat = new DatabaseTable('orders');
if(isset($_POST['book'])){
	$_POST['o_comid'] = rand(1000,1000000).$_POST['o_i_name'].$_POST['o_c_id'];
	$_POST['o_date'] = date("Y-m-d");
	$_POST['o_status'] = 'Booked';
	unset($_POST['book']);
	$items = explode(",", $_POST['o_i_name']);
	$qtys = explode(",", $_POST['o_qty']);
	$prices = explode(",", $_POST['o_price']);
	for($i=0;$i<count($items);$i++){		
		$_POST['o_i_name'] = $items[$i];
		$_POST['o_qty'] = $qtys[$i];
		$_POST['o_price'] = $prices[$i];
		print_r($_POST);
		$ins = $dat->save($_POST, '');
		header('Location: viewmyorders');
	}
}
	$title = 'Checkout';
	$content = loadTemplate('../templates/checkout_template.php', []);
?>