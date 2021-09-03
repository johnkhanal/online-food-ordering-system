<?php 
$dat = new DatabaseTable('orders');
$comid = $_GET['comid'];
// echo $comid;
$pp = $pdo->query("SELECT * FROM orders WHERE o_comid='$comid'");
foreach($pp as $ppp){
    $criteria = [
        'o_status' => 'Confirmed',
        'o_id' => $ppp['o_id']
    ];
    $abc = $dat->save($criteria, 'o_id');
    header('Location: orders');
}
?>