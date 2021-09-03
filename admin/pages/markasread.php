<?php 
require '../db/connect.php';
$abc = new DatabaseTable('feedback');
$criteria = [
    'feed_status' => 'read',
    'feed_id' => $_GET['feed_id']
];
$abcd = $abc->save($criteria, 'feed_id');
header('Location: feedbacks');

?>