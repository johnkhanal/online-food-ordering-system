<?php
$msg = '';
if(isset($_POST['search'])){
	$stext = $_POST['r_name'];
	$dat4 = $pdo->prepare("SELECT * FROM resturants r
	INNER JOIN items i ON i.i_r_id=r.r_id
	LEFT JOIN category c ON i.i_c_id=c.c_id
	WHERE r.r_name LIKE '%$stext%' || r.r_address LIKE '%$stext%' || r.r_city LIKE '%$stext%' GROUP BY r.r_address DESC LIMIT 7");
	 $dat4->execute();
	 $dataa4 = $dat4->fetchAll();
	 $dataacoun4 = $dat4->rowCount();
	 if($dataacoun4<1){
		 $msg = 'No search items found';
	 }
}
else if(isset($_GET['catid'])){
	$cid = $_GET['catid'];
	$dat4 = $pdo->prepare("SELECT * FROM items i
	INNER JOIN resturants r ON i.i_r_id=r.r_id
	INNER JOIN category c ON i.i_c_id=c.c_id
	WHERE c.c_id='$cid' GROUP BY r.r_address DESC LIMIT 7");
	 $dat4->execute();
	 $dataa4 = $dat4->fetchAll();
	 $dataacoun4 = $dat4->rowCount();
	 if($dataacoun4<1){
		 $msg = 'No item in that category';
	 }
}else{
	$dat4 = $pdo->prepare("SELECT * FROM items i
	INNER JOIN resturants r ON i.i_r_id=r.r_id
	INNER JOIN category c ON i.i_c_id=c.c_id GROUP BY r.r_name
	");
	 $dat4->execute();
	 $dataa4 = $dat4->fetchAll();
	 $dataacoun4 = $dat4->rowCount();
	 if($dataacoun4<1){
		 $msg = '';
	 }
}



	$title = 'Resturants';
	$content = loadTemplate('../templates/resturants_template.php', ['dataa4' =>$dataa4, 'msg'=>$msg]);
?>